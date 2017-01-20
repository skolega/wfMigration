<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdTypStatusuObieguDokumentuEdeklaracja
 *
 * @ORM\Table(name="ZD_TYP_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_ZD_TYP_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA", columns={"KOD"}), @ORM\UniqueConstraint(name="UQ_ZD_TYP_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA_ZEWNETRZNY_STATUS_WYSLANIA", columns={"ID_ZEWNETRZNEGO_STATUSU_WYSLANIA"})}, indexes={@ORM\Index(name="IDX_5038E336694CE339", columns={"ID_FOLDERU_DOKUMENTU_EDEKLARACJA"})})
 * @ORM\Entity
 */
class ZdTypStatusuObieguDokumentuEdeklaracja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TYPU_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA", type="integer", nullable=false)
     */
    private $idTypuStatusuObieguDokumentuEdeklaracja;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ZEWNETRZNEGO_STATUSU_WYSLANIA", type="integer", nullable=false)
     */
    private $idZewnetrznegoStatusuWyslania;

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
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=0, nullable=false)
     */
    private $opis;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdFolderDokumentuEdeklaracja
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdFolderDokumentuEdeklaracja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_FOLDERU_DOKUMENTU_EDEKLARACJA", referencedColumnName="ID_FOLDERU_DOKUMENTU_EDEKLARACJA")
     * })
     */
    private $idFolderuDokumentuEdeklaracja;


}

