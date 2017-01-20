<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GloUprawnienia
 *
 * @ORM\Table(name="GLO_UPRAWNIENIA")
 * @ORM\Entity
 */
class GloUprawnienia
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
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;


}

