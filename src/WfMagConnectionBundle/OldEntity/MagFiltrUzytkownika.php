<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagFiltrUzytkownika
 *
 * @ORM\Table(name="MAG_FILTR_UZYTKOWNIKA")
 * @ORM\Entity
 */
class MagFiltrUzytkownika
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_uzytkownika", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="id_firmy", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="id_filtra", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFiltra;

    /**
     * @var string
     *
     * @ORM\Column(name="opis_definicji", type="text", length=16, nullable=true)
     */
    private $opisDefinicji;

    /**
     * @var string
     *
     * @ORM\Column(name="definicja", type="string", length=5000, nullable=true)
     */
    private $definicja;


}

