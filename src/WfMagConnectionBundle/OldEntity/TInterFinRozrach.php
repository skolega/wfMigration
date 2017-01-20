<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TInterFinRozrach
 *
 * @ORM\Table(name="T_INTER_FIN_ROZRACH")
 * @ORM\Entity
 */
class TInterFinRozrach
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="decimal", precision=18, scale=0, nullable=true)
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
     * @ORM\Column(name="ID_DOKUMENTU_FINANSOWEGO", type="decimal", precision=18, scale=0, nullable=true)
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
     * @ORM\Column(name="ID_FAKTURY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFaktury;

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
     * @var integer
     *
     * @ORM\Column(name="CZY_POWSTAJE_ROZRACHUNEK", type="smallint", nullable=true)
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


}

