<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdRozwiniecieDokumentuEdeklaracja
 *
 * @ORM\Table(name="ZD_ROZWINIECIE_DOKUMENTU_EDEKLARACJA")
 * @ORM\Entity
 */
class ZdRozwiniecieDokumentuEdeklaracja
{
    /**
     * @var string
     *
     * @ORM\Column(name="KOD_FORMULARZA", type="string", length=32, nullable=true)
     */
    private $kodFormularza;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROK", type="integer", nullable=true)
     */
    private $rok;

    /**
     * @var string
     *
     * @ORM\Column(name="PODMIOT_1", type="string", length=256, nullable=true)
     */
    private $podmiot1;

    /**
     * @var string
     *
     * @ORM\Column(name="ROLA_PODMIOTU_1", type="string", length=32, nullable=true)
     */
    private $rolaPodmiotu1;

    /**
     * @var string
     *
     * @ORM\Column(name="IDENTYFIKATOR_PODATKOWY_PODMIOTU_1", type="string", length=32, nullable=true)
     */
    private $identyfikatorPodatkowyPodmiotu1;

    /**
     * @var string
     *
     * @ORM\Column(name="PODMIOT_2", type="string", length=256, nullable=true)
     */
    private $podmiot2;

    /**
     * @var string
     *
     * @ORM\Column(name="ROLA_PODMIOTU_2", type="string", length=32, nullable=true)
     */
    private $rolaPodmiotu2;

    /**
     * @var string
     *
     * @ORM\Column(name="IDENTYFIKATOR_PODATKOWY_PODMIOTU_2", type="string", length=32, nullable=true)
     */
    private $identyfikatorPodatkowyPodmiotu2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OKRES_OD", type="datetime", nullable=true)
     */
    private $okresOd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OKRES_DO", type="datetime", nullable=true)
     */
    private $okresDo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="KOREKTA", type="boolean", nullable=true)
     */
    private $korekta;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdDokumentEdeklaracja
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdDokumentEdeklaracja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_DOKUMENTU_PODSTAWOWEGO")
     * })
     */
    private $idDokumentuPodstawowego;


}

