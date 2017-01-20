<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmailAdres
 *
 * @ORM\Table(name="ZD_EMAIL_ADRES", indexes={@ORM\Index(name="ZD_EMAIL_ADRES_Adres", columns={"Adres"})})
 * @ORM\Entity
 */
class ZdEmailAdres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Adres", type="string", length=255, nullable=false)
     */
    private $adres;


}

