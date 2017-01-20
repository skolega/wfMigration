<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sadpozycja
 *
 * @ORM\Table(name="SADPOZYCJA", indexes={@ORM\Index(name="SADPOZYCJA_IDSADU_NRP", columns={"ID_SADU", "NR_POZYCJI"}), @ORM\Index(name="SADPOZYCJA_KOD_IDS", columns={"KOD_TOWARU", "ID_SADU"})})
 * @ORM\Entity
 */
class Sadpozycja
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_SADU", type="string", length=9, nullable=false)
     */
    private $idPozSadu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SADU", type="string", length=9, nullable=false)
     */
    private $idSadu;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_POZYCJI", type="integer", nullable=false)
     */
    private $nrPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_TOWARU", type="string", length=30, nullable=true)
     */
    private $kodTowaru;

    /**
     * @var string
     *
     * @ORM\Column(name="WAR_POZ_WAL", type="string", length=9, nullable=true)
     */
    private $warPozWal;

    /**
     * @var string
     *
     * @ORM\Column(name="WAR_POZ_KOR_WAL", type="string", length=9, nullable=true)
     */
    private $warPozKorWal;

    /**
     * @var string
     *
     * @ORM\Column(name="WAR_TRANSPORTU_WAL", type="string", length=9, nullable=true)
     */
    private $warTransportuWal;

    /**
     * @var string
     *
     * @ORM\Column(name="WAR_TRANS_KRAJ_WAL", type="string", length=9, nullable=true)
     */
    private $warTransKrajWal;

    /**
     * @var string
     *
     * @ORM\Column(name="WAR_STAT_PLN", type="string", length=9, nullable=true)
     */
    private $warStatPln;

    /**
     * @var string
     *
     * @ORM\Column(name="CLO_PLN", type="string", length=9, nullable=true)
     */
    private $cloPln;

    /**
     * @var string
     *
     * @ORM\Column(name="CLO3_PLN", type="string", length=9, nullable=true)
     */
    private $clo3Pln;

    /**
     * @var string
     *
     * @ORM\Column(name="OPLATA_SPEC_PLN", type="string", length=9, nullable=true)
     */
    private $oplataSpecPln;

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA_PLN", type="string", length=9, nullable=true)
     */
    private $akcyzaPln;

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA_OPAK_PLN", type="string", length=9, nullable=true)
     */
    private $akcyzaOpakPln;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_KWOTA_PLN", type="string", length=9, nullable=true)
     */
    private $vatKwotaPln;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="INNE_PLN", type="string", length=9, nullable=true)
     */
    private $innePln;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=500, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=true)
     */
    private $flagaStanu;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE44_PLN", type="string", length=9, nullable=true)
     */
    private $pole44Pln;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE44_PLN_WPLYW_NA_PODSTAWE_VAT", type="string", length=9, nullable=true)
     */
    private $pole44PlnWplywNaPodstaweVat;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE44_PLN_WPLYW_NA_CENY_PZ", type="string", length=9, nullable=true)
     */
    private $pole44PlnWplywNaCenyPz;


}

