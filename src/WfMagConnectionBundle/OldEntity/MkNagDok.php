<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MkNagDok
 *
 * @ORM\Table(name="MK_NAG_DOK")
 * @ORM\Entity
 */
class MkNagDok
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_NAG_DOK", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idNagDok;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSAKCJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_LATA_OBROT", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idLataObrot;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_TYPU_DOK", type="string", length=20, nullable=true)
     */
    private $kodTypuDok;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PACZKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPaczka;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $kodKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOK_ORG", type="string", length=20, nullable=true)
     */
    private $nrDokOrg;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_DOK_ORG", type="integer", nullable=true)
     */
    private $dataDokOrg;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_OPER_GOSP", type="integer", nullable=true)
     */
    private $dataOperGosp;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_WPLYWU", type="integer", nullable=true)
     */
    private $dataWplywu;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_OKRESU", type="integer", nullable=true)
     */
    private $dataOkresu;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_BIEZACA", type="integer", nullable=true)
     */
    private $dataBiezaca;

    /**
     * @var integer
     *
     * @ORM\Column(name="TERMIN_PLATNOSCI", type="integer", nullable=true)
     */
    private $terminPlatnosci;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=50, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WALUTY", type="string", length=3, nullable=true)
     */
    private $symWaluty;

    /**
     * @var integer
     *
     * @ORM\Column(name="MNOZNIK", type="integer", nullable=true)
     */
    private $mnoznik;

    /**
     * @var string
     *
     * @ORM\Column(name="KURS_WALUTY", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $kursWaluty;

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL_KARTOTEKI", type="string", length=10, nullable=true)
     */
    private $symbolKartoteki;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOK_KORYG", type="string", length=20, nullable=true)
     */
    private $nrDokKoryg;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_KOREKTA", type="smallint", nullable=true)
     */
    private $czyKorekta;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_PACZKI", type="string", length=20, nullable=true)
     */
    private $kodPaczki;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOKUMENTU", type="string", length=1, nullable=true)
     */
    private $typDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_MAG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentuMag;

    /**
     * @var integer
     *
     * @ORM\Column(name="MP", type="smallint", nullable=true)
     */
    private $mp;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_KARTOTEKI", type="string", length=1, nullable=true)
     */
    private $typKartoteki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KARTOTEKI", type="string", length=9, nullable=true)
     */
    private $idKartoteki;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_DOKUMENTU", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $kwotaDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_DOKUMENTU_W", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $kwotaDokumentuW;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_FAKIR", type="string", length=9, nullable=true)
     */
    private $idDokumentuFakir;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_PODSTAWY", type="string", length=30, nullable=true)
     */
    private $nrPodstawy;

    /**
     * @var string
     *
     * @ORM\Column(name="KURS_WALUTY_PZ", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $kursWalutyPz = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="TROJSTRONNY_UE", type="smallint", nullable=true)
     */
    private $trojstronnyUe = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_BO", type="smallint", nullable=true)
     */
    private $czyBo;


}

