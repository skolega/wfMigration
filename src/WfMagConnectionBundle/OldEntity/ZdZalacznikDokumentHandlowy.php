<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdZalacznikDokumentHandlowy
 *
 * @ORM\Table(name="ZD_ZALACZNIK_DOKUMENT_HANDLOWY")
 * @ORM\Entity
 */
class ZdZalacznikDokumentHandlowy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDokumentuHandlowego;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="smallint", nullable=false)
     */
    private $prgkod;

    /**
     * @var integer
     *
     * @ORM\Column(name="LICZBA_ZALACZNIKOW", type="integer", nullable=false)
     */
    private $liczbaZalacznikow;


}

