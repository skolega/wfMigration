<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApZamOkresTempDel
 *
 * @ORM\Table(name="AP_ZAM_OKRES_TEMP_DEL")
 * @ORM\Entity
 */
class ApZamOkresTempDel
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPoz;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_HAN", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokHan;


}

