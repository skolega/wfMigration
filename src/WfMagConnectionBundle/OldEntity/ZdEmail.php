<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmail
 *
 * @ORM\Table(name="ZD_EMAIL", indexes={@ORM\Index(name="ZD_EMAIL_EMAIL_OD", columns={"EMAIL_OD"}), @ORM\Index(name="ZD_EMAIL_EMAIL_DO", columns={"EMAIL_DO"}), @ORM\Index(name="ZD_EMAIL_DATA", columns={"DATA"}), @ORM\Index(name="ZD_EMAIL_ID_UZYTKOWNIKA", columns={"ID_UZYTKOWNIKA"}), @ORM\Index(name="ZD_EMAIL_ID_FIRMY", columns={"ID_FIRMY"}), @ORM\Index(name="ZD_EMAIL_ID_FOLDERU", columns={"ID_FOLDERU"}), @ORM\Index(name="ZD_EMAIL_ID_PROGRAMU", columns={"ID_PROGRAMU"}), @ORM\Index(name="ZD_EMAIL_EMAIL_PRZECZYTANY", columns={"EMAIL_PRZECZYTANY"})})
 * @ORM\Entity
 */
class ZdEmail
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
     * @ORM\Column(name="EMAIL_OD", type="string", length=200, nullable=true)
     */
    private $emailOd;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_DO", type="string", length=900, nullable=true)
     */
    private $emailDo;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_DW", type="string", length=900, nullable=true)
     */
    private $emailDw;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_UDW", type="string", length=900, nullable=true)
     */
    private $emailUdw;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="LICZBA_ZALACZNIKOW", type="smallint", nullable=true)
     */
    private $liczbaZalacznikow;

    /**
     * @var boolean
     *
     * @ORM\Column(name="POTWIERDZENIE_ODCZYTU", type="boolean", nullable=true)
     */
    private $potwierdzenieOdczytu;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIORYTET", type="string", length=50, nullable=true)
     */
    private $priorytet;

    /**
     * @var string
     *
     * @ORM\Column(name="TEMAT", type="string", length=500, nullable=true)
     */
    private $temat;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_MESSAGEID", type="string", length=50, nullable=false)
     */
    private $emailMessageid;

    /**
     * @var string
     *
     * @ORM\Column(name="POP3_UNIQUEID", type="string", length=50, nullable=true)
     */
    private $pop3Uniqueid;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_INREPLYTO", type="string", length=50, nullable=true)
     */
    private $emailInreplyto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EMAIL_PRZECZYTANY", type="boolean", nullable=true)
     */
    private $emailPrzeczytany;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EMAIL_ROBOCZY", type="boolean", nullable=true)
     */
    private $emailRoboczy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EMAIL_WYSLANY", type="boolean", nullable=true)
     */
    private $emailWyslany;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_KONFIGURACJI", type="integer", nullable=false)
     */
    private $idKonfiguracji;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="integer", nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FIRMY", type="integer", nullable=false)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_OBIEKTU_NADRZEDNEGO", type="integer", nullable=true)
     */
    private $idObiektuNadrzednego;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_KATEGORIA_EMAILA", type="integer", nullable=true)
     */
    private $idKategoriaEmaila;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FOLDERU", type="integer", nullable=false)
     */
    private $idFolderu;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_OD_OPIS", type="text", length=-1, nullable=true)
     */
    private $emailOdOpis;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_DO_OPIS", type="text", length=-1, nullable=true)
     */
    private $emailDoOpis;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROGRAMU", type="integer", nullable=true)
     */
    private $idProgramu;


}

