<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sadfaktura
 *
 * @ORM\Table(name="SADFAKTURA", indexes={@ORM\Index(name="SADFAKTURA_NUMER_DATA", columns={"ID_SADU", "NUMER", "DATA"}), @ORM\Index(name="SADFAKTURA_IDPRAC", columns={"ID_PRACOWNIKA"}), @ORM\Index(name="SADFAKTURA_ID_KONTR", columns={"ID_KONTRAHENTA"}), @ORM\Index(name="SADFAKTURA_IDROZRACH", columns={"ID_ROZRACHUNKU"})})
 * @ORM\Entity
 */
class Sadfaktura
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FAKTURY_SADU", type="string", length=9, nullable=false)
     */
    private $idFakturySadu;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=false)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WALUTY", type="string", length=3, nullable=true)
     */
    private $symWaluty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SADU", type="string", length=9, nullable=true)
     */
    private $idSadu;

    /**
     * @var string
     *
     * @ORM\Column(name="RAZEM_WAL", type="string", length=9, nullable=true)
     */
    private $razemWal;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT_NARZUT_WAL", type="string", length=9, nullable=true)
     */
    private $rabatNarzutWal;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT_NARZUT", type="string", length=5, nullable=true)
     */
    private $rabatNarzut;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLATNOSCI", type="string", length=50, nullable=true)
     */
    private $formaPlatnosci;

    /**
     * @var string
     *
     * @ORM\Column(name="TERMIN_PLATNOSCI", type="string", length=4, nullable=true)
     */
    private $terminPlatnosci;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="string", length=9, nullable=true)
     */
    private $idRozrachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="string", length=9, nullable=true)
     */
    private $idPracownika;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_ROZRACHUNEK", type="smallint", nullable=true)
     */
    private $czyRozrachunek;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=1000, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=true)
     */
    private $flagaStanu;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_KURS_WAL", type="string", length=4, nullable=true)
     */
    private $dataKursWal;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $przelicznikWal = '1';


}

