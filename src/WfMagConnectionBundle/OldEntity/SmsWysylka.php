<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsWysylka
 *
 * @ORM\Table(name="SMS_WYSYLKA")
 * @ORM\Entity
 */
class SmsWysylka
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SMS_WYSYLKI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSmsWysylki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="integer", nullable=false)
     */
    private $prgkod = '3';

    /**
     * @var string
     *
     * @ORM\Column(name="KONTEKST", type="string", length=50, nullable=true)
     */
    private $kontekst = 'KONTR_BRW';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_CZAS", type="datetime", nullable=true)
     */
    private $dataCzas = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="TRESC_WIADOMOSCI", type="string", length=2000, nullable=true)
     */
    private $trescWiadomosci;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SMS_SZABLONU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idSmsSzablonu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ILOSC_WYSLAN", type="integer", nullable=true)
     */
    private $iloscWyslan = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SPERSONALIZOWANA", type="smallint", nullable=true)
     */
    private $spersonalizowana = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TRACKING_URL", type="integer", nullable=true)
     */
    private $idTrackingUrl;


}

