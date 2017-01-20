<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KasyFirmy
 *
 * @ORM\Table(name="KASY_FIRMY", uniqueConstraints={@ORM\UniqueConstraint(name="AK_KASA_ID_FIRMY_NAZW_KASY_FIR", columns={"ID_FIRMY", "SYMBOL", "NAZWA"})})
 * @ORM\Entity
 */
class KasyFirmy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KASY", type="string", length=9, nullable=false)
     */
    private $idKasy;

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL", type="string", length=5, nullable=true)
     */
    private $symbol;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_FK", type="string", length=70, nullable=true)
     */
    private $kontoFk;

    /**
     * @var string
     *
     * @ORM\Column(name="RAP_WALUTOWE", type="string", length=1, nullable=true)
     */
    private $rapWalutowe = '0';


}

