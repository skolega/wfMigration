<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagSlownikStatusowDokumentow
 *
 * @ORM\Table(name="MAG_SLOWNIK_STATUSOW_DOKUMENTOW")
 * @ORM\Entity
 */
class MagSlownikStatusowDokumentow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_STATUSU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idStatusu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_STATUSU", type="string", length=50, nullable=false)
     */
    private $opisStatusu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_STATUSU", type="string", length=1, nullable=false)
     */
    private $kodStatusu;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOKUMENTU", type="string", length=1, nullable=false)
     */
    private $typDokumentu;

    /**
     * @var integer
     *
     * @ORM\Column(name="SYSTEMOWY", type="smallint", nullable=false)
     */
    private $systemowy = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AUTOMATYCZNY", type="smallint", nullable=false)
     */
    private $automatyczny = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AKTYWNY", type="smallint", nullable=false)
     */
    private $aktywny = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SZABLONU_SMS", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSzablonuSms = '0';


}

