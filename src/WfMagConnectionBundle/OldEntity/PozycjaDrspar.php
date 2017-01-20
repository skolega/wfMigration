<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozycjaDrspar
 *
 * @ORM\Table(name="POZYCJA_DRSPAR", indexes={@ORM\Index(name="POZYCJA_DRSPAR_IDPDM", columns={"ID_POZYCJI_DOKMAG"}), @ORM\Index(name="POZYCJA_DRSPAR_IDART", columns={"ID_ARTYKULU"})})
 * @ORM\Entity
 */
class PozycjaDrspar
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
     * @ORM\Column(name="ID_DRSPAR", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDrspar;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLU", type="integer", nullable=true)
     */
    private $plu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_ARTYKULU", type="string", length=40, nullable=true)
     */
    private $nazwaArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA", type="string", length=9, nullable=true)
     */
    private $kwota;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO", type="string", length=9, nullable=true)
     */
    private $cenaBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT", type="string", length=9, nullable=true)
     */
    private $rabat;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROC_KWOTA", type="smallint", nullable=true)
     */
    private $procKwota;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT2", type="string", length=5, nullable=true)
     */
    private $rabat2;

    /**
     * @var string
     *
     * @ORM\Column(name="DO_ROZLICZENIA", type="string", length=9, nullable=true)
     */
    private $doRozliczenia;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=true)
     */
    private $przelicznik;

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=true)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_ARTYKULU", type="string", length=1, nullable=true)
     */
    private $rodzajArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_DOKMAG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPozycjiDokmag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;


}

