<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdHistoriaStatusuPodpisaniaDokumentuEdeklaracja
 *
 * @ORM\Table(name="ZD_HISTORIA_STATUSU_PODPISANIA_DOKUMENTU_EDEKLARACJA", indexes={@ORM\Index(name="IDX_84715DFAEC79B1E1F1CCFB89", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA"}), @ORM\Index(name="IDX_84715DFA3EE92359", columns={"ID_METODY_PRZECHOWANIA_DANYCH_BINARNYCH_PODPISANEGO_DOKUMENTU_EDEKLARACJA"}), @ORM\Index(name="IDX_84715DFAEC79B1E16A952A43", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_WALIDACJI_DOKUMENTU_EDEKLARACJA"}), @ORM\Index(name="IDX_84715DFAEC79B1E148CBF06C", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_WYSLANIA_DOKUMENTU_EDEKLARACJA"})})
 * @ORM\Entity
 */
class ZdHistoriaStatusuPodpisaniaDokumentuEdeklaracja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HISTORII_STATUSU_PODPISANIA_DOKUMENTU_EDEKLARACJA", type="integer", nullable=false)
     */
    private $idHistoriiStatusuPodpisaniaDokumentuEdeklaracja;

    /**
     * @var binary
     *
     * @ORM\Column(name="DANE_BINARNE_PODPISANEGO_DOKUMENTU_EDEKLARACJA", type="binary", nullable=false)
     */
    private $daneBinarnePodpisanegoDokumentuEdeklaracja;

    /**
     * @var string
     *
     * @ORM\Column(name="SKROT_DANYCH_BINARNYCH_PODPISANEGO_DOKUMENTU_EDEKLARACJA", type="string", length=64, nullable=false)
     */
    private $skrotDanychBinarnychPodpisanegoDokumentuEdeklaracja;

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

    /**
     * @var \WfMagConnectionBundle\Entity\ZdMetodaPrzechowaniaDanychBinarnych
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdMetodaPrzechowaniaDanychBinarnych")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_METODY_PRZECHOWANIA_DANYCH_BINARNYCH_PODPISANEGO_DOKUMENTU_EDEKLARACJA", referencedColumnName="ID_METODY_PRZECHOWANIA_DANYCH_BINARNYCH")
     * })
     */
    private $idMetodyPrzechowaniaDanychBinarnychPodpisanegoDokumentuEdeklaracja;


}

