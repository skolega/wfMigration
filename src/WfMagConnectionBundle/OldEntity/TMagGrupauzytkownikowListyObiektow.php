<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TMagGrupauzytkownikowListyObiektow
 *
 * @ORM\Table(name="T_MAG_GRUPAUZYTKOWNIKOW_LISTY_OBIEKTOW")
 * @ORM\Entity
 */
class TMagGrupauzytkownikowListyObiektow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=false)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_LISTY", type="string", length=9, nullable=false)
     */
    private $idListy;

    /**
     * @var integer
     *
     * @ORM\Column(name="UZYCIE", type="integer", nullable=false)
     */
    private $uzycie;

    /**
     * @var string
     *
     * @ORM\Column(name="id_sesji", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSesji;


}

