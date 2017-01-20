<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpisDokPozFin
 *
 * @ORM\Table(name="OPIS_DOK_POZ_FIN")
 * @ORM\Entity
 */
class OpisDokPozFin
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_OPISU", type="string", length=9, nullable=false)
     */
    private $idOpisu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=false)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="DOK_POZ", type="string", length=1, nullable=true)
     */
    private $dokPoz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY", type="string", length=1, nullable=true)
     */
    private $domyslny = '0';


}

