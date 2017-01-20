<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZaplataWieloWal
 *
 * @ORM\Table(name="ZAPLATA_WIELO_WAL", indexes={@ORM\Index(name="IDX_ROZRACHUNEK", columns={"ID_ROZRACHUNKU"}), @ORM\Index(name="IDX_DOKUMENT_HANDLOWY", columns={"ID_DOKUMENTU_HANDLOWEGO"})})
 * @ORM\Entity
 */
class ZaplataWieloWal
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPLATY", type="string", length=9, nullable=false)
     */
    private $idZaplaty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="string", length=9, nullable=true)
     */
    private $idRozrachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_WAL", type="string", length=9, nullable=true)
     */
    private $kwotaWal;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $przelicznikWal = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA", type="string", length=9, nullable=true)
     */
    private $kwota;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLAT", type="string", length=50, nullable=true)
     */
    private $formaPlat = 'gotówka';


}

