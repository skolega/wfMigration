<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BrDostepFirma
 *
 * @ORM\Table(name="BR_DOSTEP_FIRMA", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_BR_DOSTEP_FIRMA", columns={"ADRES_EMAIL", "ID_FIRMY"})})
 * @ORM\Entity
 */
class BrDostepFirma
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DOSTEPU_FIRMY", type="integer", nullable=false)
     */
    private $idDostepuFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_EMAIL", type="string", length=255, nullable=false)
     */
    private $adresEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy;


}

