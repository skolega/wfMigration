<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bSlownikStatusowDokumentow
 *
 * @ORM\Table(name="MAG_A4B_SLOWNIK_STATUSOW_DOKUMENTOW")
 * @ORM\Entity
 */
class MagA4bSlownikStatusowDokumentow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_STATUSU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idStatusu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_STATUSU", type="string", length=50, nullable=false)
     */
    private $opisStatusu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_A4B", type="string", length=50, nullable=false)
     */
    private $opisA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOKUMENTU", type="string", length=1, nullable=false)
     */
    private $typDokumentu;


}

