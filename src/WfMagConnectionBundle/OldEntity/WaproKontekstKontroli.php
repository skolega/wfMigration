<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproKontekstKontroli
 *
 * @ORM\Table(name="WAPRO_KONTEKST_KONTROLI", uniqueConstraints={@ORM\UniqueConstraint(name="AK_KONTEKST_KONTROLI_NAZWA_KONTEKSTU", columns={"NAZWA", "PRGKOD"})}, indexes={@ORM\Index(name="IDX_WAPRO_KONTEKST_KONTROLI_ID_KONTEKSTU_KONTROLI_NAZWA", columns={"ID_KONTEKSTU", "NAZWA"})})
 * @ORM\Entity
 */
class WaproKontekstKontroli
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTEKSTU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKontekstu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="integer", nullable=false)
     */
    private $prgkod = '0';


}

