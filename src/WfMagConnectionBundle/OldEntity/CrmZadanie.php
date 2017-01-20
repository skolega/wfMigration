<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmZadanie
 *
 * @ORM\Table(name="CRM_ZADANIE", indexes={@ORM\Index(name="IDX_AA64D235E4CD8A51", columns={"ID_TYPU"})})
 * @ORM\Entity
 */
class CrmZadanie
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
     * @ORM\Column(name="ID_ZADANIA", type="string", length=9, nullable=false)
     */
    private $idZadania;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=true)
     */
    private $idKontrahenta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="TEMAT", type="string", length=50, nullable=false)
     */
    private $temat;

    /**
     * @var string
     *
     * @ORM\Column(name="LOKALIZACJA", type="string", length=50, nullable=true)
     */
    private $lokalizacja;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=3000, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="ETAPOWE", type="string", length=1, nullable=true)
     */
    private $etapowe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ETAPY", type="string", length=10, nullable=true)
     */
    private $etapy = '0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_OD", type="string", length=4, nullable=true)
     */
    private $dataOd;

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZINA_OD", type="integer", nullable=true)
     */
    private $godzinaOd;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_DO", type="string", length=4, nullable=true)
     */
    private $dataDo;

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZINA_DO", type="integer", nullable=true)
     */
    private $godzinaDo;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIORYTET", type="string", length=1, nullable=true)
     */
    private $priorytet;

    /**
     * @var string
     *
     * @ORM\Column(name="REALIZACJA", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $realizacja = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=1, nullable=true)
     */
    private $status = 'n';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="KOLOR", type="integer", nullable=true)
     */
    private $kolor = '16633516';

    /**
     * @var integer
     *
     * @ORM\Column(name="PRYWATNE", type="smallint", nullable=true)
     */
    private $prywatne = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZAS_PRZYPOMNIENIA", type="integer", nullable=true)
     */
    private $czasPrzypomnienia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ODLOZONE", type="string", length=1, nullable=true)
     */
    private $odlozone = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CYKLICZNE", type="smallint", nullable=true)
     */
    private $cykliczne = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZADANIA_CYKL", type="string", length=9, nullable=true)
     */
    private $idZadaniaCykl;

    /**
     * @var string
     *
     * @ORM\Column(name="CYKL_DZIENNE_ROBOCZY", type="string", length=1, nullable=true)
     */
    private $cyklDzienneRoboczy = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZAS_ROZMOWY", type="integer", nullable=true)
     */
    private $czasRozmowy = '0';

    /**
     * @var \WfMagConnectionBundle\Entity\CrmZadanieTyp
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\CrmZadanieTyp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TYPU", referencedColumnName="ID_TYPU")
     * })
     */
    private $idTypu;


}

