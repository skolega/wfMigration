<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtykulPolaIe
 *
 * @ORM\Table(name="ARTYKUL_POLA_IE")
 * @ORM\Entity
 */
class ArtykulPolaIe
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="MM", type="string", length=1, nullable=false)
     */
    private $mm = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="IMPORT", type="string", length=1, nullable=false)
     */
    private $import = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="SYNCHRONIZACJA", type="string", length=1, nullable=false)
     */
    private $synchronizacja = '1';


}

