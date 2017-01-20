<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagUzytkownikListyObiektow
 *
 * @ORM\Table(name="MAG_UZYTKOWNIK_LISTY_OBIEKTOW", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_ID_UZYTKOWNIK_LISTY", columns={"ID_UZYTKOWNIK_LISTY"})}, indexes={@ORM\Index(name="IDX_958C5A49676378B", columns={"id_listy"})})
 * @ORM\Entity
 */
class MagUzytkownikListyObiektow
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
     * @ORM\Column(name="ID_UZYTKOWNIK_LISTY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUzytkownikListy;

    /**
     * @var \WfMagConnectionBundle\Entity\MagListaObiektow
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\MagListaObiektow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_listy", referencedColumnName="id_listy")
     * })
     */
    private $idListy;


}

