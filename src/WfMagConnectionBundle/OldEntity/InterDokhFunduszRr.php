<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterDokhFunduszRr
 *
 * @ORM\Table(name="INTER_DOKH_FUNDUSZ_RR")
 * @ORM\Entity
 */
class InterDokhFunduszRr
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FPROM", type="string", length=9, nullable=false)
     */
    private $idFprom;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_POTRACENIA", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $wartoscPotracenia;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_ODNIESIENIA", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $wartoscOdniesienia;


}

