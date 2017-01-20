<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterSchematTypdok
 *
 * @ORM\Table(name="INTER_SCHEMAT_TYPDOK")
 * @ORM\Entity
 */
class InterSchematTypdok
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SCHEMATU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSchematu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=false)
     */
    private $idTypu;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOKUMENT", type="smallint", nullable=false)
     */
    private $dokument;

    /**
     * @var string
     *
     * @ORM\Column(name="FK_KOD_DOKUMENTU", type="string", length=20, nullable=true)
     */
    private $fkKodDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="FK_OPIS_POZYCJI", type="string", length=100, nullable=true)
     */
    private $fkOpisPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DZIENNIKA", type="string", length=9, nullable=true)
     */
    private $idDziennika;


}

