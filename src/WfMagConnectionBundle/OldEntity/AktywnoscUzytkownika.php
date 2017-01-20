<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AktywnoscUzytkownika
 *
 * @ORM\Table(name="AKTYWNOSC_UZYTKOWNIKA", indexes={@ORM\Index(name="PO_FIRMIE", columns={"ID_FIRMY"}), @ORM\Index(name="PO_MAGAZYNIE", columns={"ID_MAGAZYNU"}), @ORM\Index(name="AKTUZ_IDZAPISU", columns={"ID_ZAPISU"}), @ORM\Index(name="AKTUZ_IDOPIS", columns={"IDENTYFIKATOR_OPISOWY"}), @ORM\Index(name="AKTUZ_IDUZYTK", columns={"ID_UZYTKOWNIKA"}), @ORM\Index(name="AKTUZ_DATAICZAS", columns={"DATAICZAS"}), @ORM\Index(name="AKTUZ_TYP_ZAPISU", columns={"TYP_ZAPISU"})})
 * @ORM\Entity
 */
class AktywnoscUzytkownika
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_AKTYWNOSC", type="string", length=9, nullable=false)
     */
    private $idAktywnosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
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
     * @ORM\Column(name="ID_ZAPISU", type="string", length=9, nullable=false)
     */
    private $idZapisu;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_ZAPISU", type="string", length=10, nullable=true)
     */
    private $typZapisu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_OPERACJI", type="string", length=1, nullable=true)
     */
    private $kodOperacji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATAICZAS", type="datetime", nullable=true)
     */
    private $dataiczas;

    /**
     * @var string
     *
     * @ORM\Column(name="IDENTYFIKATOR_OPISOWY", type="string", length=100, nullable=true)
     */
    private $identyfikatorOpisowy;

    /**
     * @var string
     *
     * @ORM\Column(name="SYSTEM", type="string", length=1, nullable=true)
     */
    private $system = '3';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=true)
     */
    private $opis;


}

