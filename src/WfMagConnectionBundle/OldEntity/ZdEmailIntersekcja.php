<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmailIntersekcja
 *
 * @ORM\Table(name="ZD_EMAIL_INTERSEKCJA", indexes={@ORM\Index(name="ZD_EMAIL_INTERSEKCJA_Id_Email", columns={"Id_Email"}), @ORM\Index(name="ZD_EMAIL_INTERSEKCJA_Id_Adres", columns={"Id_Adres"})})
 * @ORM\Entity
 */
class ZdEmailIntersekcja
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
     * @var integer
     *
     * @ORM\Column(name="Id_Adres", type="integer", nullable=false)
     */
    private $idAdres;

    /**
     * @var string
     *
     * @ORM\Column(name="Pole", type="string", length=9, nullable=false)
     */
    private $pole;


}

