<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KodKreskowy
 *
 * @ORM\Table(name="KOD_KRESKOWY", uniqueConstraints={@ORM\UniqueConstraint(name="AK_KOD_KRESKOWY", columns={"ID_KODU_KRESKOWEGO"})}, indexes={@ORM\Index(name="KOD_KRESKOWY_IDART", columns={"ID_ARTYKULU"}), @ORM\Index(name="KOD_KRESKOWY_IDMAG", columns={"ID_MAGAZYNU", "KOD_KRESKOWY"})})
 * @ORM\Entity
 */
class KodKreskowy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=false)
     */
    private $kodKreskowy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_JEDNOSTKI", type="string", length=9, nullable=true)
     */
    private $idJednostki = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOM_ILOSC", type="decimal", precision=16, scale=4, nullable=true)
     */
    private $domIlosc = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_CD", type="string", length=1000, nullable=true)
     */
    private $opisCd;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZENOS_OPIS", type="string", length=1, nullable=true)
     */
    private $przenosOpis = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KODU_KRESKOWEGO", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKoduKreskowego;


}

