<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdresyKontrahenta
 *
 * @ORM\Table(name="ADRESY_KONTRAHENTA", uniqueConstraints={@ORM\UniqueConstraint(name="PO_KONTRAHENCIE", columns={"ID_KONTRAHENTA", "DATA_OD"})})
 * @ORM\Entity
 */
class AdresyKontrahenta
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ADRESY_KONTRAHENTA", type="string", length=9, nullable=false)
     */
    private $idAdresyKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=false)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_OD", type="string", length=4, nullable=false)
     */
    private $dataOd;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_PELNA", type="string", length=200, nullable=true)
     */
    private $nazwaPelna;

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
     * @ORM\Column(name="ULICA_LOKAL", type="string", length=50, nullable=true)
     */
    private $ulicaLokal;

    /**
     * @var string
     *
     * @ORM\Column(name="WOJEWODZTWO", type="string", length=30, nullable=true)
     */
    private $wojewodztwo;

    /**
     * @var string
     *
     * @ORM\Column(name="NIP", type="string", length=30, nullable=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="POWIAT", type="string", length=50, nullable=true)
     */
    private $powiat;


}

