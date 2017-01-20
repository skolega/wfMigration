<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SerwisUrzadzenie
 *
 * @ORM\Table(name="SERWIS_URZADZENIE")
 * @ORM\Entity
 */
class SerwisUrzadzenie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_URZADZENIA", type="string", length=9, nullable=false)
     */
    private $idUrzadzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY_SERWISOWEJ", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idGrupySerwisowej;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_FABRYCZNY", type="string", length=30, nullable=true)
     */
    private $nrFabryczny;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_SERYJNY", type="string", length=30, nullable=true)
     */
    private $nrSeryjny;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_PRODUKCJI", type="string", length=4, nullable=true)
     */
    private $dataProdukcji;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_SPRZEDAZY", type="string", length=4, nullable=true)
     */
    private $dataSprzedazy;

    /**
     * @var integer
     *
     * @ORM\Column(name="GWARANCJA_MS", type="integer", nullable=true)
     */
    private $gwarancjaMs;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_PRZEGLADU_OST", type="string", length=4, nullable=true)
     */
    private $dataPrzegladuOst;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_PRZEGLADU_NAST", type="string", length=4, nullable=true)
     */
    private $dataPrzegladuNast;

    /**
     * @var string
     *
     * @ORM\Column(name="PRODUCENT", type="string", length=100, nullable=true)
     */
    private $producent;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=1000, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=true)
     */
    private $flagaStanu = '0';

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

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy = '';


}

