<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmailPodpisy
 *
 * @ORM\Table(name="ZD_EMAIL_PODPISY", indexes={@ORM\Index(name="ZD_EMAIL_PODPISY_ID_UZYTKOWNIKA", columns={"Id_Uzytkownika"}), @ORM\Index(name="ZD_EMAIL_PODPISY_ID_PROGRAMU", columns={"Id_Programu"}), @ORM\Index(name="ZD_EMAIL_PODPISY_ID_FIRMY", columns={"Id_Firmy"})})
 * @ORM\Entity
 */
class ZdEmailPodpisy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Uzytkownika", type="integer", nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Programu", type="integer", nullable=false)
     */
    private $idProgramu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Firmy", type="integer", nullable=false)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Konfiguracji", type="integer", nullable=false)
     */
    private $idKonfiguracji;

    /**
     * @var string
     *
     * @ORM\Column(name="Nazwa_Podpisu", type="string", length=255, nullable=false)
     */
    private $nazwaPodpisu;

    /**
     * @var string
     *
     * @ORM\Column(name="Podpis", type="text", length=-1, nullable=false)
     */
    private $podpis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Podpis_Domyslny", type="boolean", nullable=true)
     */
    private $podpisDomyslny;


}

