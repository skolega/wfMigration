<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdKonfiguracjaKontPocztowychPoz
 *
 * @ORM\Table(name="ZD_KONFIGURACJA_KONT_POCZTOWYCH_POZ")
 * @ORM\Entity
 */
class ZdKonfiguracjaKontPocztowychPoz
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_KONFIGURACJI", type="integer", nullable=false)
     */
    private $idKonfiguracji;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=50, nullable=true)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_DOMYSLNA", type="string", length=4000, nullable=true)
     */
    private $wartoscDomyslna;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="string", length=4000, nullable=false)
     */
    private $wartosc;


}

