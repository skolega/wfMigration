<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bMapaStatusowDokumentow
 *
 * @ORM\Table(name="MAG_A4B_MAPA_STATUSOW_DOKUMENTOW")
 * @ORM\Entity
 */
class MagA4bMapaStatusowDokumentow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_STATUSU_A4B", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idStatusuA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_STATUSU_MAG", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idStatusuMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idMagazynu = '0';


}

