<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZlecenieProdukcyjne
 *
 * @ORM\Table(name="ZLECENIE_PRODUKCYJNE", indexes={@ORM\Index(name="ZLPROD_IDMNUM", columns={"ID_MAGAZYNU", "NUMER"}), @ORM\Index(name="ZLPROD_IDNUMRODZ", columns={"NUMER", "RODZAJ_ZLECENIA", "STATUS", "ID_ZLECENIA"}), @ORM\Index(name="ZLECENIE_KOD_KRES", columns={"KOD_KRESKOWY"})})
 * @ORM\Entity
 */
class ZlecenieProdukcyjne
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZLECENIA", type="string", length=9, nullable=false)
     */
    private $idZlecenia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="AUTONUMER", type="string", length=9, nullable=true)
     */
    private $autonumer;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_ZLECENIA", type="string", length=10, nullable=true)
     */
    private $rodzajZlecenia;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=1000, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=true)
     */
    private $flagaStanu;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="string", length=9, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;

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
     * @ORM\Column(name="DATA_RW", type="string", length=4, nullable=true)
     */
    private $dataRw;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_PW", type="string", length=4, nullable=true)
     */
    private $dataPw;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=true)
     */
    private $idEtykiety = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_OD", type="string", length=4, nullable=true)
     */
    private $dataOd;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_DO", type="string", length=4, nullable=true)
     */
    private $dataDo;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZAS_OD", type="integer", nullable=true)
     */
    private $czasOd;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZAS_DO", type="integer", nullable=true)
     */
    private $czasDo;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKontrahenta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMOWIENIA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idZamowienia = '0';


}

