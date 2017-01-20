<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmailPop3id
 *
 * @ORM\Table(name="ZD_EMAIL_Pop3Id", indexes={@ORM\Index(name="ZD_EMAIL_Pop3Id_Pop3Id", columns={"Pop3Id"})})
 * @ORM\Entity
 */
class ZdEmailPop3id
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_konfiguracji", type="integer", nullable=false)
     */
    private $idKonfiguracji;

    /**
     * @var string
     *
     * @ORM\Column(name="Guid", type="string", length=36, nullable=false)
     */
    private $guid;

    /**
     * @var string
     *
     * @ORM\Column(name="Pop3Id", type="string", length=50, nullable=false)
     */
    private $pop3id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pozycja", type="integer", nullable=false)
     */
    private $pozycja;


}

