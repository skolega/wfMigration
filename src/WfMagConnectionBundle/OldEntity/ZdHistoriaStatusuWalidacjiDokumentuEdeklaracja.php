<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdHistoriaStatusuWalidacjiDokumentuEdeklaracja
 *
 * @ORM\Table(name="ZD_HISTORIA_STATUSU_WALIDACJI_DOKUMENTU_EDEKLARACJA", indexes={@ORM\Index(name="IDX_D72BA540EC79B1E1F1CCFB89", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA"}), @ORM\Index(name="IDX_D72BA540EC79B1E1", columns={"ID_DOKUMENTU_PODSTAWOWEGO"}), @ORM\Index(name="IDX_D72BA540EC79B1E11DC5B2CF", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_PODPISANIA_DOKUMENTU_EDEKLARACJA"})})
 * @ORM\Entity
 */
class ZdHistoriaStatusuWalidacjiDokumentuEdeklaracja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HISTORII_STATUSU_WALIDACJI_DOKUMENTU_EDEKLARACJA", type="integer", nullable=false)
     */
    private $idHistoriiStatusuWalidacjiDokumentuEdeklaracja;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LOKALIZACJA_SCHEMATU_NARZUCONA_ZEWNETRZNIE", type="boolean", nullable=false)
     */
    private $lokalizacjaSchematuNarzuconaZewnetrznie;

    /**
     * @var string
     *
     * @ORM\Column(name="LOKALIZACJA_SCHEMATU", type="string", length=1024, nullable=true)
     */
    private $lokalizacjaSchematu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SUKCES_WALIDACJI", type="boolean", nullable=false)
     */
    private $sukcesWalidacji;

    /**
     * @var string
     *
     * @ORM\Column(name="KOMUNIKAT_WALIDACJI", type="string", length=0, nullable=true)
     */
    private $komunikatWalidacji;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdHistoriaStatusuPodpisaniaDokumentuEdeklaracja
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdHistoriaStatusuPodpisaniaDokumentuEdeklaracja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_DOKUMENTU_PODSTAWOWEGO"),
     *   @ORM\JoinColumn(name="ID_HISTORII_STATUSU_PODPISANIA_DOKUMENTU_EDEKLARACJA", referencedColumnName="ID_HISTORII_STATUSU_PODPISANIA_DOKUMENTU_EDEKLARACJA")
     * })
     */
    private $idDokumentuPodstawowego;


}

