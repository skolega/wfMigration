<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdHistoriaStatusuObieguDokumentuEdeklaracja
 *
 * @ORM\Table(name="ZD_HISTORIA_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA", indexes={@ORM\Index(name="IDX_6D83F5397CE0C01B", columns={"ID_AKCJI_UZYTKOWNIKA_UTWORZENIA"}), @ORM\Index(name="IDX_6D83F539DF5AEAB8", columns={"ID_TYPU_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA"}), @ORM\Index(name="IDX_6D83F539EC79B1E1", columns={"ID_DOKUMENTU_PODSTAWOWEGO"})})
 * @ORM\Entity
 */
class ZdHistoriaStatusuObieguDokumentuEdeklaracja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HISTORII_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA", type="integer", nullable=false)
     */
    private $idHistoriiStatusuObieguDokumentuEdeklaracja;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdAkcjaUzytkownika
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdAkcjaUzytkownika")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_AKCJI_UZYTKOWNIKA_UTWORZENIA", referencedColumnName="ID_AKCJI_UZYTKOWNIKA")
     * })
     */
    private $idAkcjiUzytkownikaUtworzenia;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdTypStatusuObieguDokumentuEdeklaracja
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdTypStatusuObieguDokumentuEdeklaracja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TYPU_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA", referencedColumnName="ID_TYPU_STATUSU_OBIEGU_DOKUMENTU_EDEKLARACJA")
     * })
     */
    private $idTypuStatusuObieguDokumentuEdeklaracja;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdDokumentEdeklaracja
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdDokumentEdeklaracja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_DOKUMENTU_PODSTAWOWEGO")
     * })
     */
    private $idDokumentuPodstawowego;


}

