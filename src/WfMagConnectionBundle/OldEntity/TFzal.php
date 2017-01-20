<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TFzal
 *
 * @ORM\Table(name="T_FZAL")
 * @ORM\Entity
 */
class TFzal
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokumentuHandlowego;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROPORCJA_ZAL_AUTO_NETTO_BRUTTO", type="smallint", nullable=true)
     */
    private $proporcjaZalAutoNettoBrutto;


}

