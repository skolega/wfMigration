<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagListaObiektow
 *
 * @ORM\Table(name="MAG_LISTA_OBIEKTOW", uniqueConstraints={@ORM\UniqueConstraint(name="AK_AK_MAG_NAZWA_LISTY_MAG_LIST", columns={"nazwa_listy", "uzycie", "id_firmy"})})
 * @ORM\Entity
 */
class MagListaObiektow
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_listy", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idListy;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa_listy", type="string", length=50, nullable=false)
     */
    private $nazwaListy;

    /**
     * @var integer
     *
     * @ORM\Column(name="uzycie", type="integer", nullable=false)
     */
    private $uzycie;

    /**
     * @var string
     *
     * @ORM\Column(name="id_firmy", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="licznosc", type="integer", nullable=false)
     */
    private $licznosc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="id_magazynu", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idMagazynu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="id_uzytkownika", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUzytkownika = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="Mobile", type="smallint", nullable=true)
     */
    private $mobile;


}

