<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DostepKopiaTmp
 *
 * @ORM\Table(name="DOSTEP_KOPIA_TMP")
 * @ORM\Entity
 */
class DostepKopiaTmp
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
     * @ORM\Column(name="KOD", type="string", length=20, nullable=true)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=false)
     */
    private $idGrupy;


}

