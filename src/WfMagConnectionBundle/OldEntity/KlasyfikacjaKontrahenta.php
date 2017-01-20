<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlasyfikacjaKontrahenta
 *
 * @ORM\Table(name="KLASYFIKACJA_KONTRAHENTA", uniqueConstraints={@ORM\UniqueConstraint(name="KLASYF_KONTR_IDFIR_NAZWA", columns={"ID_FIRMY", "NAZWA"})})
 * @ORM\Entity
 */
class KlasyfikacjaKontrahenta
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KLASYFIKACJI", type="string", length=9, nullable=false)
     */
    private $idKlasyfikacji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
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
     * @ORM\Column(name="OPIS", type="string", length=200, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_FK", type="string", length=70, nullable=true)
     */
    private $kontoFk;

    /**
     * @var string
     *
     * @ORM\Column(name="ANALITYKA_KONTRAHENTA", type="string", length=1, nullable=true)
     */
    private $analitykaKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNA", type="string", length=1, nullable=true)
     */
    private $domyslna = '0';


}

