<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagRejestrZmianStatusowZamowienOpis
 *
 * @ORM\Table(name="MAG_REJESTR_ZMIAN_STATUSOW_ZAMOWIEN_OPIS", uniqueConstraints={@ORM\UniqueConstraint(name="AK_MAG_REJESTR_ZMIAN_STATUSOW_ZAMOWIEN_OPIS", columns={"ID_DOKUMENTU", "ID_REJESTRU_ZMIAN"})})
 * @ORM\Entity
 */
class MagRejestrZmianStatusowZamowienOpis
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_OPISU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idOpisu;

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
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;


}

