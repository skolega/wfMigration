<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DokumentFinansowy
 *
 * @ORM\Table(name="DOKUMENT_FINANSOWY", uniqueConstraints={@ORM\UniqueConstraint(name="DOKFIN_PLATNIK_NAZWA", columns={"PLATNIK_NAZWA", "ID_DOKUMENTU_FINANSOWEGO"}), @ORM\UniqueConstraint(name="DOKFIN_PLATNIK_NAZWA_DESC", columns={"PLATNIK_NAZWA", "ID_DOKUMENTU_FINANSOWEGO"})}, indexes={@ORM\Index(name="DOKFIN_IDFIR_DATA", columns={"ID_FIRMY", "DATA"}), @ORM\Index(name="DOKFIN_IDFIR_NUMER", columns={"ID_FIRMY", "NUMER"}), @ORM\Index(name="DOKFIN_IDFIR_KWOTA", columns={"ID_FIRMY", "KWOTA"}), @ORM\Index(name="DOKFIN_IDRACH", columns={"ID_RACHUNKU_KASY"}), @ORM\Index(name="DOKFIN_IDPRAC", columns={"ID_PRACOWNIKA"}), @ORM\Index(name="DOKFIN_IDRAP", columns={"ID_RAP"}), @ORM\Index(name="DOKFIN_SEMAFOR", columns={"SEMAFOR"})})
 * @ORM\Entity
 */
class DokumentFinansowy
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
     * @ORM\Column(name="ID_DOKUMENTU_FINANSOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokumentuFinansowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PLATNIKA", type="string", length=9, nullable=false)
     */
    private $idPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_PLATNIKA", type="string", length=1, nullable=true)
     */
    private $typPlatnika;

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
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $przelicznikWal = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=true)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU_KASY", type="string", length=9, nullable=true)
     */
    private $idRachunkuKasy;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_RACHUNKU_PLATNIKA", type="string", length=100, nullable=true)
     */
    private $nrRachunkuPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer;

    /**
     * @var integer
     *
     * @ORM\Column(name="AUTONUMER", type="integer", nullable=true)
     */
    private $autonumer;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NR_WYCIAGU", type="string", length=50, nullable=true)
     */
    private $nrWyciagu;

    /**
     * @var string
     *
     * @ORM\Column(name="TYTULEM", type="string", length=500, nullable=true)
     */
    private $tytulem;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAP", type="string", length=9, nullable=true)
     */
    private $idRap;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="string", length=9, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=500, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="DOK_ZAKSIEGOWANY", type="string", length=1, nullable=true)
     */
    private $dokZaksiegowany = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOK_ZABLOKOWANY", type="string", length=1, nullable=true)
     */
    private $dokZablokowany = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DO_KSIEGOWANIA", type="string", length=1, nullable=true)
     */
    private $doKsiegowania = '0';

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
     * @ORM\Column(name="ID_DOKUMENTU_FAKIR", type="string", length=9, nullable=false)
     */
    private $idDokumentuFakir = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_OPERACJI", type="string", length=5, nullable=true)
     */
    private $kodOperacji = '';

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_WAL_BAZOWE", type="string", length=1, nullable=true)
     */
    private $pozWalBazowe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RESZTA_WAL", type="string", length=1, nullable=true)
     */
    private $resztaWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=true)
     */
    private $idEtykiety = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PLATNIK_NAZWA", type="string", length=50, nullable=true)
     */
    private $platnikNazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="TRYBREJESTRACJI", type="string", length=1, nullable=true)
     */
    private $trybrejestracji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="string", length=9, nullable=true)
     */
    private $idRozrachunku;


}

