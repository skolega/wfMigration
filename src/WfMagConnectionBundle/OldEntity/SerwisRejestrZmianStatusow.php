<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SerwisRejestrZmianStatusow
 *
 * @ORM\Table(name="SERWIS_REJESTR_ZMIAN_STATUSOW", uniqueConstraints={@ORM\UniqueConstraint(name="AK_SERWIS_REJESTR_ZMIAN_STATUSOW", columns={"ID_ZLECENIA", "DATAICZAS", "KOD_Z", "KOD_NA"})})
 * @ORM\Entity
 */
class SerwisRejestrZmianStatusow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SERWIS_REJESTR_ZMIAN", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSerwisRejestrZmian;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZLECENIA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZlecenia;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_Z", type="string", length=1, nullable=false)
     */
    private $kodZ;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_NA", type="string", length=1, nullable=false)
     */
    private $kodNa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATAICZAS", type="datetime", nullable=false)
     */
    private $dataiczas = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_UZYTKOWNIKA", type="string", length=200, nullable=true)
     */
    private $opisUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="KOMENTARZ", type="string", length=500, nullable=true)
     */
    private $komentarz;


}

