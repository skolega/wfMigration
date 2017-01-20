<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagKarton
 *
 * @ORM\Table(name="MAG_KARTON", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_FIRMA_KOD_KRESKOWY", columns={"KOD_KRESKOWY", "ID_FIRMY"})})
 * @ORM\Entity
 */
class MagKarton
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KARTONU", type="string", length=9, nullable=false)
     */
    private $idKartonu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=false)
     */
    private $kodKreskowy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_IMPORTU", type="datetime", nullable=true)
     */
    private $dataImportu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA_I", type="string", length=9, nullable=true)
     */
    private $idUzytkownikaI;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_EKSPORTU", type="datetime", nullable=true)
     */
    private $dataEksportu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA_E", type="string", length=9, nullable=true)
     */
    private $idUzytkownikaE;


}

