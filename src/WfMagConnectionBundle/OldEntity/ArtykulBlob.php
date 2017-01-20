<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtykulBlob
 *
 * @ORM\Table(name="ARTYKUL_BLOB", uniqueConstraints={@ORM\UniqueConstraint(name="ARTYKUL_BLOB_IND_NAZWA", columns={"INDEKS_KATALOGOWY", "NAZWA"})}, indexes={@ORM\Index(name="ARTYKUL_BLOB_INDEKS_KATALOGOWY", columns={"INDEKS_KATALOGOWY"})})
 * @ORM\Entity
 */
class ArtykulBlob
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_BLOBA", type="string", length=9, nullable=false)
     */
    private $idBloba;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEKS_KATALOGOWY", type="string", length=20, nullable=false)
     */
    private $indeksKatalogowy = '';

    /**
     * @var binary
     *
     * @ORM\Column(name="ZDJECIE", type="binary", nullable=true)
     */
    private $zdjecie;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOMYSLNE", type="smallint", nullable=true)
     */
    private $domyslne = '0';

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="GUID_ARTYKUL_BLOB", type="uniqueidentifier", nullable=true)
     */
    private $guidArtykulBlob = 'newid()';

    /**
     * @var string
     *
     * @ORM\Column(name="ZDJECIE_TMP", type="blob", nullable=true)
     */
    private $zdjecieTmp;


}

