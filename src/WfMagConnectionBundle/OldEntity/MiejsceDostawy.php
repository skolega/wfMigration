<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MiejsceDostawy
 *
 * @ORM\Table(name="MIEJSCE_DOSTAWY")
 * @ORM\Entity
 */
class MiejsceDostawy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MIEJSCA_DOSTAWY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idMiejscaDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU", type="string", length=3, nullable=true)
     */
    private $symKraju;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_POCZTOWY", type="string", length=20, nullable=true)
     */
    private $kodPocztowy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC", type="string", length=50, nullable=true)
     */
    private $miejscowosc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ULICA_LOKAL", type="string", length=50, nullable=true)
     */
    private $ulicaLokal;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRMA", type="string", length=100, nullable=false)
     */
    private $firma;

    /**
     * @var string
     *
     * @ORM\Column(name="ODBIORCA", type="string", length=50, nullable=false)
     */
    private $odbiorca;

    /**
     * @var string
     *
     * @ORM\Column(name="TEL", type="string", length=20, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYP_ADRESU", type="integer", nullable=false)
     */
    private $typAdresu = '0';


}

