<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BrBiuro
 *
 * @ORM\Table(name="BR_BIURO")
 * @ORM\Entity
 */
class BrBiuro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_BIURA", type="integer", nullable=false)
     */
    private $idBiura;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=200, nullable=false)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_ODDZIALU", type="integer", nullable=false)
     */
    private $nrOddzialu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="UL_NR", type="string", length=50, nullable=true)
     */
    private $ulNr;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_POCZTOWY", type="string", length=20, nullable=true)
     */
    private $kodPocztowy;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC", type="string", length=50, nullable=true)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="WWW", type="string", length=50, nullable=true)
     */
    private $www;

    /**
     * @var string
     *
     * @ORM\Column(name="IMIE_NAZWISKO", type="string", length=100, nullable=true)
     */
    private $imieNazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFON", type="string", length=50, nullable=true)
     */
    private $telefon;

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="INFORMACJE_DODATKOWE", type="string", length=1000, nullable=true)
     */
    private $informacjeDodatkowe;


}

