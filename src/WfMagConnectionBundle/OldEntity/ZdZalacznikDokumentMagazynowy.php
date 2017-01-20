<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdZalacznikDokumentMagazynowy
 *
 * @ORM\Table(name="ZD_ZALACZNIK_DOKUMENT_MAGAZYNOWY")
 * @ORM\Entity
 */
class ZdZalacznikDokumentMagazynowy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDokMagazynowego;

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

