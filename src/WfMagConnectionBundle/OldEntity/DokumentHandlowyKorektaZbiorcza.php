<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DokumentHandlowyKorektaZbiorcza
 *
 * @ORM\Table(name="DOKUMENT_HANDLOWY_KOREKTA_ZBIORCZA")
 * @ORM\Entity
 */
class DokumentHandlowyKorektaZbiorcza
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KOREKTY_ZBIORCZEJ", type="string", length=9, nullable=false)
     */
    private $idKorektyZbiorczej;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_ORYGINALNEGO", type="string", length=9, nullable=false)
     */
    private $idDokOryginalnego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_KORYGOWANEGO", type="string", length=9, nullable=false)
     */
    private $idDokKorygowanego;


}

