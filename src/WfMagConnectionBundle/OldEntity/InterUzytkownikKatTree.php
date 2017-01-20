<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterUzytkownikKatTree
 *
 * @ORM\Table(name="INTER_UZYTKOWNIK_KAT_TREE")
 * @ORM\Entity
 */
class InterUzytkownikKatTree
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII_TREE", type="string", length=9, nullable=false)
     */
    private $idKategoriiTree;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROZWIN_ZWIN", type="integer", nullable=true)
     */
    private $rozwinZwin = '1';


}

