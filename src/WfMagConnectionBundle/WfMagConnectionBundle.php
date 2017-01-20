<?php

namespace WfMagConnectionBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WfMagConnectionBundle extends Bundle {

    public function boot() {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $em->getConnection('wfmag')->getDatabasePlatform()->registerDoctrineTypeMapping('timestamp', 'string');
    }

}
