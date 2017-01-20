<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZwrotDoDostawy
 *
 * @ORM\Table(name="ZWROT_DO_DOSTAWY")
 * @ORM\Entity
 */
class ZwrotDoDostawy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZWROTU", type="string", length=9, nullable=false)
     */
    private $idZwrotu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO_KOR", type="string", length=9, nullable=false)
     */
    private $idDokMagazynowegoKor;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_HANDLOWEGO_KOR", type="string", length=9, nullable=false)
     */
    private $idDokHandlowegoKor;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_PRZYCH", type="string", length=9, nullable=false)
     */
    private $idPozPrzych;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_ROZCH", type="string", length=9, nullable=false)
     */
    private $idPozRozch;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_ROZCH_KOR", type="string", length=9, nullable=false)
     */
    private $idPozRozchKor;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=false)
     */
    private $ilosc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC_ZWRACANA", type="string", length=9, nullable=false)
     */
    private $iloscZwracana = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BLOKUJ", type="string", length=1, nullable=false)
     */
    private $blokuj = '0';


}

