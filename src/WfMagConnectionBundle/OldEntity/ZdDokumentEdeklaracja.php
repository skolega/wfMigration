<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdDokumentEdeklaracja
 *
 * @ORM\Table(name="ZD_DOKUMENT_EDEKLARACJA", indexes={@ORM\Index(name="IDX_2EE628BC2E5DAE0D", columns={"ID_MODYFIKOWANEGO_DOKUMENTU_PODSTAWOWEGO"}), @ORM\Index(name="IDX_2EE628BC2C915952", columns={"ID_HISTORII_STATUSU_IMPORTU_DOKUMENTOW_EDEKLARACJA"}), @ORM\Index(name="IDX_2EE628BCEC79B1E1F1CCFB89", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA"}), @ORM\Index(name="IDX_2EE628BCEC79B1E16A952A43", columns={"ID_DOKUMENTU_PODSTAWOWEGO", "ID_HISTORII_STATUSU_WALIDACJI_DOKUMENTU_EDEKLARACJA"})})
 * @ORM\Entity
 */
class ZdDokumentEdeklaracja
{
    /**
     * @var \WfMagConnectionBundle\Entity\ZdHistoriaStatusuWalidacjiDokumentuEdeklaracja
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdHistoriaStatusuWalidacjiDokumentuEdeklaracja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_DOKUMENTU_PODSTAWOWEGO"),
     *   @ORM\JoinColumn(name="ID_HISTORII_STATUSU_WALIDACJI_DOKUMENTU_EDEKLARACJA", referencedColumnName="ID_HISTORII_STATUSU_WALIDACJI_DOKUMENTU_EDEKLARACJA")
     * })
     */
    private $idDokumentuPodstawowego;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdDokumentEdeklaracja
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdDokumentEdeklaracja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_MODYFIKOWANEGO_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_DOKUMENTU_PODSTAWOWEGO")
     * })
     */
    private $idModyfikowanegoDokumentuPodstawowego;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdHistoriaStatusuImportuDokumentowEdeklaracja
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdHistoriaStatusuImportuDokumentowEdeklaracja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_HISTORII_STATUSU_IMPORTU_DOKUMENTOW_EDEKLARACJA", referencedColumnName="ID_HISTORII_STATUSU_IMPORTU_DOKUMENTOW_EDEKLARACJA")
     * })
     */
    private $idHistoriiStatusuImportuDokumentowEdeklaracja;


}

