<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsStatusyWiadomosci
 *
 * @ORM\Table(name="SMS_STATUSY_WIADOMOSCI", uniqueConstraints={@ORM\UniqueConstraint(name="UQ__SMS_STAT__C9E6E21D6247174E", columns={"KOD_STATUSU"})}, indexes={@ORM\Index(name="SMS_STATUSY_WIADOMOSCI_KOD_STATUSU", columns={"KOD_STATUSU"})})
 * @ORM\Entity
 */
class SmsStatusyWiadomosci
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="JEZYK", type="string", length=3, nullable=true)
     */
    private $jezyk;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_STATUSU", type="string", length=50, nullable=true)
     */
    private $kodStatusu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=200, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_FILTR", type="string", length=50, nullable=true)
     */
    private $opisFiltr;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOLEJNOSC_FILTR", type="smallint", nullable=true)
     */
    private $kolejnoscFiltr;


}

