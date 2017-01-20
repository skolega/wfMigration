<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IniOkno
 *
 * @ORM\Table(name="INI_OKNO")
 * @ORM\Entity
 */
class IniOkno
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_OKNA", type="string", length=9, nullable=false)
     */
    private $idOkna;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_KOL_PIERWSZEJ", type="string", length=9, nullable=false)
     */
    private $nrKolPierwszej;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_KOL_OSTATNIEJ", type="string", length=9, nullable=false)
     */
    private $nrKolOstatniej;

    /**
     * @var integer
     *
     * @ORM\Column(name="SKOK", type="integer", nullable=true)
     */
    private $skok = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KLAS_GRUPY", type="string", length=30, nullable=true)
     */
    private $kodKlasGrupy;


}

