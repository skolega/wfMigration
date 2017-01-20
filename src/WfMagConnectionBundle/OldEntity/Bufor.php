<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bufor
 *
 * @ORM\Table(name="BUFOR", uniqueConstraints={@ORM\UniqueConstraint(name="AK_DRSPAR_MAG_DATA_GO_BUFOR", columns={"DATA", "GODZINA"})}, indexes={@ORM\Index(name="BUF_IDFIR", columns={"ID_FIRMY"}), @ORM\Index(name="BUF_DATGODZ", columns={"ID_FIRMY", "DATA", "GODZINA"})})
 * @ORM\Entity
 */
class Bufor
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_BUFORA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idBufora;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA", type="integer", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZINA", type="integer", nullable=true)
     */
    private $godzina;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_BUFORA", type="string", length=1, nullable=true)
     */
    private $typBufora = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="STAN_BUFORA", type="smallint", nullable=true)
     */
    private $stanBufora = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO", type="string", length=9, nullable=true)
     */
    private $wartoscNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO", type="string", length=9, nullable=true)
     */
    private $wartoscBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="string", length=9, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=false)
     */
    private $semafor;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer = '';


}

