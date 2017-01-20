<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdHistoriaStatusuWyslaniaDokumentuEdeklaracja
 *
 * @ORM\Table(name="ZD_HISTORIA_STATUSU_WYSLANIA_DOKUMENTU_EDEKLARACJA", indexes={@ORM\Index(name="IDX_4BB6EF9CEC79B1E1F1CCFB89", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA"}), @ORM\Index(name="IDX_4BB6EF9CEC79B1E11DC5B2CF", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_PODPISANIA_DOKUMENTU_EDEKLARACJA"}), @ORM\Index(name="IDX_4BB6EF9CEC79B1E1E2B0C59C", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_ODEBRANIA_UPO_DOKUMENTU_EDEKLARACJA"})})
 * @ORM\Entity
 */
class ZdHistoriaStatusuWyslaniaDokumentuEdeklaracja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HISTORII_STATUSU_WYSLANIA_DOKUMENTU_EDEKLARACJA", type="integer", nullable=false)
     */
    private $idHistoriiStatusuWyslaniaDokumentuEdeklaracja;

    /**
     * @var boolean
     *
     * @ORM\Column(name="WYSLANO_NA_BRAMKE_TESTOWA", type="boolean", nullable=false)
     */
    private $wyslanoNaBramkeTestowa;

    /**
     * @var string
     *
     * @ORM\Column(name="GUID_REFERENCJI_WYSLANIA", type="string", length=36, nullable=true)
     */
    private $guidReferencjiWyslania;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ZEWNETRZNEGO_STATUSU_WYSLANIA", type="integer", nullable=true)
     */
    private $idZewnetrznegoStatusuWyslania;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdHistoriaStatusuOdebraniaUpoDokumentuEdeklaracja
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdHistoriaStatusuOdebraniaUpoDokumentuEdeklaracja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_DOKUMENTU_PODSTAWOWEGO"),
     *   @ORM\JoinColumn(name="ID_HISTORII_STATUSU_ODEBRANIA_UPO_DOKUMENTU_EDEKLARACJA", referencedColumnName="ID_HISTORII_STATUSU_ODEBRANIA_UPO_DOKUMENTU_EDEKLARACJA")
     * })
     */
    private $idDokumentuPodstawowego;


}

