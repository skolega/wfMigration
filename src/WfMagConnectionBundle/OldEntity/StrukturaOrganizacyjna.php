<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StrukturaOrganizacyjna
 *
 * @ORM\Table(name="STRUKTURA_ORGANIZACYJNA", indexes={@ORM\Index(name="STR_IDFIR_TREE", columns={"ID_FIRMY", "TREE"}), @ORM\Index(name="IDX_DD9A4FF179B757F", columns={"ID_FIRMY"})})
 * @ORM\Entity
 */
class StrukturaOrganizacyjna
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_STRUKTURY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idStruktury;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="TREE", type="string", length=50, nullable=false)
     */
    private $tree;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=200, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PARENT", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idParent;

    /**
     * @var \WfMagConnectionBundle\Entity\Firma
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\Firma")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_FIRMY", referencedColumnName="ID_FIRMY")
     * })
     */
    private $idFirmy;


}

