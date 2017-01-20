<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmailObiekt
 *
 * @ORM\Table(name="ZD_EMAIL_OBIEKT", indexes={@ORM\Index(name="ZD_EMAIL_OBIEKT_ID_EMAIL", columns={"Id_Email"}), @ORM\Index(name="ZD_EMAIL_OBIEKT_KONTEKST_ID_PROG_ID_OB", columns={"Kontekst", "Id_Programu", "Id_obiektu"})})
 * @ORM\Entity
 */
class ZdEmailObiekt
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
     * @ORM\Column(name="Id_Email", type="integer", nullable=false)
     */
    private $idEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="Kontekst", type="string", length=50, nullable=true)
     */
    private $kontekst;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Programu", type="integer", nullable=true)
     */
    private $idProgramu;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_obiektu", type="integer", nullable=true)
     */
    private $idObiektu;


}

