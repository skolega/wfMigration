<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpPozKoszt
 *
 * @ORM\Table(name="IMP_POZ_KOSZT")
 * @ORM\Entity
 */
class ImpPozKoszt
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozycji;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_MK_ZRDANYCH", type="integer", nullable=true)
     */
    private $idMkZrdanych;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KOSZTU", type="string", length=50, nullable=true)
     */
    private $nazwaKosztu;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $wartoscNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $wartoscBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRozrachunku;

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAJ_KOSZTU", type="smallint", nullable=true)
     */
    private $rodzajKosztu;

    /**
     * @var integer
     *
     * @ORM\Column(name="BEZ_WPLYWU_NA_VAT", type="smallint", nullable=true)
     */
    private $bezWplywuNaVat;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLAT", type="string", length=20, nullable=true)
     */
    private $formaPlat;

    /**
     * @var integer
     *
     * @ORM\Column(name="TERMIN_PLAT", type="integer", nullable=true)
     */
    private $terminPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_WYST_FAK", type="integer", nullable=true)
     */
    private $dataWystFak;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_OTRZ_FAK", type="integer", nullable=true)
     */
    private $dataOtrzFak;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_OPER_GOSP", type="integer", nullable=true)
     */
    private $dataOperGosp;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROZRACH_NB", type="smallint", nullable=true)
     */
    private $rozrachNb;


}

