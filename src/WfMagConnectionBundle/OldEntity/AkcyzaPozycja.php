<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AkcyzaPozycja
 *
 * @ORM\Table(name="AKCYZA_POZYCJA")
 * @ORM\Entity
 */
class AkcyzaPozycja
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="string", length=9, nullable=false)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_DOSTAWY", type="string", length=9, nullable=true)
     */
    private $idDokDostawy;

    /**
     * @var integer
     *
     * @ORM\Column(name="LP", type="integer", nullable=true)
     */
    private $lp;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=40, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_CN", type="string", length=20, nullable=true)
     */
    private $kodCn;

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=true)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=500, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA_JM", type="string", length=10, nullable=true)
     */
    private $akcyzaJm;

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA_PRZELICZNIK", type="decimal", precision=14, scale=6, nullable=true)
     */
    private $akcyzaPrzelicznik;

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA_ILOSC", type="string", length=9, nullable=true)
     */
    private $akcyzaIlosc;

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA_STAWKA_ZA_JM", type="string", length=9, nullable=true)
     */
    private $akcyzaStawkaZaJm;


}

