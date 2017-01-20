<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmailSzablonyOperacje
 *
 * @ORM\Table(name="ZD_EMAIL_SZABLONY_OPERACJE", indexes={@ORM\Index(name="ZD_EMAIL_SZABLONY_OPERACJE_ID_SZABLONU", columns={"ID_SZABLONU"})})
 * @ORM\Entity
 */
class ZdEmailSzablonyOperacje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_SZABLONU", type="integer", nullable=true)
     */
    private $idSzablonu;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROGRAMU", type="integer", nullable=false)
     */
    private $idProgramu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_OPERACJI", type="string", length=30, nullable=false)
     */
    private $kodOperacji;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=false)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_KONFIGURACJI", type="integer", nullable=true)
     */
    private $idKonfiguracji;


}

