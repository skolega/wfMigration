<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RachunekKontrahenta
 *
 * @ORM\Table(name="RACHUNEK_KONTRAHENTA", uniqueConstraints={@ORM\UniqueConstraint(name="AK_RACHKONTR_IDKONTR__RACHUNEK", columns={"ID_KONTRAHENTA", "NUMER_RACHUNKU"})})
 * @ORM\Entity
 */
class RachunekKontrahenta
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_RACHUNKU", type="string", length=100, nullable=true)
     */
    private $numerRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WALUTY", type="string", length=3, nullable=true)
     */
    private $symWaluty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_BANKU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idBanku;

    /**
     * @var string
     *
     * @ORM\Column(name="LK", type="string", length=2, nullable=true)
     */
    private $lk;

    /**
     * @var integer
     *
     * @ORM\Column(name="AKTYWNY", type="smallint", nullable=true)
     */
    private $aktywny;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;


}

