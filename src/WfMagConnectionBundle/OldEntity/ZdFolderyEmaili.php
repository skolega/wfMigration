<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdFolderyEmaili
 *
 * @ORM\Table(name="ZD_FOLDERY_EMAILI", indexes={@ORM\Index(name="ZD_FOLDERY_EMAILI_ID_FOLD_ID_NAD", columns={"Id_Folderu", "Id_Folderu_Nadrzednego"})})
 * @ORM\Entity
 */
class ZdFolderyEmaili
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
     * @ORM\Column(name="Id_Folderu", type="integer", nullable=false)
     */
    private $idFolderu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Folderu_Nadrzednego", type="integer", nullable=true)
     */
    private $idFolderuNadrzednego;

    /**
     * @var string
     *
     * @ORM\Column(name="Nazwa_Folderu", type="string", length=256, nullable=false)
     */
    private $nazwaFolderu;

    /**
     * @var string
     *
     * @ORM\Column(name="Kod", type="string", length=64, nullable=false)
     */
    private $kod;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Firmy", type="integer", nullable=true)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Programu", type="integer", nullable=true)
     */
    private $idProgramu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Uzytkownika", type="integer", nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_Konfiguracji", type="integer", nullable=true)
     */
    private $idKonfiguracji;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Folder_Domyslny", type="boolean", nullable=true)
     */
    private $folderDomyslny;


}

