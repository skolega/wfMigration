<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AkcyzaDostawa
 *
 * @ORM\Table(name="AKCYZA_DOSTAWA")
 * @ORM\Entity
 */
class AkcyzaDostawa
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_DOSTAWY", type="string", length=9, nullable=false)
     */
    private $idDokDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DEKLARACJI", type="string", length=9, nullable=true)
     */
    private $idDeklaracji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokMagazynowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="KIERUNEK", type="string", length=1, nullable=true)
     */
    private $kierunek = 'R';

    /**
     * @var string
     *
     * @ORM\Column(name="KOREKTA", type="string", length=1, nullable=true)
     */
    private $korekta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=false)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_AKCYZOWY_DOSTAWCY", type="string", length=30, nullable=false)
     */
    private $nrAkcyzowyDostawcy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_DOSTAWCY", type="string", length=200, nullable=true)
     */
    private $nazwaDostawcy;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_DOSTAWCY", type="string", length=100, nullable=true)
     */
    private $adresDostawcy;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCE_WYSYLKI", type="string", length=100, nullable=true)
     */
    private $miejsceWysylki;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WYSYLKI", type="string", length=4, nullable=true)
     */
    private $dataWysylki;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_AKCYZOWY_ODBIORCY", type="string", length=30, nullable=false)
     */
    private $nrAkcyzowyOdbiorcy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_ODBIORCY", type="string", length=200, nullable=true)
     */
    private $nazwaOdbiorcy;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_ODBIORCY", type="string", length=100, nullable=true)
     */
    private $adresOdbiorcy;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCE_ODBIORU", type="string", length=100, nullable=true)
     */
    private $miejsceOdbioru;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_ODBIORU", type="string", length=4, nullable=true)
     */
    private $dataOdbioru;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="string", length=9, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_PRZEMIESZCZAJACEGO", type="string", length=100, nullable=true)
     */
    private $nazwaPrzemieszczajacego;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_PRZEMIESZCZAJACEGO", type="string", length=100, nullable=true)
     */
    private $adresPrzemieszczajacego;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_FAKTURY", type="string", length=30, nullable=true)
     */
    private $nrFaktury;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_FAKTURY", type="string", length=4, nullable=true)
     */
    private $dataFaktury;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOKMAG", type="string", length=30, nullable=true)
     */
    private $nrDokmag;

    /**
     * @var integer
     *
     * @ORM\Column(name="AUTONUMER", type="integer", nullable=true)
     */
    private $autonumer;


}

