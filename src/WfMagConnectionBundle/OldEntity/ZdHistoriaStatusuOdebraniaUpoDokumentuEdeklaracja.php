<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdHistoriaStatusuOdebraniaUpoDokumentuEdeklaracja
 *
 * @ORM\Table(name="ZD_HISTORIA_STATUSU_ODEBRANIA_UPO_DOKUMENTU_EDEKLARACJA", indexes={@ORM\Index(name="IDX_D5FA7AC8C978378D", columns={"ID_METODY_PRZECHOWANIA_DANYCH_BINARNYCH_ODEBRANEGO_UPO"}), @ORM\Index(name="IDX_D5FA7AC8EC79B1E1F1CCFB89", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA"}), @ORM\Index(name="IDX_D5FA7AC8EC79B1E148CBF06C", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_WYSLANIA_DOKUMENTU_EDEKLARACJA"})})
 * @ORM\Entity
 */
class ZdHistoriaStatusuOdebraniaUpoDokumentuEdeklaracja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HISTORII_STATUSU_ODEBRANIA_UPO_DOKUMENTU_EDEKLARACJA", type="integer", nullable=false)
     */
    private $idHistoriiStatusuOdebraniaUpoDokumentuEdeklaracja;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ZEWNETRZNEGO_STATUSU_ODEBRANIA_UPO", type="integer", nullable=false)
     */
    private $idZewnetrznegoStatusuOdebraniaUpo;

    /**
     * @var binary
     *
     * @ORM\Column(name="DANE_BINARNE_ODEBRANEGO_UPO", type="binary", nullable=true)
     */
    private $daneBinarneOdebranegoUpo;

    /**
     * @var string
     *
     * @ORM\Column(name="SKROT_DANYCH_BINARNYCH_ODEBRANEGO_UPO", type="string", length=64, nullable=true)
     */
    private $skrotDanychBinarnychOdebranegoUpo;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdMetodaPrzechowaniaDanychBinarnych
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdMetodaPrzechowaniaDanychBinarnych")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_METODY_PRZECHOWANIA_DANYCH_BINARNYCH_ODEBRANEGO_UPO", referencedColumnName="ID_METODY_PRZECHOWANIA_DANYCH_BINARNYCH")
     * })
     */
    private $idMetodyPrzechowaniaDanychBinarnychOdebranegoUpo;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdHistoriaStatusuWyslaniaDokumentuEdeklaracja
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdHistoriaStatusuWyslaniaDokumentuEdeklaracja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_DOKUMENTU_PODSTAWOWEGO"),
     *   @ORM\JoinColumn(name="ID_HISTORII_STATUSU_WYSLANIA_DOKUMENTU_EDEKLARACJA", referencedColumnName="ID_HISTORII_STATUSU_WYSLANIA_DOKUMENTU_EDEKLARACJA")
     * })
     */
    private $idDokumentuPodstawowego;


}

