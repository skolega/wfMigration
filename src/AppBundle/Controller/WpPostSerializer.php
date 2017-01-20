<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use WpConnectionBundle\Entity\WpPosts;

class WpPostSerializer extends Controller {

    /**
     * @Route("/wppostserialize", name="wppost_serialize")
     */
    public function serializeAction() {

        $fs = new Filesystem();
        $em = $this->get('doctrine')->getManager('wp');
        $wpPosts = $em->getRepository('WpConnectionBundle:WpPosts')->findByProduct();
        $serializer = $this->get('serializer');
        $xml = $serializer->serialize($wpPosts, 'xml');

        $fs->dumpFile('xml/wpPosts.xml', $xml);

        return $this->redirectToRoute('wpposts_index');
    }

    /**
     * @Route("/wppostdeserialize", name="wppost_deserialize")
     */
    public function deserializeAction() {

        $em = $this->get('doctrine')->getManager('wp');
        $data = file_get_contents('xml/wpPosts.xml');
        $serializer = $this->get('serializer');
        $posts = $serializer->deserialize($data, WpPosts::class, 'xml');

        foreach ($posts as $post) {
            $em->persist($post);
        }
        $em->flush();
        
        return $this->redirectToRoute('wpposts_index');
    }

}
