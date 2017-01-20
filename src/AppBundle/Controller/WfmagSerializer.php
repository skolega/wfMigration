<?php

namespace AppBundle\Controller;

use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use WfMagConnectionBundle\Entity\Artykul;
use WpConnectionBundle\Entity\WpPostmeta;
use WpConnectionBundle\Entity\WpPosts;

class WfmagSerializer extends Controller {

    /**
     * @Route("/artykulserialize", name="artykul_serialize")
     */
    public function serializeAction() {

        $fs = new Filesystem();
        $em = $this->get('doctrine')->getManager('wfmag');
        $wpPosts = $em->getRepository('WfMagConnectionBundle:Artykul')->findAll();
        $serializer = $this->get('serializer');
        $xml = $serializer->serialize($wpPosts, 'xml');

        $fs->dumpFile('xml/wfMagArtykuly.xml', $xml);

        return $this->redirectToRoute('artykul_index');
    }

    /**
     * @Route("/wppostdeserialize", name="artykul_deserialize")
     */
    public function deserializeAction() {

        $em = $this->get('doctrine')->getManager('wfmag');
        $data = file_get_contents('xml/wfMagArtykuly.xml');
        $serializer = $this->get('serializer');
        $artykuls = $serializer->deserialize($data, Artykul::class, 'xml');

        foreach ($artykuls as $item) {
            $em->persist($item);
        }
        $em->flush();

        return $this->redirectToRoute('artykul_index');
    }

    /**
     * @Route("/artykultoProduct", name="artykuly_to_wp")
     */
    public function getProducts(Request $request) {
        $em = $this->container->get('doctrine')->getManager('wfmag');
        $productIds = $request->query->get('productIds');
        $articles = [];
        $pathToWp = $this->container->getParameter('pathToWp');
        $now = new DateTime("now");
        $emWpPosts = $this->container->get('doctrine')->getManager('wp');

        $wpPosts = $emWpPosts->getRepository('WpConnectionBundle:WpPosts')->getPostsByName();
        if (!empty($productIds)) {
            foreach ($productIds as $productId) {
                $articles[] = $em->getRepository('WfMagConnectionBundle:Artykul')->findOneBy(['idArtykulu' => $productId, 'dostepnyWAukcjach' => 1]);
            }
        } else {
            $articles = $em->getRepository('WfMagConnectionBundle:Artykul')->findAll();
        }
        $em2 = $this->container->get('doctrine')->getManager('wp');
        foreach ($articles as $article) {
            if (key_exists($article->getNazwa(), $wpPosts)) {
                $post = $wpPosts[$article->getNazwa()];
            } else {
                $post = new WpPosts();
            }
            $post->setCommentCount('');
            $post->setCommentStatus('closed');
            $post->setMenuOrder(0);
            $post->setPingStatus('closed');
            $post->setPinged('');
            $post->setPostAuthor(1);
            $post->setPostContent($article->getOpis());
            $post->setPostContentFiltered('');
            $post->setPostContentFiltered('');
            $post->setPostDate($now);
            $post->setPostDateGmt($now);
            $post->setPostExcerpt($article->getOpis());
            $post->setPostMimeType('');
            $post->setPostModified($now);
            $post->setPostModifiedGmt($now);
            $slug = $this->get('app.slugger')->slugify($article->getNazwa());
            $post->setPostName($slug);
            $post->setPostParent(0);
            $post->setPostPassword('');
            $post->setPostStatus('publish');
            $post->setPostTitle($article->getNazwa());
            $post->setPostType('product');
            $post->setToPing('');

            $em2->persist($post);
            $em2->flush();
            $id = $post->getId();
            $manufacture = $em->getRepository('WfMagConnectionBundle:Kontrahent')->findOneBy(['idKontrahenta' => $article->getIdProducenta()]);
            $prices = $em->getRepository('WfMagConnectionBundle:CenaArtykulu')->findBy(['idArtykulu' => $article->getIdArtykulu()]);
            $post->setGuid($pathToWp . '?post_type=product&#038;p=' . $id);
            $attributes = [
                '_edit_last' => '1',
                '_edit_lock' => '',
                '_visibility' => 'visible',
                '_stock_status' => 'instock',
                'total_sales' => '',
                '_downloadable' => 'no',
                '_virtual' => 'no',
                '_purchase_note' => '',
                '_featured' => 'no',
                '_weight' => $article->getWaga(),
                '_length' => $article->getWymiarG(),
                '_width' => $article->getWymiarS(),
                '_height' => $article->getWymiarW(),
                '_sku' => '',
                '_product_attributes' => 'a:1:{s:9:"producent";a:6:{s:4:"name";s:9:"Producent";s:5:"value";' . serialize($manufacture->getNazwa()) . 's:8:"position";s:1:"0";s:10:"is_visible";i:1;s:12:"is_variation";i:0;s:11:"is_taxonomy";i:0;}}',
                '_regular_price' => $prices[0]->getCenaBrutto(),
                '_sale_price' => $prices[1]->getCenaBrutto(),
                '_sale_price_dates_from' => '',
                '_sale_price_dates_to' => '',
                '_price' => $prices[1]->getCenaBrutto(),
                '_sold_individually' => '',
                '_manage_stock' => 'no',
                '_backorders' => 'no',
                '_stock' => '',
                '_upsell_ids' => 'a:0:{}',
                '_crosssell_ids' => 'a:0:{}',
                '_product_version' => '2.6.9',
                '_product_image_gallery' => '',
                '_wc_rating_count' => '',
                '_wc_review_count' => '',
                '_wc_average_rating' => '',
                '_wp_attached_file' => '',
                '_wp_attachment_metadata' => '',
                '_thumbnail_id' => '',
            ];
            foreach ($attributes as $attr => $val) {
                $postAttr = $emWpPosts->getRepository('WpConnectionBundle:WpPostmeta')->findOneBy(['postId' => $id, 'metaKey' => $attr]);
                if (!$postAttr) {
                    $postAttr = new WpPostmeta();
                    $postAttr->setPostId($id);
                    $postAttr->setMetaKey($attr);
                }
                $postAttr->setMetaValue($val);
                $em2->persist($postAttr);
            }
            $em2->flush();
        }
        return $this->redirectToRoute('wpposts_index');
    }

}
