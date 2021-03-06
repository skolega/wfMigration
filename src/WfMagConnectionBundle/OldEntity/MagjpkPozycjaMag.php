<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagjpkPozycjaMag
 *
 * @ORM\Table(name="MAGJPK_POZYCJA_MAG", indexes={@ORM\Index(name="PO_ID_DOK_MAGAZYNOWEGO", columns={"ID_DOK_MAGAZYNOWEGO"}), @ORM\Index(name="PO_ID_DOK_HANDLOWEGO", columns={"ID_DOK_HANDLOWEGO"})})
 * @ORM\Entity
 */
class MagjpkPozycjaMag
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_MAG", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDokMagazynowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_HANDLOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOD_ZWOLNIENIA", type="smallint", nullable=false)
     */
    private $kodZwolnienia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_ZWOLNIENIA", type="string", length=500, nullable=true)
     */
    private $opisZwolnienia;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZEBIEG", type="string", length=20, nullable=true)
     */
    private $przebieg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_DO_UZYTKU", type="string", length=4, nullable=true)
     */
    private $dataDoUzytku = '0';


}

