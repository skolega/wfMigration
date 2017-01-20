<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdFolderDokumentuEdeklaracja
 *
 * @ORM\Table(name="ZD_FOLDER_DOKUMENTU_EDEKLARACJA", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_ZD_FOLDER_DOKUMENTU_EDEKLARACJA", columns={"KOD"})}, indexes={@ORM\Index(name="IDX_F13BEAF8727AFA47", columns={"ID_NADRZEDNEGO_FOLDERU_DOKUMENTU_EDEKLARACJA"})})
 * @ORM\Entity
 */
class ZdFolderDokumentuEdeklaracja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FOLDERU_DOKUMENTU_EDEKLARACJA", type="integer", nullable=false)
     */
    private $idFolderuDokumentuEdeklaracja;

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
     * @var \WfMagConnectionBundle\Entity\ZdFolderDokumentuEdeklaracja
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdFolderDokumentuEdeklaracja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_NADRZEDNEGO_FOLDERU_DOKUMENTU_EDEKLARACJA", referencedColumnName="ID_FOLDERU_DOKUMENTU_EDEKLARACJA")
     * })
     */
    private $idNadrzednegoFolderuDokumentuEdeklaracja;


}

