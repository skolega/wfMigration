<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlasyfikatorTabela
 *
 * @ORM\Table(name="KLASYFIKATOR_TABELA", uniqueConstraints={@ORM\UniqueConstraint(name="po_nazwie_serwer", columns={"NAZWA_SERWER"}), @ORM\UniqueConstraint(name="po_nazwie_w_grupie", columns={"KOD_KLAS_GRUPY", "NAZWA", "ID_FIRMY"})}, indexes={@ORM\Index(name="IDX_16D076238066C838", columns={"KOD_KLAS_GRUPY"})})
 * @ORM\Entity
 */
class KlasyfikatorTabela
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TABELI", type="string", length=9, nullable=false)
     */
    private $idTabeli;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_SERWER", type="string", length=50, nullable=false)
     */
    private $nazwaSerwer;

    /**
     * @var string
     *
     * @ORM\Column(name="ATRYBUTKLUCZA1", type="string", length=50, nullable=false)
     */
    private $atrybutklucza1;

    /**
     * @var string
     *
     * @ORM\Column(name="ATRYBUTKLUCZA2", type="string", length=50, nullable=false)
     */
    private $atrybutklucza2;

    /**
     * @var string
     *
     * @ORM\Column(name="TABELA_OK", type="string", length=1, nullable=true)
     */
    private $tabelaOk = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_NADRZEDNEGO", type="string", length=50, nullable=true)
     */
    private $nazwaNadrzednego = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DANYCH_NADRZEDNEGO", type="string", length=20, nullable=true)
     */
    private $typDanychNadrzednego;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROZMIAR_NADRZEDNEGO", type="integer", nullable=true)
     */
    private $rozmiarNadrzednego;

    /**
     * @var string
     *
     * @ORM\Column(name="SKROT_KLAWISZOWY", type="string", length=30, nullable=true)
     */
    private $skrotKlawiszowy;

    /**
     * @var integer
     *
     * @ORM\Column(name="SKROT_KLAWISZOWY_KOD", type="integer", nullable=true)
     */
    private $skrotKlawiszowyKod;

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_ID_SESJI", type="string", length=1, nullable=true)
     */
    private $czyIdSesji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_SLEDZENIE_ZMIAN", type="string", length=1, nullable=true)
     */
    private $czySledzenieZmian = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="UKLAD", type="smallint", nullable=true)
     */
    private $uklad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR_GLO_DATY", type="string", length=1, nullable=true)
     */
    private $filtrGloDaty = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR_WLASNY", type="string", length=500, nullable=true)
     */
    private $filtrWlasny = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NIEWIDOCZNA", type="string", length=1, nullable=false)
     */
    private $niewidoczna = '0';

    /**
     * @var \WfMagConnectionBundle\Entity\KlasyfikatorGrupa
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\KlasyfikatorGrupa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="KOD_KLAS_GRUPY", referencedColumnName="KOD_KLAS_GRUPY")
     * })
     */
    private $kodKlasGrupy;


}

