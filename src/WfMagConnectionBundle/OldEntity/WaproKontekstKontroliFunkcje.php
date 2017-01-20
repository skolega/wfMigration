<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproKontekstKontroliFunkcje
 *
 * @ORM\Table(name="WAPRO_KONTEKST_KONTROLI_FUNKCJE", uniqueConstraints={@ORM\UniqueConstraint(name="AK_WAPRO_KONTEKST_KONTROLI_FUNKCJE_ID_KONTEKSTU_ID_FUNKCJI_KONTROLI", columns={"ID_KONTEKSTU", "ID_FUNKCJI_KONTROLI"})}, indexes={@ORM\Index(name="IDX_WAPRO_KONTEKST_KONTROLI_FUNKCJE_ID_KONTEKSTU", columns={"ID_KONTEKSTU"}), @ORM\Index(name="IDX_WAPRO_KONTEKST_KONTROLI_FUNKCJE_ID_FUNKCJI_KONTROLI", columns={"ID_FUNKCJI_KONTROLI"})})
 * @ORM\Entity
 */
class WaproKontekstKontroliFunkcje
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTEKSTU_FUNKCJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKontekstuFunkcji;

    /**
     * @var \WfMagConnectionBundle\Entity\WaproKontekstKontroli
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\WaproKontekstKontroli")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_KONTEKSTU", referencedColumnName="ID_KONTEKSTU")
     * })
     */
    private $idKontekstu;

    /**
     * @var \WfMagConnectionBundle\Entity\WaproFunkcjaKontroli
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\WaproFunkcjaKontroli")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_FUNKCJI_KONTROLI", referencedColumnName="ID_FUNKCJI_KONTROLI")
     * })
     */
    private $idFunkcjiKontroli;


}

