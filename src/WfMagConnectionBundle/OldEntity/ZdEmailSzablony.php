<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmailSzablony
 *
 * @ORM\Table(name="ZD_EMAIL_SZABLONY", indexes={@ORM\Index(name="ZD_EMAIL_SZABLONY_ID_PROGRAMU", columns={"ID_PROGRAMU"}), @ORM\Index(name="ZD_EMAIL_SZABLONY_ID_KONFIGURACJI", columns={"ID_KONFIGURACJI"})})
 * @ORM\Entity
 */
class ZdEmailSzablony
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_SZABLONU", type="integer", nullable=false)
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
     * @ORM\Column(name="SZABLON", type="text", length=-1, nullable=true)
     */
    private $szablon;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_KONFIGURACJI", type="integer", nullable=true)
     */
    private $idKonfiguracji;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_HTML", type="smallint", nullable=true)
     */
    private $czyHtml = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis = '';


}

