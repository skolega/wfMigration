<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdUstawieniaKontrolek
 *
 * @ORM\Table(name="ZD_USTAWIENIA_KONTROLEK", indexes={@ORM\Index(name="ZD_USTAWIENIA_KONTROLEK_IDUZYTKOWNIKA_IDFIRMY_IDPROG_KODKONTROLKI", columns={"Id_Uzytkownika", "Id_Firmy", "Id_Programu", "Kod_Kontrolka"})})
 * @ORM\Entity
 */
class ZdUstawieniaKontrolek
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Firmy", type="integer", nullable=false)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Programu", type="integer", nullable=false)
     */
    private $idProgramu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Uzytkownika", type="integer", nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="Ustawienia", type="string", length=-1, nullable=true)
     */
    private $ustawienia;

    /**
     * @var string
     *
     * @ORM\Column(name="Kod_Kontrolka", type="string", length=36, nullable=false)
     */
    private $kodKontrolka;

    /**
     * @var integer
     *
     * @ORM\Column(name="Szerokosc", type="integer", nullable=true)
     */
    private $szerokosc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Wysokosc", type="integer", nullable=true)
     */
    private $wysokosc;


}

