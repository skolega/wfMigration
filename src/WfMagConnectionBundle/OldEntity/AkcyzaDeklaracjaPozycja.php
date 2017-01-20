<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AkcyzaDeklaracjaPozycja
 *
 * @ORM\Table(name="AKCYZA_DEKLARACJA_POZYCJA")
 * @ORM\Entity
 */
class AkcyzaDeklaracjaPozycja
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DEKLARACJI", type="string", length=9, nullable=false)
     */
    private $idPozDeklaracji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DEKLARACJI", type="string", length=9, nullable=true)
     */
    private $idDeklaracji;

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
     * @ORM\Column(name="AKCYZA_ILOSC", type="string", length=9, nullable=true)
     */
    private $akcyzaIlosc;

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA_STAWKA_ZA_JM", type="string", length=9, nullable=true)
     */
    private $akcyzaStawkaZaJm;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_PODATKU", type="string", length=9, nullable=true)
     */
    private $kwotaPodatku;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_ZWOLNIENIA", type="string", length=9, nullable=true)
     */
    private $kwotaZwolnienia;


}

