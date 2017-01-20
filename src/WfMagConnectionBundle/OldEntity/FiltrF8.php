<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiltrF8
 *
 * @ORM\Table(name="FILTR_F8", indexes={@ORM\Index(name="FILTRF8_IDU_IDO", columns={"ID_UZYTKOWNIKA", "ID_OKNA", "DOMYSLNY"})})
 * @ORM\Entity
 */
class FiltrF8
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FILTRU", type="string", length=9, nullable=false)
     */
    private $idFiltru;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OKNA", type="string", length=9, nullable=true)
     */
    private $idOkna;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="STR_OVER_GROUP", type="string", length=1000, nullable=true)
     */
    private $strOverGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY", type="string", length=1, nullable=true)
     */
    private $domyslny;


}

