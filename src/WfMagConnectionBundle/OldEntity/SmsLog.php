<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsLog
 *
 * @ORM\Table(name="SMS_LOG", indexes={@ORM\Index(name="SMS_LOG_IDFIR", columns={"ID_FIRMY"}), @ORM\Index(name="SMS_LOG_IDUZYTK", columns={"ID_UZYTKOWNIKA"}), @ORM\Index(name="SMS_LOG_ODBIORCAWIADOMOSCI", columns={"ODBIORCA_WIADOMOSCI"}), @ORM\Index(name="SMS_LOG_DATA_CZAS", columns={"DATA_CZAS"}), @ORM\Index(name="SMS_ID_TRACKING_URL", columns={"ID_TRACKING_URL"})})
 * @ORM\Entity
 */
class SmsLog
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
     * @ORM\Column(name="ID_FIRMY", type="integer", nullable=false)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="integer", nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="KORELATOR_WIADOMOSCI", type="string", length=30, nullable=true)
     */
    private $korelatorWiadomosci;

    /**
     * @var string
     *
     * @ORM\Column(name="ODBIORCA_WIADOMOSCI", type="string", length=50, nullable=true)
     */
    private $odbiorcaWiadomosci;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_WIADOMOSCI_ZEW", type="string", length=50, nullable=true)
     */
    private $idWiadomosciZew;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_WIADOMOSCI_WEW", type="string", length=50, nullable=true)
     */
    private $idWiadomosciWew;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_WIADOMOSCI", type="string", length=50, nullable=true)
     */
    private $statusWiadomosci;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_DORECZENIA", type="string", length=50, nullable=true)
     */
    private $statusDoreczenia;

    /**
     * @var string
     *
     * @ORM\Column(name="NADAWCA_WIADOMOSCI", type="string", length=50, nullable=true)
     */
    private $nadawcaWiadomosci;

    /**
     * @var string
     *
     * @ORM\Column(name="TRESC_WIADOMOSCI", type="string", length=2000, nullable=true)
     */
    private $trescWiadomosci;

    /**
     * @var string
     *
     * @ORM\Column(name="WIADOMOSC_XML_WYSYLKA", type="text", length=-1, nullable=true)
     */
    private $wiadomoscXmlWysylka;

    /**
     * @var string
     *
     * @ORM\Column(name="WIADOMOSC_XML_ODBIOR", type="text", length=-1, nullable=true)
     */
    private $wiadomoscXmlOdbior;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_CZAS", type="datetime", nullable=true)
     */
    private $dataCzas = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SMS_WYSYLKI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idSmsWysylki;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TRACKING_URL", type="integer", nullable=true)
     */
    private $idTrackingUrl;


}

