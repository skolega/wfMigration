<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupaKontrahenta
 *
 * @ORM\Table(name="GRUPA_KONTRAHENTA", uniqueConstraints={@ORM\UniqueConstraint(name="AK_GK_SEMAFOR_GRUPA_KO", columns={"SEMAFOR", "ID_GRUPY"}), @ORM\UniqueConstraint(name="GRUPA_KONTRAHENTA_NAZWA", columns={"ID_FIRMY", "NAZWA"})}, indexes={@ORM\Index(name="GRUPA_KONTRAHENTA_IDG_IDCENY", columns={"ID_FIRMY", "ID_CENY", "ID_GRUPY"})})
 * @ORM\Entity
 */
class GrupaKontrahenta
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=false)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY", type="string", length=9, nullable=true)
     */
    private $idCeny;

    /**
     * @var string
     *
     * @ORM\Column(name="NARZUT", type="string", length=5, nullable=true)
     */
    private $narzut;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNA", type="string", length=1, nullable=true)
     */
    private $domyslna = '0';


}

