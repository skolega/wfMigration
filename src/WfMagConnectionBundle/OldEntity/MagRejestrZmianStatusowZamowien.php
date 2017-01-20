<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagRejestrZmianStatusowZamowien
 *
 * @ORM\Table(name="MAG_REJESTR_ZMIAN_STATUSOW_ZAMOWIEN", uniqueConstraints={@ORM\UniqueConstraint(name="AK_MAG_REJESTR_ZMIAN_STATUSOW_ZAMOWIEN", columns={"ID_DOKUMENTU", "DATAICZAS", "KOD_Z", "KOD_NA"})})
 * @ORM\Entity
 */
class MagRejestrZmianStatusowZamowien
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_REJESTRU_ZMIAN", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idRejestruZmian;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDokumentu;

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


}

