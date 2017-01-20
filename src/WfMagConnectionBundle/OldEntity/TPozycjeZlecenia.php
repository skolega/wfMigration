<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPozycjeZlecenia
 *
 * @ORM\Table(name="T_POZYCJE_ZLECENIA")
 * @ORM\Entity
 */
class TPozycjeZlecenia
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
     * @ORM\Column(name="ID_ZLECENIA", type="string", length=9, nullable=false)
     */
    private $idZlecenia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_WARIANTU", type="string", length=9, nullable=true)
     */
    private $idWariantu;

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
     * @ORM\Column(name="STATUS", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc;

    /**
     * @var string
     *
     * @ORM\Column(name="DO_PRODUKCJI", type="string", length=9, nullable=true)
     */
    private $doProdukcji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYPRODUKOWANO", type="string", length=9, nullable=true)
     */
    private $wyprodukowano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_SERII", type="string", length=50, nullable=true)
     */
    private $nrSerii = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WAZNOSCI", type="string", length=4, nullable=true)
     */
    private $dataWaznosci;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_MONTAZU", type="string", length=9, nullable=true)
     */
    private $idPozycjiMontazu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POLE1", type="string", length=100, nullable=true)
     */
    private $pole1;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE2", type="string", length=100, nullable=true)
     */
    private $pole2;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE3", type="string", length=100, nullable=true)
     */
    private $pole3;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE4", type="string", length=100, nullable=true)
     */
    private $pole4;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE5", type="string", length=100, nullable=true)
     */
    private $pole5;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE6", type="string", length=100, nullable=true)
     */
    private $pole6;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE7", type="string", length=100, nullable=true)
     */
    private $pole7;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE8", type="string", length=100, nullable=true)
     */
    private $pole8;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE9", type="string", length=100, nullable=true)
     */
    private $pole9;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE10", type="string", length=100, nullable=true)
     */
    private $pole10;


}

