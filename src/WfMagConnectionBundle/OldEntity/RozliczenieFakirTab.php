<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RozliczenieFakirTab
 *
 * @ORM\Table(name="ROZLICZENIE_FAKIR_TAB", uniqueConstraints={@ORM\UniqueConstraint(name="ROZLICZENIE_IDROZRACHUNKU_DATAROZLICZENIA_ID", columns={"ID_ROZRACHUNKU", "DATA_ROZLICZENIA", "ID_ROZLICZENIA"}), @ORM\UniqueConstraint(name="ROZLICZENIE_IDROZR_STRONA_KWOTA_ID_RZL", columns={"ID_ROZRACHUNKU", "STRONA", "KWOTA", "ID_ROZLICZENIA"}), @ORM\UniqueConstraint(name="ROZLICZENIE_IDROZR_STRONA_KWOTA_W_ID_RZL", columns={"ID_ROZRACHUNKU", "STRONA", "KWOTA_W", "ID_ROZLICZENIA"})}, indexes={@ORM\Index(name="ROZLICZENIE_IDROZRACHUNKU", columns={"ID_ROZRACHUNKU"}), @ORM\Index(name="ROZLICZENIE_IDROZRACHUNKUZWIAZEK", columns={"ID_ROZRACHUNKU_ZWIAZEK"})})
 * @ORM\Entity
 */
class RozliczenieFakirTab
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZLICZENIA", type="string", length=9, nullable=false)
     */
    private $idRozliczenia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="string", length=9, nullable=true)
     */
    private $idRozrachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU_ZWIAZEK", type="string", length=9, nullable=true)
     */
    private $idRozrachunkuZwiazek;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwota = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_W", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwotaW = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_ROZLICZENIA", type="integer", nullable=true)
     */
    private $dataRozliczenia;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZLICZENIA_ZWIAZEK", type="string", length=9, nullable=true)
     */
    private $idRozliczeniaZwiazek;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_M", type="string", length=9, nullable=true)
     */
    private $idPozDokM;

    /**
     * @var string
     *
     * @ORM\Column(name="STRONA", type="string", length=2, nullable=false)
     */
    private $strona = '';


}

