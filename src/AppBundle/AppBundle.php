<?php

namespace AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppBundle extends Bundle {

    public function boot() {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('timestamp', 'string');
    }

}
