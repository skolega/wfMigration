<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WartosciKont
 *
 * @ORM\Table(name="WARTOSCI_KONT")
 * @ORM\Entity
 */
class WartosciKont
{
    /**
     * @var string
     *
     * @ORM\Column(name="NR_KONTA", type="string", length=50, nullable=false)
     */
    private $nrKonta;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_KONTA_SYN", type="smallint", nullable=true)
     */
    private $nrKontaSyn;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_LATA_OBROT", type="string", length=10, nullable=false)
     */
    private $idLataObrot;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=10, nullable=false)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZIOM_ANAL", type="smallint", nullable=true)
     */
    private $poziomAnal;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KONTA", type="string", length=100, nullable=true)
     */
    private $nazwaKonta;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_KONIEC", type="smallint", nullable=true)
     */
    private $czyKoniec = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL_KARTOTEKI", type="string", length=10, nullable=true)
     */
    private $symbolKartoteki;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_AKTYWNE", type="smallint", nullable=false)
     */
    private $czyAktywne = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KARTOTEKI", type="string", length=10, nullable=true)
     */
    private $idKartoteki;


}

