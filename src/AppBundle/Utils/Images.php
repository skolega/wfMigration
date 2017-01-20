<?php

namespace AppBundle\Utils;

class Images {

    public $container;

    public function __construct($container) {
        $this->container = $container;
    }

    public function getImages($search, $id, $ammout = 5) {
        $unvantedElements = ['s.a.', 'sp. z o.o.', 's.c.'];
        $em = $this->container->get('doctrine')->getManager('wp');
        $wpPosts = $em->getRepository('WpConnectionBundle:WpPostmeta')->findOneBy(['postId' => $id, 'metaKey' => '_product_attributes']);
        $manufacture = '';
        if ($wpPosts == null) {
            $searcher = urlencode('no image');
            $searcherString = urlencode('No images');
        }
        if (!empty($wpPosts->getMetaValue())) {
            $data = unserialize($wpPosts->getMetaValue());
            if (key_exists("producent", $data)) {
                $manufacture = strtolower($data["producent"]["value"]);
            }
            foreach ($unvantedElements as $unvanted) {
                if (strpos($manufacture, $unvanted) !== false) {
                    $manufacture = str_replace($unvanted, '', $manufacture);
                }
            }
            $searchNew = $this->getSearcherShort($search);
            $searcher = urlencode(mb_strtolower($searchNew . ' ' . $manufacture));

            $searcherString = urlencode($searchNew . ' ' . $manufacture);
        }
        $url = "https://www.bing.com/images/search?pq=" . $searcher . "&sc=5-17&sp=-1&sk=&q=" . $searcher . "&qft=+filterui:imagesize-medium&FORM=R5IR2";
        $data = file_get_contents($url);

        $rr = explode("<div class=\"item\">", $data);

        for ($r = 1; $r < $ammout; $r++) {
            if (key_exists($r, $rr)) {
                $nf = explode("\"", $rr[$r]);
                $nextFil[] = $nf[5];
            }
        }

        return $nextFil;
    }

    public function getSearcherShort($search) {
        $stringElements = explode(' ', $search);

        foreach ($stringElements as $key => $item) {
            if (strpos($item, 'cm') !== false) {
                unset($stringElements[(int) $key]);
            }
        }
        $searchNew = implode(' ', $stringElements);

        return $searchNew;
    }

}
