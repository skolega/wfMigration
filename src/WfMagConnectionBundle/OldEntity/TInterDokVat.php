<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TInterDokVat
 *
 * @ORM\Table(name="T_INTER_DOK_VAT")
 * @ORM\Entity
 */
class TInterDokVat
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_INTER_DOK_VAT", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idInterDokVat;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="string", length=9, nullable=true)
     */
    private $idDokMagazynowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="string", length=9, nullable=true)
     */
    private $idDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_VAT", type="string", length=4, nullable=false)
     */
    private $dataVat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=false)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="NETTO", type="string", length=9, nullable=false)
     */
    private $netto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VAT", type="string", length=9, nullable=false)
     */
    private $vat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NETTO_WAL", type="string", length=9, nullable=false)
     */
    private $nettoWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_WAL", type="string", length=9, nullable=false)
     */
    private $vatWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SPRZEDAZ", type="string", length=1, nullable=false)
     */
    private $sprzedaz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZAKUP", type="string", length=1, nullable=false)
     */
    private $zakup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MODYFIKOWANY", type="string", length=1, nullable=false)
     */
    private $modyfikowany = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MIESIAC", type="smallint", nullable=false)
     */
    private $miesiac = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="KWARTAL", type="smallint", nullable=false)
     */
    private $kwartal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ROK", type="integer", nullable=false)
     */
    private $rok = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_KURS_WAL", type="string", length=4, nullable=false)
     */
    private $dataKursWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL", type="decimal", precision=14, scale=8, nullable=false)
     */
    private $przelicznikWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=false)
     */
    private $symWal = 'PLN';

    /**
     * @var string
     *
     * @ORM\Column(name="BRUTTO_NETTO", type="string", length=10, nullable=false)
     */
    private $bruttoNetto;


}

