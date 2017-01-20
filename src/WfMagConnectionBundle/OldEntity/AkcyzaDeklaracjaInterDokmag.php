<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AkcyzaDeklaracjaInterDokmag
 *
 * @ORM\Table(name="AKCYZA_DEKLARACJA_INTER_DOKMAG")
 * @ORM\Entity
 */
class AkcyzaDeklaracjaInterDokmag
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DEKLARACJI", type="string", length=9, nullable=false)
     */
    private $idDeklaracji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDokMagazynowego;


}

