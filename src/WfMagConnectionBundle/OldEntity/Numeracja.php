<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Numeracja
 *
 * @ORM\Table(name="NUMERACJA")
 * @ORM\Entity
 */
class Numeracja
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOKUMENT", type="smallint", nullable=false)
     */
    private $dokument;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOKUMENTU", type="string", length=9, nullable=false)
     */
    private $typDokumentu;

    /**
     * @var integer
     *
     * @ORM\Column(name="OKRES", type="integer", nullable=false)
     */
    private $okres = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="LAST_ID", type="integer", nullable=false)
     */
    private $lastId;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_URZADZENIA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUrzadzenia = '0';


}

