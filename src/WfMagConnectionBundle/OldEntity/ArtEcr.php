<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtEcr
 *
 * @ORM\Table(name="ART_ECR", indexes={@ORM\Index(name="ART_ECR_INDEX1", columns={"ID_ECR", "ID_ARTYKULU"}), @ORM\Index(name="ART_ECR_INDEX2", columns={"LAST_PGM", "ID_ECR", "ID_ARTYKULU"}), @ORM\Index(name="ART_ECR_INDEX3", columns={"ID_ARTYKULU"})})
 * @ORM\Entity
 */
class ArtEcr
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ECR", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idEcr;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LAST_PGM", type="datetime", nullable=false)
     */
    private $lastPgm;

    /**
     * @var integer
     *
     * @ORM\Column(name="PGM_STATUS", type="smallint", nullable=false)
     */
    private $pgmStatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRYPTION", type="string", length=255, nullable=true)
     */
    private $descryption;


}

