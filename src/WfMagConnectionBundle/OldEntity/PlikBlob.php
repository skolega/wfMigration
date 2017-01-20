<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlikBlob
 *
 * @ORM\Table(name="PLIK_BLOB", indexes={@ORM\Index(name="PO_NAZWIE", columns={"NAZWA_PLIKU", "DATA_IMP", "CZAS_IMP", "ID_BLOBA"}), @ORM\Index(name="PO_DACIE", columns={"DATA_IMP", "CZAS_IMP", "NAZWA_PLIKU", "ID_BLOBA"})})
 * @ORM\Entity
 */
class PlikBlob
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_BLOBA", type="string", length=9, nullable=false)
     */
    private $idBloba;

    /**
     * @var string
     *
     * @ORM\Column(name="PLIK", type="blob", nullable=true)
     */
    private $plik;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_PLIKU", type="string", length=255, nullable=true)
     */
    private $nazwaPliku;

    /**
     * @var string
     *
     * @ORM\Column(name="TABELA", type="string", length=50, nullable=false)
     */
    private $tabela;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_IMP", type="string", length=4, nullable=true)
     */
    private $dataImp;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZAS_IMP", type="integer", nullable=true)
     */
    private $czasImp;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="IMP_OK", type="string", length=1, nullable=true)
     */
    private $impOk;

    /**
     * @var string
     *
     * @ORM\Column(name="BAZA_OK", type="string", length=1, nullable=true)
     */
    private $bazaOk;

    /**
     * @var integer
     *
     * @ORM\Column(name="ILOSC_REK_IMP", type="integer", nullable=true)
     */
    private $iloscRekImp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS0_IMP", type="integer", nullable=true)
     */
    private $status0Imp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS1_IMP", type="integer", nullable=true)
     */
    private $status1Imp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ILOSC_REK_BAZA", type="integer", nullable=true)
     */
    private $iloscRekBaza = '0';


}

