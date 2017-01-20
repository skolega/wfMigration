<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Waprodb
 *
 * @ORM\Table(name="WAPRODB")
 * @ORM\Entity
 */
class Waprodb
{
    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="WAPRODB_ID", type="uniqueidentifier", nullable=false)
     */
    private $waprodbId = 'newid()';


}

