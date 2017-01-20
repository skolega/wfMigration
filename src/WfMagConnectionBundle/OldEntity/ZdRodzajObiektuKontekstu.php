<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdRodzajObiektuKontekstu
 *
 * @ORM\Table(name="ZD_RODZAJ_OBIEKTU_KONTEKSTU", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_ZD_RODZAJ_OBIEKTU_KONTEKSTU", columns={"ID_PROGRAMU_WF", "NAZWA_TABELI", "NAZWA_KOLUMNY_ID", "ID_IMPORTU_MAGIK"})})
 * @ORM\Entity
 */
class ZdRodzajObiektuKontekstu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RODZAJU_OBIEKTU_KONTEKSTU", type="integer", nullable=false)
     */
    private $idRodzajuObiektuKontekstu;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROGRAMU_WF", type="smallint", nullable=false)
     */
    private $idProgramuWf;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_TABELI", type="string", length=256, nullable=false)
     */
    private $nazwaTabeli;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KOLUMNY_ID", type="string", length=256, nullable=false)
     */
    private $nazwaKolumnyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_IMPORTU_MAGIK", type="integer", nullable=true)
     */
    private $idImportuMagik;


}

