<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdObiektKonteksty
 *
 * @ORM\Table(name="ZD_OBIEKT_KONTEKSTY")
 * @ORM\Entity
 */
class ZdObiektKonteksty
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTEKST", type="string", length=30, nullable=false)
     */
    private $kontekst;


}

