<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmInterKontakt
 *
 * @ORM\Table(name="CRM_INTER_KONTAKT", indexes={@ORM\Index(name="IDX_59C1429619437C1C", columns={"ID_ZADANIA"}), @ORM\Index(name="IDX_59C1429658FC0695", columns={"ID_KONTAKTU"})})
 * @ORM\Entity
 */
class CrmInterKontakt
{
    /**
     * @var string
     *
     * @ORM\Column(name="ETAPY", type="string", length=10, nullable=true)
     */
    private $etapy = '0000000000';

    /**
     * @var \WfMagConnectionBundle\Entity\CrmZadanie
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\CrmZadanie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ZADANIA", referencedColumnName="ID_ZADANIA")
     * })
     */
    private $idZadania;

    /**
     * @var \WfMagConnectionBundle\Entity\Kontakt
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\Kontakt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_KONTAKTU", referencedColumnName="ID_KONTAKTU")
     * })
     */
    private $idKontaktu;


}

