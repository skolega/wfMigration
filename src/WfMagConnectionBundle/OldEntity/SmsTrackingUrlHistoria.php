<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsTrackingUrlHistoria
 *
 * @ORM\Table(name="SMS_TRACKING_URL_HISTORIA")
 * @ORM\Entity
 */
class SmsTrackingUrlHistoria
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
     * @ORM\Column(name="ID_TRACKING_URL", type="integer", nullable=false)
     */
    private $idTrackingUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="ILOSC_WYSLANYCH", type="integer", nullable=true)
     */
    private $iloscWyslanych;

    /**
     * @var integer
     *
     * @ORM\Column(name="ILOSC_KLIKNIETYCH", type="integer", nullable=true)
     */
    private $iloscKliknietych;

    /**
     * @var string
     *
     * @ORM\Column(name="WSPOLCZYNNIK_KONWERSJI", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $wspolczynnikKonwersji;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_CZAS", type="datetime", nullable=true)
     */
    private $dataCzas = 'CURRENT_TIMESTAMP';


}

