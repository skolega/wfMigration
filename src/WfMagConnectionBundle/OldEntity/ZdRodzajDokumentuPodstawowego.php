<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdRodzajDokumentuPodstawowego
 *
 * @ORM\Table(name="ZD_RODZAJ_DOKUMENTU_PODSTAWOWEGO", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_ZD_RODZAJ_DOKUMENTU_PODSTAWOWEGO", columns={"KOD"})}, indexes={@ORM\Index(name="IDX_8F32DADBA3D2F450", columns={"ID_NADRZEDNEGO_RODZAJU_DOKUMENTU_PODSTAWOWEGO"})})
 * @ORM\Entity
 */
class ZdRodzajDokumentuPodstawowego
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RODZAJU_DOKUMENTU_PODSTAWOWEGO", type="integer", nullable=false)
     */
    private $idRodzajuDokumentuPodstawowego;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=64, nullable=false)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=256, nullable=false)
     */
    private $nazwa;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdRodzajDokumentuPodstawowego
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdRodzajDokumentuPodstawowego")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_NADRZEDNEGO_RODZAJU_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_RODZAJU_DOKUMENTU_PODSTAWOWEGO")
     * })
     */
    private $idNadrzednegoRodzajuDokumentuPodstawowego;


}

