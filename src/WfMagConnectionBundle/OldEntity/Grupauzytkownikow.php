<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupauzytkownikow
 *
 * @ORM\Table(name="GRUPAUZYTKOWNIKOW", indexes={@ORM\Index(name="GRUPAUZYTK_IDFIR_NAZWA_AKT", columns={"ID_FIRMY", "NAZWA", "CZY_AKTYWNA"})})
 * @ORM\Entity
 */
class Grupauzytkownikow
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
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
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
     * @ORM\Column(name="CZY_AKTYWNA", type="string", length=1, nullable=true)
     */
    private $czyAktywna;


}

