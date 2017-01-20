<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historiamp
 *
 * @ORM\Table(name="HistoriaMP", uniqueConstraints={@ORM\UniqueConstraint(name="AK_FIRMA_KPDATA_HISTORIA", columns={"id_firmy", "KP_DATA_OD"}), @ORM\UniqueConstraint(name="AK_FIRMA_DATA_HISTORIA", columns={"id_firmy", "data_od"})})
 * @ORM\Entity
 */
class Historiamp
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_historiamp", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idHistoriamp;

    /**
     * @var string
     *
     * @ORM\Column(name="id_firmy", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="MP", type="smallint", nullable=true)
     */
    private $mp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Kwartalny_VAT", type="smallint", nullable=true)
     */
    private $kwartalnyVat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="data_od", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $dataOd = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="KP_DATA_OD", type="datetime", nullable=true)
     */
    private $kpDataOd;


}

