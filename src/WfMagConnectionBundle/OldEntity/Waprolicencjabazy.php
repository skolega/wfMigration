<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Waprolicencjabazy
 *
 * @ORM\Table(name="WAPROLICENCJABAZY")
 * @ORM\Entity
 */
class Waprolicencjabazy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produktu", type="integer", nullable=true)
     */
    private $idProduktu;

    /**
     * @var binary
     *
     * @ORM\Column(name="lic", type="binary", nullable=true)
     */
    private $lic;


}

