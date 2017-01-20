<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagOperatorPrzesylki
 *
 * @ORM\Table(name="MAG_OPERATOR_PRZESYLKI", uniqueConstraints={@ORM\UniqueConstraint(name="MAG_OPERATOR_PRZESYLKI_NAZWA", columns={"NAZWA"})})
 * @ORM\Entity
 */
class MagOperatorPrzesylki
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_OPERATORA_PRZESYLKI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idOperatoraPrzesylki;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_OPERATORA_AUKCJE", type="integer", nullable=false)
     */
    private $idOperatoraAukcje;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="URL_SLEDZENIE", type="string", length=500, nullable=true)
     */
    private $urlSledzenie;


}

