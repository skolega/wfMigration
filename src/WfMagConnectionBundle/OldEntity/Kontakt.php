<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kontakt
 *
 * @ORM\Table(name="KONTAKT", indexes={@ORM\Index(name="KONTAKT_IDKONTR_NAZWISKO", columns={"ID_KONTRAHENTA", "NAZWISKO"})})
 * @ORM\Entity
 */
class Kontakt
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTAKTU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKontaktu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWISKO", type="string", length=50, nullable=true)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="IMIE", type="string", length=50, nullable=true)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="TYTUL", type="string", length=20, nullable=true)
     */
    private $tytul;

    /**
     * @var string
     *
     * @ORM\Column(name="STANOWISKO", type="string", length=50, nullable=true)
     */
    private $stanowisko;

    /**
     * @var string
     *
     * @ORM\Column(name="TEL", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="TEL_KOM", type="string", length=50, nullable=true)
     */
    private $telKom;

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="E_MAIL", type="string", length=255, nullable=true)
     */
    private $eMail;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=200, nullable=true)
     */
    private $uwagi;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOMYSLNY", type="smallint", nullable=true)
     */
    private $domyslny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="E_MAIL_DW", type="string", length=255, nullable=true)
     */
    private $eMailDw;

    /**
     * @var string
     *
     * @ORM\Column(name="GG_NR", type="string", length=30, nullable=true)
     */
    private $ggNr;

    /**
     * @var string
     *
     * @ORM\Column(name="SKYPE_NR", type="string", length=30, nullable=true)
     */
    private $skypeNr;

    /**
     * @var integer
     *
     * @ORM\Column(name="SMS_ZGODA", type="smallint", nullable=true)
     */
    private $smsZgoda = '0';


}

