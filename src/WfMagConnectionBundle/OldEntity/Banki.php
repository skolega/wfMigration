<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banki
 *
 * @ORM\Table(name="BANKI", uniqueConstraints={@ORM\UniqueConstraint(name="AK_BANKI_SEMAFOR_BANKI", columns={"SEMAFOR", "ID_BANKU"}), @ORM\UniqueConstraint(name="AK_BANKI_NUMER_BANKI", columns={"NUMER_BANKU"})})
 * @ORM\Entity
 */
class Banki
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_BANKU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idBanku;

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL", type="string", length=10, nullable=true)
     */
    private $symbol;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_BANKU", type="string", length=8, nullable=true)
     */
    private $numerBanku;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC", type="string", length=50, nullable=true)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ULICA_LOKAL", type="string", length=50, nullable=true)
     */
    private $ulicaLokal;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_POCZTOWY", type="string", length=20, nullable=true)
     */
    private $kodPocztowy;

    /**
     * @var string
     *
     * @ORM\Column(name="TEL", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="E_MAIL", type="string", length=50, nullable=true)
     */
    private $eMail;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $semafor;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_WWW", type="string", length=50, nullable=true)
     */
    private $adresWww;

    /**
     * @var string
     *
     * @ORM\Column(name="SWIFT", type="string", length=20, nullable=true)
     */
    private $swift = '';


}

