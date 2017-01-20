<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MkZrdanych
 *
 * @ORM\Table(name="MK_ZRDANYCH")
 * @ORM\Entity
 */
class MkZrdanych
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_MK_ZRDANYCH", type="integer", nullable=false)
     */
    private $idMkZrdanych;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FIRMY", type="integer", nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=20, nullable=true)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TYPU_MK_ZRDANYCH", type="integer", nullable=true)
     */
    private $idTypuMkZrdanych;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=50, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_ZADEKRETOWANE", type="smallint", nullable=true)
     */
    private $czyZadekretowane;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_WSPOLNA_BAZA", type="smallint", nullable=true)
     */
    private $czyWspolnaBaza;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOMYSLNE", type="smallint", nullable=true)
     */
    private $domyslne = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AKTYWNY_VIEWS", type="smallint", nullable=true)
     */
    private $aktywnyViews = '0';


}

