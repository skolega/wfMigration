<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozycjaZamowienia
 *
 * @ORM\Table(name="POZYCJA_ZAMOWIENIA", indexes={@ORM\Index(name="POZZAM_IDPOZOF", columns={"ID_POZYCJI_OFERTY"}), @ORM\Index(name="POZZAM_IDZAM", columns={"ID_ZAMOWIENIA"}), @ORM\Index(name="POZZAM_IDART", columns={"ID_ARTYKULU"}), @ORM\Index(name="POZZAM_IDZAM_TYP_IDART", columns={"ID_ZAMOWIENIA", "TYP", "ID_ARTYKULU"}), @ORM\Index(name="POZZAM_IDZAM_ZAM_ZRE", columns={"ZAMOWIONO", "ZREALIZOWANO", "ID_ZAMOWIENIA"}), @ORM\Index(name="POZZAM_IDART_DRE_ZAR", columns={"ID_ARTYKULU", "DO_REZERWACJI", "ZAREZERWOWANO"}), @ORM\Index(name="POZZAM_ID_DOSTAWY_REZ", columns={"ID_DOSTAWY_REZ"})})
 * @ORM\Entity
 */
class PozycjaZamowienia
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_ZAMOWIENIA", type="string", length=9, nullable=false)
     */
    private $idPozycjiZamowienia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMOWIENIA", type="string", length=9, nullable=true)
     */
    private $idZamowienia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_WARIANTU", type="string", length=9, nullable=true)
     */
    private $idWariantu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAMOWIONO", type="string", length=9, nullable=false)
     */
    private $zamowiono = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZREALIZOWANO", type="string", length=9, nullable=false)
     */
    private $zrealizowano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DO_REALIZACJI", type="string", length=9, nullable=false)
     */
    private $doRealizacji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZAREZERWOWANO", type="string", length=9, nullable=false)
     */
    private $zarezerwowano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DO_REZERWACJI", type="string", length=9, nullable=false)
     */
    private $doRezerwacji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO", type="string", length=9, nullable=false)
     */
    private $cenaNetto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO", type="string", length=9, nullable=false)
     */
    private $cenaBrutto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO_WAL", type="string", length=9, nullable=true)
     */
    private $cenaNettoWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO_WAL", type="string", length=9, nullable=true)
     */
    private $cenaBruttoWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=false)
     */
    private $przelicznik = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=true)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="NARZUT", type="string", length=5, nullable=false)
     */
    private $narzut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DO_REZ_USER", type="string", length=9, nullable=false)
     */
    private $doRezUser = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DO_REZ_POP", type="string", length=9, nullable=true)
     */
    private $doRezPop = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="STAN_ZREALIZOWANO", type="string", length=9, nullable=false)
     */
    private $stanZrealizowano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TYP", type="string", length=1, nullable=true)
     */
    private $typ;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="TRYBREJESTRACJI", type="smallint", nullable=true)
     */
    private $trybrejestracji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZNACZNIK_CENY", type="string", length=1, nullable=true)
     */
    private $znacznikCeny = 'k';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_OFERTY", type="string", length=9, nullable=true)
     */
    private $idPozycjiOferty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOSTAWY_REZ", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDostawyRez = '0';

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

