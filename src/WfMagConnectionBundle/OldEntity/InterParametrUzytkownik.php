<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterParametrUzytkownik
 *
 * @ORM\Table(name="INTER_PARAMETR_UZYTKOWNIK", indexes={@ORM\Index(name="INTER_PAR_UZYT_IDPAR_IDU", columns={"ID_PARAMETRU", "ID_UZYTKOWNIKA"})})
 * @ORM\Entity
 */
class InterParametrUzytkownik
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=9, nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PARAMETRU", type="string", length=9, nullable=true)
     */
    private $idParametru;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="string", length=50, nullable=false)
     */
    private $wartosc;


}

