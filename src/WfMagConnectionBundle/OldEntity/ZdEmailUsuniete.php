<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmailUsuniete
 *
 * @ORM\Table(name="ZD_EMAIL_USUNIETE", indexes={@ORM\Index(name="ZD_EMAIL_USUNIETE_Pop3_UniqueId", columns={"Pop3_UniqueId"})})
 * @ORM\Entity
 */
class ZdEmailUsuniete
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
     * @ORM\Column(name="Pop3_UniqueId", type="string", length=50, nullable=false)
     */
    private $pop3Uniqueid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data", type="datetime", nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Konfiguracji", type="integer", nullable=false)
     */
    private $idKonfiguracji;


}

