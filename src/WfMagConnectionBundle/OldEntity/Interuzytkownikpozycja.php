<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interuzytkownikpozycja
 *
 * @ORM\Table(name="INTERUZYTKOWNIKPOZYCJA", indexes={@ORM\Index(name="FK_POZYCJA", columns={"ID_POZYCJI"}), @ORM\Index(name="FK_UZYTKOWNIK", columns={"ID_UZYTKOWNIKA"})})
 * @ORM\Entity
 */
class Interuzytkownikpozycja
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
     * @ORM\Column(name="ID_POZYCJI", type="string", length=9, nullable=true)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="string", length=200, nullable=true)
     */
    private $wartosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
     */
    private $idFirmy = '0';


}

