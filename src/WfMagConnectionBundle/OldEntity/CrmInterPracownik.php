<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmInterPracownik
 *
 * @ORM\Table(name="CRM_INTER_PRACOWNIK", indexes={@ORM\Index(name="IDX_AB5BE036FAC0EF68", columns={"ID_PRACOWNIKA"}), @ORM\Index(name="IDX_AB5BE03619437C1C", columns={"ID_ZADANIA"})})
 * @ORM\Entity
 */
class CrmInterPracownik
{
    /**
     * @var string
     *
     * @ORM\Column(name="ETAPY", type="string", length=10, nullable=true)
     */
    private $etapy = '0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=1, nullable=true)
     */
    private $status = 'n';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZAS_PRZYPOMNIENIA", type="integer", nullable=true)
     */
    private $czasPrzypomnienia = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ODLOZONE", type="string", length=1, nullable=true)
     */
    private $odlozone = '0';

    /**
     * @var \WfMagConnectionBundle\Entity\Pracownik
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\Pracownik")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PRACOWNIKA", referencedColumnName="ID_PRACOWNIKA")
     * })
     */
    private $idPracownika;

    /**
     * @var \WfMagConnectionBundle\Entity\CrmZadanie
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\CrmZadanie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ZADANIA", referencedColumnName="ID_ZADANIA")
     * })
     */
    private $idZadania;


}

