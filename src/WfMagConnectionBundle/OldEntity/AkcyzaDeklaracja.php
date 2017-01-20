<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AkcyzaDeklaracja
 *
 * @ORM\Table(name="AKCYZA_DEKLARACJA")
 * @ORM\Entity
 */
class AkcyzaDeklaracja
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DEKLARACJI", type="string", length=9, nullable=false)
     */
    private $idDeklaracji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_DEKLARACJI", type="string", length=4, nullable=true)
     */
    private $dataDeklaracji;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROK", type="integer", nullable=true)
     */
    private $rok;

    /**
     * @var integer
     *
     * @ORM\Column(name="MIESIAC", type="integer", nullable=true)
     */
    private $miesiac;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_ZWOLNIENIA", type="string", length=9, nullable=true)
     */
    private $kwotaZwolnienia;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_PODATKU", type="string", length=9, nullable=true)
     */
    private $kwotaPodatku;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_DO_ZAPLATY", type="string", length=9, nullable=true)
     */
    private $kwotaDoZaplaty;


}

