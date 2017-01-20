<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dostep
 *
 * @ORM\Table(name="DOSTEP", indexes={@ORM\Index(name="DOSTEP_IDFIR_IDGRU", columns={"ID_FIRMY", "ID_GRUPY"})})
 * @ORM\Entity
 */
class Dostep
{
    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=20, nullable=false)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=false)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID2", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $id2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID3", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $id3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID4", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $id4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID5", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $id5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAJ_DOSTEPU", type="smallint", nullable=false)
     */
    private $rodzajDostepu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=20, nullable=true)
     */
    private $flagaStanu = '';


}

