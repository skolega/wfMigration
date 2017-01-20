<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagProfileUstawien
 *
 * @ORM\Table(name="MAG_PROFILE_USTAWIEN", uniqueConstraints={@ORM\UniqueConstraint(name="AK_MAG_PROFILE_USTAWIEN", columns={"ID_FIRMY", "NAZWA", "KONTEKST"})})
 * @ORM\Entity
 */
class MagProfileUstawien
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_PROFILU", type="string", length=9, nullable=false)
     */
    private $idProfilu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="DEFINICJA", type="text", length=16, nullable=true)
     */
    private $definicja;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTEKST", type="string", length=30, nullable=false)
     */
    private $kontekst;


}

