<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CenaArtykulu
 *
 * @ORM\Table(name="CENA_ARTYKULU", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_ID_CENA_ARTYKULU", columns={"ID_CENA_ARTYKULU"})}, indexes={@ORM\Index(name="CENART_INDEX1", columns={"ID_ARTYKULU", "ID_CENY", "SYM_WAL", "CENA_NETTO", "CENA_BRUTTO"}), @ORM\Index(name="CENA_ARTYKULU_SKLEP", columns={"ID_ARTYKULU", "PRZELICZNIK_WAL", "OBL_WG_CEN_ZAK", "CENA_NETTO", "CENA_BRUTTO", "UWAGI", "AKT_CEN_PRZY_DOSTAWIE", "ID_CENA_ARTYKULU", "ID_CENY"})})
 * @ORM\Entity
 */
class CenaArtykulu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY", type="string", length=9, nullable=false)
     */
    private $idCeny;

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
     * @ORM\Column(name="OBL_WG_CEN_ZAK", type="string", length=1, nullable=true)
     */
    private $oblWgCenZak = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO", type="string", length=9, nullable=true)
     */
    private $cenaNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO", type="string", length=9, nullable=true)
     */
    private $cenaBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=50, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="AKT_CEN_PRZY_DOSTAWIE", type="string", length=1, nullable=true)
     */
    private $aktCenPrzyDostawie = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENA_ARTYKULU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idCenaArtykulu;


}

