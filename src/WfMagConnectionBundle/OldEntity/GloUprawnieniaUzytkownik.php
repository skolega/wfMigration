<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GloUprawnieniaUzytkownik
 *
 * @ORM\Table(name="GLO_UPRAWNIENIA_UZYTKOWNIK")
 * @ORM\Entity
 */
class GloUprawnieniaUzytkownik
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_GLO_UPRAWNIENIA", type="string", length=9, nullable=false)
     */
    private $idGloUprawnienia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;


}

