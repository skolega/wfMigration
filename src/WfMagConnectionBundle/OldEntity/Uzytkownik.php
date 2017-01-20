<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uzytkownik
 *
 * @ORM\Table(name="UZYTKOWNIK", uniqueConstraints={@ORM\UniqueConstraint(name="AK_UZYTKOWNIK_IDENTYF_UZYTKOWN", columns={"IDENTYFIKATOR"})})
 * @ORM\Entity
 */
class Uzytkownik
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="IDENTYFIKATOR", type="string", length=20, nullable=false)
     */
    private $identyfikator;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="HASLO", type="string", length=41, nullable=true)
     */
    private $haslo;

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_AKTYWNY", type="string", length=1, nullable=true)
     */
    private $czyAktywny;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_IP", type="string", length=50, nullable=true)
     */
    private $adresIp;

    /**
     * @var string
     *
     * @ORM\Column(name="LOG_DODAWANIE", type="string", length=1, nullable=true)
     */
    private $logDodawanie = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LOG_ZMIANA", type="string", length=1, nullable=true)
     */
    private $logZmiana = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LOG_USUWANIE", type="string", length=1, nullable=true)
     */
    private $logUsuwanie = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_SPID", type="integer", nullable=true)
     */
    private $nrSpid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LOGIN_TIME", type="datetime", nullable=true)
     */
    private $loginTime;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="string", length=50, nullable=true)
     */
    private $adres = '124112097115111';

    /**
     * @var string
     *
     * @ORM\Column(name="HOSTPROCESS", type="string", length=10, nullable=true)
     */
    private $hostprocess;

    /**
     * @var integer
     *
     * @ORM\Column(name="ARCHIWALNY", type="smallint", nullable=true)
     */
    private $archiwalny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="HasloS", type="string", length=70, nullable=true)
     */
    private $haslos;


}

