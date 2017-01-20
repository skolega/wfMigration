<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Urzedy
 *
 * @ORM\Table(name="URZEDY", uniqueConstraints={@ORM\UniqueConstraint(name="AK_URZAD_SEMAFOR_URZEDY", columns={"SEMAFOR", "ID_URZEDU"})}, indexes={@ORM\Index(name="URZAD_NAZWA", columns={"NAZWA"}), @ORM\Index(name="URZAD_MIEJSCOWOSC", columns={"MIEJSCOWOSC"})})
 * @ORM\Entity
 */
class Urzedy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_URZEDU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUrzedu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=60, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_POCZTOWY", type="string", length=20, nullable=true)
     */
    private $kodPocztowy;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC", type="string", length=50, nullable=true)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ULICA_LOKAL", type="string", length=50, nullable=true)
     */
    private $ulicaLokal;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFON", type="string", length=50, nullable=true)
     */
    private $telefon;

    /**
     * @var string
     *
     * @ORM\Column(name="E_MAIL", type="string", length=50, nullable=true)
     */
    private $eMail;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_URZEDU", type="string", length=3, nullable=true)
     */
    private $typUrzedu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU_PD", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRachunkuPd;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU_VAT", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRachunkuVat;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $semafor;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOS_KOD", type="string", length=5, nullable=true)
     */
    private $dosKod;

    /**
     * @var string
     *
     * @ORM\Column(name="BANK_NAZWA", type="string", length=100, nullable=true)
     */
    private $bankNazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="BANK_KONTO", type="string", length=100, nullable=true)
     */
    private $bankKonto;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_WN", type="string", length=100, nullable=true)
     */
    private $kontoWn;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_MA", type="string", length=100, nullable=true)
     */
    private $kontoMa;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_US", type="string", length=10, nullable=true)
     */
    private $kodUs;


}

