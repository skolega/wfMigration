<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CenaKategorii
 *
 * @ORM\Table(name="CENA_KATEGORII", indexes={@ORM\Index(name="CENA_KAT_IDCENY", columns={"ID_CENY"})})
 * @ORM\Entity
 */
class CenaKategorii
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII", type="string", length=9, nullable=false)
     */
    private $idKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY", type="string", length=9, nullable=false)
     */
    private $idCeny;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY_NARZUT", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $domyslnyNarzut;

    /**
     * @var string
     *
     * @ORM\Column(name="AKT_CEN_PRZY_DOSTAWIE", type="string", length=1, nullable=true)
     */
    private $aktCenPrzyDostawie = '1';


}

