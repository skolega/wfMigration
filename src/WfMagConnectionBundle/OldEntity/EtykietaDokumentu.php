<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtykietaDokumentu
 *
 * @ORM\Table(name="ETYKIETA_DOKUMENTU")
 * @ORM\Entity
 */
class EtykietaDokumentu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=false)
     */
    private $idEtykiety;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="DOKUMENT", type="string", length=50, nullable=true)
     */
    private $dokument;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOLOR_NAPISU", type="integer", nullable=true)
     */
    private $kolorNapisu = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="KOLOR_TLA", type="integer", nullable=true)
     */
    private $kolorTla = '-1';


}

