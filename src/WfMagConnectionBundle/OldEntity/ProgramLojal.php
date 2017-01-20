<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProgramLojal
 *
 * @ORM\Table(name="PROGRAM_LOJAL", indexes={@ORM\Index(name="po_kontrahencie", columns={"ID_KONTRAHENTA"}), @ORM\Index(name="po_pkt", columns={"ILOSC_PKT"}), @ORM\Index(name="po_nr", columns={"NR_DOK"}), @ORM\Index(name="po_dacie", columns={"DATA_DOK"})})
 * @ORM\Entity
 */
class ProgramLojal
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PROGRAMU", type="string", length=9, nullable=false)
     */
    private $idProgramu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=false)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=1, nullable=false)
     */
    private $rodzaj = 'A';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_HANDLOWEGO", type="string", length=9, nullable=true)
     */
    private $idDokHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_DOK", type="string", length=4, nullable=false)
     */
    private $dataDok;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOK", type="string", length=30, nullable=true)
     */
    private $nrDok;

    /**
     * @var integer
     *
     * @ORM\Column(name="ILOSC_PKT", type="integer", nullable=false)
     */
    private $iloscPkt;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="string", length=9, nullable=true)
     */
    private $wartosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;


}

