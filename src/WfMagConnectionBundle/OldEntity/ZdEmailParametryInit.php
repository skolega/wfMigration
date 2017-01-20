<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmailParametryInit
 *
 * @ORM\Table(name="ZD_EMAIL_PARAMETRY_INIT", indexes={@ORM\Index(name="ZD_EMAIL_PARAMETRY_INIT_ID_SESJI", columns={"ID_SESJI"}), @ORM\Index(name="ZD_EMAIL_PARAMETRY_INIT_DATA", columns={"DATA"}), @ORM\Index(name="ZD_EMAIL_PARAMETRY_INIT_KOD", columns={"KOD"})})
 * @ORM\Entity
 */
class ZdEmailParametryInit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=30, nullable=true)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="text", length=-1, nullable=true)
     */
    private $wartosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SESJI", type="string", length=40, nullable=true)
     */
    private $idSesji;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA", type="datetime", nullable=true)
     */
    private $data = 'CURRENT_TIMESTAMP';


}

