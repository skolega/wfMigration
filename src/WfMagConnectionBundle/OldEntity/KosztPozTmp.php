<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KosztPozTmp
 *
 * @ORM\Table(name="KOSZT_POZ_TMP")
 * @ORM\Entity
 */
class KosztPozTmp
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_poz", type="string", length=9, nullable=false)
     */
    private $idPoz;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="wartosc_poz_pln", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $wartoscPozPln;

    /**
     * @var string
     *
     * @ORM\Column(name="koszt_czesc_poz_pln", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $kosztCzescPozPln;


}

