<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sad
 *
 * @ORM\Table(name="SAD", indexes={@ORM\Index(name="SAD_ID", columns={"ID_FIRMY", "ID_MAGAZYNU", "ID_DOK_MAG"}), @ORM\Index(name="SAD_ID_PRAC", columns={"ID_PRACOWNIKA"}), @ORM\Index(name="SAD_NUMER", columns={"NUMER"}), @ORM\Index(name="SAD_DATA_FORMA_WAL", columns={"ID_FIRMY", "DATA", "FORMA_PLATNOSCI", "SYM_WAL"})})
 * @ORM\Entity
 */
class Sad
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SADU", type="string", length=9, nullable=false)
     */
    private $idSadu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAG", type="string", length=9, nullable=true)
     */
    private $idDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=false)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="LICZBA_POZYCJI", type="integer", nullable=true)
     */
    private $liczbaPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=false)
     */
    private $symWal;

    /**
     * @var string
     *
     * @ORM\Column(name="KURS_WAL", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $kursWal;

    /**
     * @var string
     *
     * @ORM\Column(name="WAR_OGOLNA_WAL", type="string", length=9, nullable=true)
     */
    private $warOgolnaWal;

    /**
     * @var string
     *
     * @ORM\Column(name="WAR_SZCZEGOLNA_WAL", type="string", length=9, nullable=true)
     */
    private $warSzczegolnaWal;

    /**
     * @var string
     *
     * @ORM\Column(name="OPLATA_CELNA_PLN", type="string", length=9, nullable=true)
     */
    private $oplataCelnaPln;

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_TRANSPORT", type="string", length=1, nullable=true)
     */
    private $czyTransport;

    /**
     * @var string
     *
     * @ORM\Column(name="WAR_TRANSPORT_WAL", type="string", length=9, nullable=true)
     */
    private $warTransportWal;

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
    private $flagaStanu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="string", length=9, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=1000, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLATNOSCI", type="string", length=50, nullable=true)
     */
    private $formaPlatnosci;

    /**
     * @var string
     *
     * @ORM\Column(name="TERMIN_PLAT", type="string", length=4, nullable=true)
     */
    private $terminPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_ROZRACHUNEK", type="string", length=1, nullable=true)
     */
    private $czyRozrachunek = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="KOSZTY_WARTOSC_WAGA", type="string", length=1, nullable=true)
     */
    private $kosztyWartoscWaga = '0';


}

