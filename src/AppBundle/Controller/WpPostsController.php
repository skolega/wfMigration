<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use WpConnectionBundle\Entity\WpPostmeta;
use WpConnectionBundle\Entity\WpPosts;
use function mb_strtolower;

/**
 * Wppost controller.
 *
 * @Route("wpposts")
 */
class WpPostsController extends Controller {

    /**
     * Lists all wpPost entities.
     *
     * @Route("/", name="wpposts_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager('wp');

        $wpPosts = $em->getRepository('WpConnectionBundle:WpPosts')->findByProduct();

        return $this->render('wordpress/wpposts/index.html.twig', array(
                    'wpPosts' => $wpPosts,
        ));
    }

    /**
     * Creates a new wpPost entity.
     *
     * @Route("/new", name="wpposts_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $wpPost = new Wppost();
        $form = $this->createForm('WpConnectionBundle\Form\WpPostsType', $wpPost);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($wpPost);
            $em->flush($wpPost);

            return $this->redirectToRoute('wpposts_show', array('id' => $wpPost->getId()));
        }

        return $this->render('wpposts/new.html.twig', array(
                    'wpPost' => $wpPost,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a wpPost entity.
     *
     * @Route("/{id}", name="wpposts_show")
     * @Method("GET")
     */
    public function showAction(WpPosts $wpPost) {
        $deleteForm = $this->createDeleteForm($wpPost);

        return $this->render('wordpress/wpposts/show.html.twig', array(
                    'wpPost' => $wpPost,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing wpPost entity.
     *
     * @Route("/{id}/edit", name="wpposts_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, WpPosts $wpPost) {
        $deleteForm = $this->createDeleteForm($wpPost);
        $editForm = $this->createForm('WpConnectionBundle\Form\WpPostsType', $wpPost);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('wpposts_edit', array('id' => $wpPost->getId()));
        }

        return $this->render('wpposts/edit.html.twig', array(
                    'wpPost' => $wpPost,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a wpPost entity.
     *
     * @Route("/{id}", name="wpposts_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, WpPosts $wpPost) {
        $form = $this->createDeleteForm($wpPost);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($wpPost);
            $em->flush($wpPost);
        }

        return $this->redirectToRoute('wpposts_index');
    }

    /**
     * Creates a form to delete a wpPost entity.
     *
     * @param WpPosts $wpPost The wpPost entity
     *
     * @return Form The form
     */
    private function createDeleteForm(WpPosts $wpPost) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('wpposts_delete', array('id' => $wpPost->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    /**
     * @Route("/searchImages/{search}/{id}", name="searchImages")
     * @Method("GET")
     */
    function searchImageAction($search, $id) {

        $imagesService = $this->get('app.images');
        $images = $imagesService->getImages($search, $id, 5);
        return $this->render('wordpress/wpposts/images.html.twig', array(
                    'images' => $images,
        ));
    }
    
    /**
     * @Route("/searchPostImages/{id}", name="searchPostImages")
     * @Method("GET")
     */
    function searchPostImagesAction($id) {

        $em = $this->getDoctrine()->getManager('wp');

        $images = $em->getRepository('WpConnectionBundle:WpPosts')->findBy(['postParent'=>$id, 'postType'=>'attachment', 'postMimeType'=>'image/jpeg']);
        
        return $this->render('wordpress/wpposts/images.html.twig', array(
                    'images' => $images,
        ));
    }

    /**
     * @Route("/searchMoreImages/{search}/{id}", name="searchMoreImages")
     * @Method("GET")
     */
    function searchMoreImageAction($search, $id) {

        $finder = new Finder();
        $imagesService = $this->get('app.images');
        $images = $imagesService->getImages($search, $id, 29);
        $shortSearch = mb_strtolower($imagesService->getSearcherShort($search));
        $producImagespath = $this->container->getParameter('productImagesPath');
        $imagesHdd = [];
        if (is_dir($producImagespath)) {

            $finder->files()->name($shortSearch . '*')->in($producImagespath);
            foreach ($finder as $file) {

                $imagesHdd[] = $file->getPathname();
            }
        }
        return $this->render('wordpress/wpposts/moreimages.html.twig', array(
                    'images' => $images,
                    'imagesHdd' => $imagesHdd,
                    'id' => $id,
        ));
    }

    /**
     * @Route("/sendImages/{id}", name="sendImages")
     * @Method({"GET", "POST"})
     */
    function sendImagesAction(WpPosts $wpPosts, Request $request) {

        $em = $this->container->get('doctrine')->getManager('wp');
        $siteHome = $em->getRepository('WpConnectionBundle:WpOpitions')->findOneBy(['optionName'=>'home']);
        $images_count = $request->query->get('images_count');
        $fs = new Filesystem();
        $producImagespath = $this->container->getParameter('productImagesPath');
        $WooCommerceProducImagespath = $this->container->getParameter('wcProductImagesPath');
        $now = new \DateTime("now");
        $productGallery = [];
        for ($i = 1; $i < $images_count + 1; $i++) {
            $name = $this->get('app.slugger')->slugify($wpPosts->getPostTitle()) . $i . '.jpg';
            $name150x150 = $this->get('app.slugger')->slugify($wpPosts->getPostTitle()) . $i . '150x150.jpg';
            $name300x181 = $this->get('app.slugger')->slugify($wpPosts->getPostTitle()) . $i . '300x181.jpg';
            $name768x463 = $this->get('app.slugger')->slugify($wpPosts->getPostTitle()) . $i . '768x463.jpg';
            $name180x180 = $this->get('app.slugger')->slugify($wpPosts->getPostTitle()) . $i . '180x180.jpg';
            $name300x300 = $this->get('app.slugger')->slugify($wpPosts->getPostTitle()) . $i . '300x300.jpg';
            $name600x482 = $this->get('app.slugger')->slugify($wpPosts->getPostTitle()) . $i . '600x482.jpg';
            $name800x400 = $this->get('app.slugger')->slugify($wpPosts->getPostTitle()) . $i . '800x400.jpg';
            $image = $request->query->get('image_' . $i);
            $imagePath = $WooCommerceProducImagespath . $now->format('Y') . '/' . $now->format('m') . '/' . $name;
            $fs->copy($image, $producImagespath . $name, true);
            $fs->copy($image, $imagePath, true);
            $names = ['thumbnail0' => $name150x150,
                'thumbnail1' => $name300x181,
                'thumbnail2' => $name768x463,
                'thumbnail3' => $name180x180,
                'thumbnail4' => $name300x300,
                'thumbnail5' => $name600x482,
                'thumbnail6' => $name800x400];
            foreach ($names as $filterName => $nameItem) {
                $this->writeThumbnail($producImagespath . $name, $WooCommerceProducImagespath . date("Y") . '/' . date("m") . '/' . $nameItem, $filterName);
            }
            $newPost = $em->getRepository('WpConnectionBundle:WpPosts')->findOneBy(['postTitle' => $name]);
            if (!$newPost) {
                $newPost = new WpPosts();
            }
            $newPost->setPostAuthor(1);
            $newPost->setPostDate($now);
            $newPost->setPostDateGmt($now);
            $newPost->setPostContent('');
            $newPost->setPostTitle($name);
            $newPost->setPostExcerpt('');
            $newPost->setPostStatus('inherit');
            $newPost->setCommentStatus('closed');
            $newPost->setPingStatus('closed');
            $newPost->setPostPassword('');
            $newPost->setPostName($name);
            $newPost->setToPing('');
            $newPost->setPinged('');
            $newPost->setPostModified($now);
            $newPost->setPostModifiedGmt($now);
            $newPost->setPostContentFiltered('');
            $newPost->setPostParent($wpPosts->getId());
            $newPost->setGuid($siteHome->getOptionValue().'/wp-content/uploads/'. date("Y") . '/' . date("m") . '/' . $name);
            $newPost->setMenuOrder(0);
            $newPost->setPostType('attachment');
            $newPost->setPostMimeType('image/jpeg');
            $newPost->setCommentCount(0);
            $em->persist($newPost);
            $em->flush();
            list($width, $height) = getimagesize($producImagespath . $name);
            $metadata = 'a:5:{s:5:"width";i:' . $width . ';s:6:"height";i:' . $height . ';s:4:"file";' . serialize(date("Y") . '/' . date("m") . '/' . $name) .
                    ';s:5:"sizes";a:9:{s:9:"thumbnail";a:4:{s:4:"file";' . serialize(date("Y") . '/' . date("m") . '/' . $name150x150) .
                    ';s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";' . serialize(date("Y") . '/' . date("m") . '/' . $name300x181) .
                    ';s:5:"width";i:300;s:6:"height";i:181;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";' . serialize(date("Y") . '/' . date("m") . '/' . $name768x463) .
                    ';s:5:"width";i:768;s:6:"height";i:463;s:9:"mime-type";s:10:"image/jpeg";}s:14:"shop_thumbnail";a:4:{s:4:"file";' . serialize(date("Y") . '/' . date("m") . '/' . $name180x180) .
                    ';s:5:"width";i:180;s:6:"height";i:180;s:9:"mime-type";s:10:"image/jpeg";}s:12:"shop_catalog";a:4:{s:4:"file";' . serialize(date("Y") . '/' . date("m") . '/' . $name300x300) .
                    ';s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:10:"image/jpeg";}s:11:"shop_single";a:4:{s:4:"file";' . serialize(date("Y") . '/' . date("m") . '/' . $name600x482) .
                    ';s:5:"width";i:600;s:6:"height";i:482;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";' . serialize(date("Y") . '/' . date("m") . '/' . $name300x300) .
                    ';s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:10:"image/jpeg";}s:15:"maxstore-single";a:4:{s:4:"file";' . serialize(date("Y") . '/' . date("m") . '/' . $name800x400) .
                    ';s:5:"width";i:800;s:6:"height";i:400;s:9:"mime-type";s:10:"image/jpeg";}s:17:"maxstore-home-top";a:4:{s:4:"file";' . serialize(date("Y") . '/' . date("m") . '/' . $name300x300) . ';s:5:"width";i:300;s:6:"height";i:300;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}';


            $wpAtachment = $em->getRepository('WpConnectionBundle:WpPostmeta')->findByNameAttachedFile($name);
            if (!$wpAtachment) {
                $wpAtachment = new WpPostmeta();
            }
            $wpAtachment->setPostId($newPost->getId());
            $wpAtachment->setMetaKey('_wp_attached_file');
            $wpAtachment->setMetaValue(date("Y") . '/' . date("m") . '/' . $name);
            $em->persist($wpAtachment);
            if ($wpAtachment->getMetaId()) {
                $wpAtachmentMeta = $em->getRepository('WpConnectionBundle:WpPostmeta')->findOneBy(['metaKey' => '_wp_attachment_metadata', 'postId' => $wpAtachment->getPostId()]);
            } else {
                $wpAtachmentMeta = new WpPostmeta();
            }
            $wpAtachmentMeta->setPostId($newPost->getId());
            $wpAtachmentMeta->setMetaKey('_wp_attachment_metadata');
            $wpAtachmentMeta->setMetaValue($metadata);
            $em->persist($wpAtachmentMeta);

            if ($i == 1) {
                $thumbMeta = $em->getRepository('WpConnectionBundle:WpPostmeta')->findOneBy(['postId' => $wpPosts->getId(), 'metaKey' => '_thumbnail_id']);
                $thumbMeta->setMetaValue($newPost->getId());
            } else {
                $productGallery[] = $newPost->getId();
            }
        }
        $galleryMeta = $em->getRepository('WpConnectionBundle:WpPostmeta')->findOneBy(['postId' => $wpPosts->getId(), 'metaKey' => '_product_image_gallery']);
        $galleryMeta->setMetaValue(implode(',', $productGallery));

        $em->flush();

        return $this->redirectToRoute('wpposts_show', array(
                    'id' => $wpPosts->getId(),
        ));
    }

    /**
     * Write a thumbnail image using the LiipImagineBundle
     * 
     * @param Document $fullSizeImgWebPath path where full size upload is stored e.g. uploads/attachments
     * @param string $thumbAbsPath full absolute path to attachment directory e.g. /var/www/project1/images/thumbs/
     * @param string $filter filter defined in config e.g. my_thumb
     * @param Object $diContainer Dependency Injection Object, if calling from controller just pass $this
     */
    public function writeThumbnail($fullSizeImgWebPath, $thumbAbsPath, $filter) {
        $container = $this->container; // the DI container, if keeping this function in controller just use $container = $this
        $dataManager = $container->get('liip_imagine.data.manager');    // the data manager service
        $filterManager = $container->get('liip_imagine.filter.manager'); // the filter manager service

        $image = $dataManager->find($filter, $fullSizeImgWebPath);                    // find the image and determine its type
        $response = $filterManager->applyFilter($image, $filter);
        $thumb = $response->getContent();                               // get the image from the response
        $f = fopen($thumbAbsPath, 'w');                                        // create thumbnail file
        fwrite($f, $thumb);                                             // write the thumbnail
        fclose($f);                                                     // close the file
    }

}
