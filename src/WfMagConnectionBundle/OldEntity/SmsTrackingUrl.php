<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsTrackingUrl
 *
 * @ORM\Table(name="SMS_TRACKING_URL", indexes={@ORM\Index(name="SMS_TRACKING_URL_ID_FIRMY", columns={"ID_FIRMY"}), @ORM\Index(name="SMS_TRACKING_URL_NAZWA", columns={"NAZWA"})})
 * @ORM\Entity
 */
class SmsTrackingUrl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TRACKING_URL", type="integer", nullable=false)
     */
    private $idTrackingUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FIRMY", type="integer", nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=200, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_WWW", type="string", length=100, nullable=true)
     */
    private $adresWww;

    /**
     * @var string
     *
     * @ORM\Column(name="KLUCZ_SLEDZENIA", type="string", length=50, nullable=true)
     */
    private $kluczSledzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP", type="string", length=20, nullable=true)
     */
    private $typ;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_CZAS", type="datetime", nullable=true)
     */
    private $dataCzas = 'CURRENT_TIMESTAMP';


}

