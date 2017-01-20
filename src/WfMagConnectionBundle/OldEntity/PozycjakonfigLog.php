<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozycjakonfigLog
 *
 * @ORM\Table(name="POZYCJAKONFIG_LOG", indexes={@ORM\Index(name="PO_DACIE", columns={"ID_FIRMY", "DATA_I_CZAS"}), @ORM\Index(name="PO_NAZWIE", columns={"ID_FIRMY", "NAZWA_PARAMETRU"}), @ORM\Index(name="PO_UZYTKOWNIKU", columns={"UZYTKOWNIK", "ID_FIRMY"})})
 * @ORM\Entity
 */
class PozycjakonfigLog
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_LOG", type="string", length=9, nullable=false)
     */
    private $idPozycjiLog;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_I_CZAS", type="datetime", nullable=true)
     */
    private $dataICzas;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="UZYTKOWNIK", type="string", length=50, nullable=true)
     */
    private $uzytkownik;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_PARAMETRU", type="string", length=100, nullable=true)
     */
    private $nazwaParametru;

    /**
     * @var string
     *
     * @ORM\Column(name="STARA_WARTOSC", type="string", length=100, nullable=true)
     */
    private $staraWartosc;

    /**
     * @var string
     *
     * @ORM\Column(name="NOWA_WARTOSC", type="string", length=100, nullable=true)
     */
    private $nowaWartosc;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_PARAMETRU", type="string", length=1, nullable=false)
     */
    private $typParametru = 's';


}

