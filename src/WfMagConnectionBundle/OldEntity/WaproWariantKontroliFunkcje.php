<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproWariantKontroliFunkcje
 *
 * @ORM\Table(name="WAPRO_WARIANT_KONTROLI_FUNKCJE", uniqueConstraints={@ORM\UniqueConstraint(name="AK_WAPRO_WARIANT_KONTROLI_FUNKCJE_ID_WARIANTU_ID_FUNKCJI_KONTROLI", columns={"ID_WARIANTU", "ID_FUNKCJI_KONTROLI"})}, indexes={@ORM\Index(name="IDX_WAPRO_WARIANT_KONTROLI_FUNKCJE_ID_WARIANTU", columns={"ID_WARIANTU"}), @ORM\Index(name="IDX_50F84A17AF41320D", columns={"ID_FUNKCJI_KONTROLI"})})
 * @ORM\Entity
 */
class WaproWariantKontroliFunkcje
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_WARIANTU_FUNKCJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idWariantuFunkcji;

    /**
     * @var \WfMagConnectionBundle\Entity\WaproWariantKontroli
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\WaproWariantKontroli")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_WARIANTU", referencedColumnName="ID_WARIANTU")
     * })
     */
    private $idWariantu;

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

