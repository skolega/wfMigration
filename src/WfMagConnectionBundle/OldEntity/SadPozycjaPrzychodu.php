<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SadPozycjaPrzychodu
 *
 * @ORM\Table(name="SAD_POZYCJA_PRZYCHODU", indexes={@ORM\Index(name="SADPP_IDART", columns={"ID_ARTYKULU"}), @ORM\Index(name="SADPP_IDFSADU", columns={"ID_FAKTURY_SADU"}), @ORM\Index(name="SADPP_IDPOZPRZYCH", columns={"ID_POZ_PRZYCH"}), @ORM\Index(name="SADPP_NRSERII", columns={"NR_SERII"})})
 * @ORM\Entity
 */
class SadPozycjaPrzychodu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_PRZYCH", type="string", length=9, nullable=false)
     */
    private $idPozPrzych;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SADU", type="string", length=9, nullable=true)
     */
    private $idSadu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FAKTURY_SADU", type="string", length=9, nullable=true)
     */
    private $idFakturySadu;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_POZYCJI", type="integer", nullable=true)
     */
    private $nrPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BEZ_RABATU", type="string", length=9, nullable=true)
     */
    private $cenaBezRabatu;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT", type="string", length=5, nullable=true)
     */
    private $rabat;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_Z_FAKTURY", type="string", length=9, nullable=true)
     */
    private $cenaZFaktury;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc;

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=true)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=true)
     */
    private $przelicznik;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="string", length=9, nullable=true)
     */
    private $wartosc;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=500, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=true)
     */
    private $flagaStanu;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_SERII", type="string", length=50, nullable=true)
     */
    private $nrSerii;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WAZNOSCI", type="string", length=4, nullable=true)
     */
    private $dataWaznosci;

    /**
     * @var string
     *
     * @ORM\Column(name="WAGA_BRUTTO", type="string", length=9, nullable=true)
     */
    private $wagaBrutto = '0';


}

