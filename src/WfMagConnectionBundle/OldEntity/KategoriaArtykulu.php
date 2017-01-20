<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KategoriaArtykulu
 *
 * @ORM\Table(name="KATEGORIA_ARTYKULU", uniqueConstraints={@ORM\UniqueConstraint(name="AK_KATEGORIA_SEMAFOR_KATEGORI", columns={"SEMAFOR", "ID_KATEGORII"}), @ORM\UniqueConstraint(name="AK_KATEGORIA_ART_IDMA_KATEGORI", columns={"ID_MAGAZYNU", "NAZWA"})}, indexes={@ORM\Index(name="KATART_IDMAG", columns={"ID_MAGAZYNU"}), @ORM\Index(name="KATART_IDCENDOM", columns={"ID_DOMYSLNEJ_CENY"}), @ORM\Index(name="GUID_KATEGORIA_INDEX", columns={"GUID_KATEGORIA"})})
 * @ORM\Entity
 */
class KategoriaArtykulu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII", type="string", length=9, nullable=false)
     */
    private $idKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMER_DZIALU", type="integer", nullable=true)
     */
    private $numerDzialu;

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA_I_KATALOG", type="string", length=30, nullable=true)
     */
    private $maskaIKatalog;

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA_I_HANDL", type="string", length=30, nullable=true)
     */
    private $maskaIHandl;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOMYSLNEJ_CENY", type="string", length=9, nullable=true)
     */
    private $idDomyslnejCeny = '0';

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
     * @ORM\Column(name="KONTO_FK_KATEGORII", type="string", length=70, nullable=true)
     */
    private $kontoFkKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT_ZAK", type="string", length=3, nullable=true)
     */
    private $kodVatZak;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="GUID_KATEGORIA", type="uniqueidentifier", nullable=true)
     */
    private $guidKategoria = 'newid()';

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
     * @ORM\Column(name="DOMYSLNA", type="string", length=1, nullable=true)
     */
    private $domyslna = '0';


}

