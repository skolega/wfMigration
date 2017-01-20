<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsSzablon
 *
 * @ORM\Table(name="SMS_SZABLON")
 * @ORM\Entity
 */
class SmsSzablon
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SMS_SZABLONU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSmsSzablonu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTEKST", type="string", length=50, nullable=false)
     */
    private $kontekst;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="TRESC_WIADOMOSCI", type="string", length=2000, nullable=true)
     */
    private $trescWiadomosci;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="integer", nullable=false)
     */
    private $prgkod = '3';


}

