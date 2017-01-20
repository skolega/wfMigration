<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmsWysylkaKontaktu
 *
 * @ORM\Table(name="SMS_WYSYLKA_KONTAKTU")
 * @ORM\Entity
 */
class SmsWysylkaKontaktu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SMS_WYSYLKI_KONTAKTU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSmsWysylkiKontaktu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTAKTU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKontaktu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SMS_WYSYLKI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSmsWysylki;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_KONTAKTU", type="string", length=1, nullable=false)
     */
    private $rodzajKontaktu = 'K';


}

