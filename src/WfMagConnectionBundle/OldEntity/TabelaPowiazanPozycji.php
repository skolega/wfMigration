<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TabelaPowiazanPozycji
 *
 * @ORM\Table(name="TABELA_POWIAZAN_POZYCJI", uniqueConstraints={@ORM\UniqueConstraint(name="TABELA_POW_POZ_ROZ_PRZ", columns={"ID_POZ_DOK_ROZCH", "ID_POZ_DOK_PRZYCH", "ILOSC"})}, indexes={@ORM\Index(name="TABELA_POW_KOREKTA", columns={"ID_POZ_DOK_PRZYCH", "ID_POZ_DOK_ROZCH", "KOREKTA"})})
 * @ORM\Entity
 */
class TabelaPowiazanPozycji
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_PRZYCH", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozDokPrzych;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_ROZCH", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozDokRozch;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ZWROT", type="string", length=9, nullable=true)
     */
    private $zwrot;

    /**
     * @var string
     *
     * @ORM\Column(name="KOREKTA", type="string", length=1, nullable=true)
     */
    private $korekta;


}

