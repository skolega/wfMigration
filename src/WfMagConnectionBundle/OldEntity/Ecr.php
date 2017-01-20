<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecr
 *
 * @ORM\Table(name="ECR", indexes={@ORM\Index(name="ECR_IDMAG_IDTYPU", columns={"ID_MAGAZYNU", "ID_TYPU"})})
 * @ORM\Entity
 */
class Ecr
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ECR", type="string", length=9, nullable=false)
     */
    private $idEcr;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=false)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_A", type="string", length=5, nullable=true)
     */
    private $vatA;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_B", type="string", length=5, nullable=true)
     */
    private $vatB;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_C", type="string", length=5, nullable=true)
     */
    private $vatC;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_D", type="string", length=5, nullable=true)
     */
    private $vatD;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_E", type="string", length=5, nullable=true)
     */
    private $vatE;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_F", type="string", length=5, nullable=true)
     */
    private $vatF;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_G", type="string", length=5, nullable=true)
     */
    private $vatG;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_H", type="string", length=5, nullable=true)
     */
    private $vatH;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_ECR", type="string", length=9, nullable=true)
     */
    private $noEcr;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_MASTER", type="string", length=9, nullable=true)
     */
    private $noMaster;

    /**
     * @var string
     *
     * @ORM\Column(name="EPROM", type="string", length=9, nullable=true)
     */
    private $eprom;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGS", type="string", length=9, nullable=true)
     */
    private $flags;

    /**
     * @var string
     *
     * @ORM\Column(name="COM", type="string", length=9, nullable=true)
     */
    private $com;

    /**
     * @var string
     *
     * @ORM\Column(name="BAUD", type="string", length=9, nullable=true)
     */
    private $baud;

    /**
     * @var string
     *
     * @ORM\Column(name="REPEAT", type="string", length=9, nullable=true)
     */
    private $repeat;

    /**
     * @var string
     *
     * @ORM\Column(name="TIMEOUT", type="string", length=9, nullable=true)
     */
    private $timeout;

    /**
     * @var string
     *
     * @ORM\Column(name="MAXPLU", type="string", length=9, nullable=true)
     */
    private $maxplu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KOMPUTERA", type="string", length=100, nullable=true)
     */
    private $nazwaKomputera;

    /**
     * @var string
     *
     * @ORM\Column(name="MUX", type="string", length=9, nullable=true)
     */
    private $mux;

    /**
     * @var string
     *
     * @ORM\Column(name="CHANNEL", type="string", length=9, nullable=true)
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="MODEM", type="string", length=9, nullable=true)
     */
    private $modem;

    /**
     * @var string
     *
     * @ORM\Column(name="F_P1", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $fP1;

    /**
     * @var string
     *
     * @ORM\Column(name="F_P2", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $fP2;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_1", type="string", length=64, nullable=true)
     */
    private $line1;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_2", type="string", length=64, nullable=true)
     */
    private $line2;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_3", type="string", length=64, nullable=true)
     */
    private $line3;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_4", type="string", length=64, nullable=true)
     */
    private $line4;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_5", type="string", length=64, nullable=true)
     */
    private $line5;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_6", type="string", length=64, nullable=true)
     */
    private $line6;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_7", type="string", length=64, nullable=true)
     */
    private $line7;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_8", type="string", length=64, nullable=true)
     */
    private $line8;

    /**
     * @var string
     *
     * @ORM\Column(name="LINE_9", type="string", length=64, nullable=true)
     */
    private $line9;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_IP", type="string", length=100, nullable=true)
     */
    private $adresIp;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_SERYJNY", type="string", length=64, nullable=true)
     */
    private $nrSeryjny;

    /**
     * @var string
     *
     * @ORM\Column(name="DYN_IP_HOST", type="string", length=256, nullable=true)
     */
    private $dynIpHost;


}

