<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intrastat
 *
 * @ORM\Table(name="INTRASTAT")
 * @ORM\Entity
 */
class Intrastat
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
     * @ORM\Column(name="ID_INTRASTATU", type="string", length=9, nullable=false)
     */
    private $idIntrastatu;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="WYW_PRZYW", type="string", length=1, nullable=false)
     */
    private $wywPrzyw = 'W';

    /**
     * @var string
     *
     * @ORM\Column(name="OKRES_OD", type="string", length=4, nullable=true)
     */
    private $okresOd;

    /**
     * @var string
     *
     * @ORM\Column(name="OKRES_DO", type="string", length=4, nullable=true)
     */
    private $okresDo;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=2, nullable=false)
     */
    private $rodzaj = 'D';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_IZBY_CELNEJ", type="string", length=10, nullable=true)
     */
    private $kodIzbyCelnej;

    /**
     * @var string
     *
     * @ORM\Column(name="KOREKTA", type="string", length=1, nullable=false)
     */
    private $korekta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_FAKTUR", type="string", length=9, nullable=true)
     */
    private $wartoscFaktur;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_STATYSTYCZNA", type="string", length=9, nullable=true)
     */
    private $wartoscStatystyczna;

    /**
     * @var string
     *
     * @ORM\Column(name="LICZBA_POZYCJI", type="string", length=9, nullable=false)
     */
    private $liczbaPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="WYPELNIAJACY", type="string", length=50, nullable=true)
     */
    private $wypelniajacy;

    /**
     * @var string
     *
     * @ORM\Column(name="TEL", type="string", length=20, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=100, nullable=true)
     */
    private $uwagi;

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
     * @ORM\Column(name="PRZEKROCZONY_PROG", type="string", length=1, nullable=true)
     */
    private $przekroczonyProg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZEDSTAWICIEL_NAZWA", type="string", length=100, nullable=true)
     */
    private $przedstawicielNazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZEDSTAWICIEL_ADRES", type="string", length=100, nullable=true)
     */
    private $przedstawicielAdres;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZEDSTAWICIEL_NIP", type="string", length=20, nullable=true)
     */
    private $przedstawicielNip;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZEDSTAWICIEL_REGON", type="string", length=20, nullable=true)
     */
    private $przedstawicielRegon;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_EGZ", type="string", length=30, nullable=true)
     */
    private $nrEgz;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZEDSTAWICIEL_ULICANUMER", type="string", length=50, nullable=false)
     */
    private $przedstawicielUlicanumer = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZEDSTAWICIEL_KODPOCZTOWY", type="string", length=10, nullable=false)
     */
    private $przedstawicielKodpocztowy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZEDSTAWICIEL_MIEJSCOWOSC", type="string", length=50, nullable=false)
     */
    private $przedstawicielMiejscowosc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NrWlasny", type="string", length=14, nullable=false)
     */
    private $nrwlasny = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NazwaPliku", type="string", length=100, nullable=false)
     */
    private $nazwapliku = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CzasUtworzenia", type="string", length=40, nullable=false)
     */
    private $czasutworzenia = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var integer
     *
     * @ORM\Column(name="ISTA_ISTB", type="smallint", nullable=false)
     */
    private $istaIstb = '0';


}

