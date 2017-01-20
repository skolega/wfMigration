<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterKosztPoz
 *
 * @ORM\Table(name="INTER_KOSZT_POZ")
 * @ORM\Entity
 */
class InterKosztPoz
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_MAG", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KOSZTU", type="string", length=9, nullable=false)
     */
    private $idKosztu;


}

