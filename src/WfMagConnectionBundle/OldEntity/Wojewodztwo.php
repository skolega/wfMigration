<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wojewodztwo
 *
 * @ORM\Table(name="WOJEWODZTWO", uniqueConstraints={@ORM\UniqueConstraint(name="AK_WOJEWODZTWO_WOJEWODZ", columns={"WOJEWODZTWO"})})
 * @ORM\Entity
 */
class Wojewodztwo
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_WOJEWODZTWA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idWojewodztwa;

    /**
     * @var string
     *
     * @ORM\Column(name="WOJEWODZTWO", type="string", length=30, nullable=false)
     */
    private $wojewodztwo;


}

