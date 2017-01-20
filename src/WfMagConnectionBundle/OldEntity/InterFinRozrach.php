<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterFinRozrach
 *
 * @ORM\Table(name="INTER_FIN_ROZRACH", indexes={@ORM\Index(name="INTER_DOK_HF_IDFAKTURY", columns={"ID_FAKTURY"}), @ORM\Index(name="INTER_DOK_HF_IDZAMOWIENIA", columns={"ID_ZAMOWIENIA"}), @ORM\Index(name="INTER_DOK_HF_NOTA", columns={"ID_NOTY", "ID_POZYCJI"}), @ORM\Index(name="INTER_DOK_HF_DH", columns={"ID_DOKUMENTU_FINANSOWEGO", "CZY_POWSTAJE_ROZRACHUNEK"})})
 * @ORM\Entity
 */
class InterFinRozrach
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="string", length=9, nullable=false)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="string", length=9, nullable=true)
     */
    private $idRozrachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU_GEN", type="string", length=9, nullable=true)
     */
    private $idRozrachunkuGen;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_FINANSOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokumentuFinansowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMOWIENIA", type="string", length=9, nullable=true)
     */
    private $idZamowienia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FAKTURY", type="string", length=9, nullable=true)
     */
    private $idFaktury = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OPISPOZYCJI", type="string", length=100, nullable=true)
     */
    private $opispozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA", type="string", length=9, nullable=true)
     */
    private $kwota;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_WAL", type="string", length=9, nullable=true)
     */
    private $kwotaWal;

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_POWSTAJE_ROZRACHUNEK", type="string", length=1, nullable=true)
     */
    private $czyPowstajeRozrachunek;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SUMA_ODSETEK", type="string", length=9, nullable=true)
     */
    private $sumaOdsetek = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_NOTY", type="string", length=9, nullable=true)
     */
    private $idNoty;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=1, nullable=true)
     */
    private $rodzaj = '';

    /**
     * @var string
     *
     * @ORM\Column(name="WAL_BAZOWA", type="string", length=1, nullable=true)
     */
    private $walBazowa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="K_POZOSTALO", type="string", length=9, nullable=true)
     */
    private $kPozostalo = '0';


}

