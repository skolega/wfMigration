<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Drspar
 *
 * @ORM\Table(name="DRSPAR", uniqueConstraints={@ORM\UniqueConstraint(name="AK_DRSPAR_MAG_DATA_GO_DRSPAR", columns={"ID_MAGAZYNU", "DATA", "GODZINA", "ID_DRSPAR"})}, indexes={@ORM\Index(name="DRSPAR_KOD_KRESKOWY", columns={"KOD_KRESKOWY"}), @ORM\Index(name="DRSPAR_IDMAG", columns={"ID_MAGAZYNU"}), @ORM\Index(name="DRSPAR_DATGODZ", columns={"ID_MAGAZYNU", "DATA", "GODZINA", "NUMER_SYSTEMOWY"}), @ORM\Index(name="DRSPAR_NRAP_NPAR", columns={"NR_RAPORTU", "NR_PARAGONU"})})
 * @ORM\Entity
 */
class Drspar
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DRSPAR", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDrspar;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA", type="integer", nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZINA", type="integer", nullable=true)
     */
    private $godzina;

    /**
     * @var integer
     *
     * @ORM\Column(name="DRS_PARAGON", type="smallint", nullable=true)
     */
    private $drsParagon;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_ECR", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $typEcr;

    /**
     * @var string
     *
     * @ORM\Column(name="ECR_NAZWA", type="string", length=50, nullable=true)
     */
    private $ecrNazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_PARAGONU", type="integer", nullable=true)
     */
    private $nrParagonu;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_RAPORTU", type="integer", nullable=true)
     */
    private $nrRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_SYSTEMOWY", type="string", length=30, nullable=true)
     */
    private $numerSystemowy;

    /**
     * @var string
     *
     * @ORM\Column(name="KASJER", type="string", length=50, nullable=true)
     */
    private $kasjer;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $wartoscBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $rabat;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROC_KWOTA", type="smallint", nullable=true)
     */
    private $procKwota;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT2", type="string", length=5, nullable=true)
     */
    private $rabat2;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy;

    /**
     * @var integer
     *
     * @ORM\Column(name="STAN_DOKUMENTU", type="smallint", nullable=false)
     */
    private $stanDokumentu = '0';


}

