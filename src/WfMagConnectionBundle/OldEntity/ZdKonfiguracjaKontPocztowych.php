<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdKonfiguracjaKontPocztowych
 *
 * @ORM\Table(name="ZD_KONFIGURACJA_KONT_POCZTOWYCH", indexes={@ORM\Index(name="ZD_KONFIGURACJA_KONT_POCZTOWYCH_ID_UZYTKOWNIKA", columns={"ID_UZYTKOWNIKA"})})
 * @ORM\Entity
 */
class ZdKonfiguracjaKontPocztowych
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
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_EMAIL", type="string", length=100, nullable=false)
     */
    private $adresEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGIN", type="string", length=100, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="HASLO", type="string", length=100, nullable=false)
     */
    private $haslo;

    /**
     * @var integer
     *
     * @ORM\Column(name="PORT_POCZTY_WYCHODZACEJ", type="integer", nullable=false)
     */
    private $portPocztyWychodzacej;

    /**
     * @var string
     *
     * @ORM\Column(name="SERWER_POCZTY_WYCHODZACEJ", type="string", length=50, nullable=false)
     */
    private $serwerPocztyWychodzacej;

    /**
     * @var string
     *
     * @ORM\Column(name="SSL_POCZTY_WYCHODZACEJ", type="string", length=30, nullable=false)
     */
    private $sslPocztyWychodzacej;

    /**
     * @var integer
     *
     * @ORM\Column(name="PORT_POCZTY_PRZYCHODZACEJ", type="integer", nullable=false)
     */
    private $portPocztyPrzychodzacej;

    /**
     * @var string
     *
     * @ORM\Column(name="SERWER_POCZTY_PRZYCHODZACEJ", type="string", length=50, nullable=false)
     */
    private $serwerPocztyPrzychodzacej;

    /**
     * @var string
     *
     * @ORM\Column(name="SSL_POCZTY_PRZYCHODZACEJ", type="string", length=30, nullable=false)
     */
    private $sslPocztyPrzychodzacej;

    /**
     * @var string
     *
     * @ORM\Column(name="AUT_POCZTY_PRZYCHODZACEJ", type="string", length=30, nullable=false)
     */
    private $autPocztyPrzychodzacej;

    /**
     * @var string
     *
     * @ORM\Column(name="AUT_POCZTY_WYCHODZACEJ", type="string", length=30, nullable=false)
     */
    private $autPocztyWychodzacej;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IMAP_POCZTY_PRZYCHODZACEJ", type="boolean", nullable=false)
     */
    private $imapPocztyPrzychodzacej;

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
     * @var boolean
     *
     * @ORM\Column(name="KASUJ_EMAILE", type="boolean", nullable=false)
     */
    private $kasujEmaile;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROGRAMU", type="integer", nullable=true)
     */
    private $idProgramu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="KONTO_INDYWIDUALNE", type="boolean", nullable=true)
     */
    private $kontoIndywidualne;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ODBIERZ_AUTOMATYCZNIE", type="boolean", nullable=false)
     */
    private $odbierzAutomatycznie;

    /**
     * @var integer
     *
     * @ORM\Column(name="INTERWAL", type="integer", nullable=true)
     */
    private $interwal;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_SKRZYNKI", type="integer", nullable=true)
     */
    private $nrSkrzynki = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="POTWIERDZENIE_ODBIORU", type="boolean", nullable=true)
     */
    private $potwierdzenieOdbioru;


}

