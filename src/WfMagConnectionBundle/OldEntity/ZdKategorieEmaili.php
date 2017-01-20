<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdKategorieEmaili
 *
 * @ORM\Table(name="ZD_KATEGORIE_EMAILI")
 * @ORM\Entity
 */
class ZdKategorieEmaili
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
     * @ORM\Column(name="Nazwa_Kategorii", type="string", length=50, nullable=false)
     */
    private $nazwaKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="Nazwa_Systemowa_Koloru", type="string", length=50, nullable=true)
     */
    private $nazwaSystemowaKoloru;

    /**
     * @var integer
     *
     * @ORM\Column(name="A", type="integer", nullable=true)
     */
    private $a;

    /**
     * @var integer
     *
     * @ORM\Column(name="R", type="integer", nullable=true)
     */
    private $r;

    /**
     * @var integer
     *
     * @ORM\Column(name="G", type="integer", nullable=true)
     */
    private $g;

    /**
     * @var integer
     *
     * @ORM\Column(name="B", type="integer", nullable=true)
     */
    private $b;


}

