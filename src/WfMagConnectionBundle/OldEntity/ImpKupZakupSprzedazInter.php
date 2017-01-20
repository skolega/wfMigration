<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpKupZakupSprzedazInter
 *
 * @ORM\Table(name="IMP_KUP_ZAKUP_SPRZEDAZ_INTER")
 * @ORM\Entity
 */
class ImpKupZakupSprzedazInter
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KUP_ZAKUP_SPRZEDAZ_INTER", type="string", length=9, nullable=false)
     */
    private $idKupZakupSprzedazInter;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DATY", type="string", length=9, nullable=false)
     */
    private $idDaty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_ROZCH", type="string", length=9, nullable=false)
     */
    private $idPozDokRozch;

    /**
     * @var string
     *
     * @ORM\Column(name="MAG_ID_DOKUMENTU_FS", type="string", length=9, nullable=false)
     */
    private $magIdDokumentuFs;

    /**
     * @var string
     *
     * @ORM\Column(name="MAG_ID_DOKUMENTU_FZ", type="string", length=9, nullable=false)
     */
    private $magIdDokumentuFz;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_ROZCH_NETTO_ZAKUP", type="decimal", precision=16, scale=4, nullable=true)
     */
    private $wartoscRozchNettoZakup;

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS_KOSZTU", type="smallint", nullable=false)
     */
    private $statusKosztu;

    /**
     * @var string
     *
     * @ORM\Column(name="MAG_ID_DOKUMENTU_WZ", type="string", length=9, nullable=true)
     */
    private $magIdDokumentuWz;


}

