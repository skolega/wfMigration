<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagDefinicjaFiltra
 *
 * @ORM\Table(name="MAG_DEFINICJA_FILTRA", uniqueConstraints={@ORM\UniqueConstraint(name="AK_MAGFILTRDEF_NAZWA_KONTEKST", columns={"nazwa", "nazwa_kontekstu", "typ", "podsystem"})})
 * @ORM\Entity
 */
class MagDefinicjaFiltra
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_filtra", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFiltra;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="definicja_systemowa", type="string", length=5000, nullable=true)
     */
    private $definicjaSystemowa;

    /**
     * @var integer
     *
     * @ORM\Column(name="kontekst_uzycia_sys", type="integer", nullable=true)
     */
    private $kontekstUzyciaSys = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa_kontekstu", type="string", length=30, nullable=true)
     */
    private $nazwaKontekstu;

    /**
     * @var string
     *
     * @ORM\Column(name="typ", type="string", length=30, nullable=true)
     */
    private $typ;

    /**
     * @var string
     *
     * @ORM\Column(name="podsystem", type="string", length=30, nullable=true)
     */
    private $podsystem = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="integer", nullable=true)
     */
    private $idUzytkownika;


}

