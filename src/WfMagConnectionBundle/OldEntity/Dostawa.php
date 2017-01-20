<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dostawa
 *
 * @ORM\Table(name="DOSTAWA", indexes={@ORM\Index(name="IDX_6D834621DC39C6ED", columns={"ID_MIEJSCA_DOSTAWY"})})
 * @ORM\Entity
 */
class Dostawa
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOSTAWY", type="string", length=9, nullable=false)
     */
    private $idDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="string", length=9, nullable=true)
     */
    private $idDokMagazynowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMOWIENIA", type="string", length=9, nullable=true)
     */
    private $idZamowienia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FORMY_DOSTAWY", type="string", length=9, nullable=true)
     */
    private $idFormyDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_PLANOWANA", type="string", length=4, nullable=true)
     */
    private $dataPlanowana;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_ODBIORU", type="string", length=4, nullable=true)
     */
    private $dataOdbioru;

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZINA_ODBIORU", type="integer", nullable=true)
     */
    private $godzinaOdbioru;

    /**
     * @var string
     *
     * @ORM\Column(name="ODEBRANO", type="string", length=1, nullable=true)
     */
    private $odebrano = '0';

    /**
     * @var \WfMagConnectionBundle\Entity\MiejsceDostawy
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\MiejsceDostawy")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_MIEJSCA_DOSTAWY", referencedColumnName="ID_MIEJSCA_DOSTAWY")
     * })
     */
    private $idMiejscaDostawy;


}

