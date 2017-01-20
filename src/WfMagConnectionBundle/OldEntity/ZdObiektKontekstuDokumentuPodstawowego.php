<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdObiektKontekstuDokumentuPodstawowego
 *
 * @ORM\Table(name="ZD_OBIEKT_KONTEKSTU_DOKUMENTU_PODSTAWOWEGO", indexes={@ORM\Index(name="IDX_6CCF2AEEC79B1E1", columns={"ID_DOKUMENTU_PODSTAWOWEGO"}), @ORM\Index(name="IDX_6CCF2AEBA46F966", columns={"ID_RODZAJU_OBIEKTU_KONTEKSTU"}), @ORM\Index(name="IDX_6CCF2AE7CE0C01B", columns={"ID_AKCJI_UZYTKOWNIKA_UTWORZENIA"})})
 * @ORM\Entity
 */
class ZdObiektKontekstuDokumentuPodstawowego
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OBIEKTU_KONTEKSTU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idObiektuKontekstu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_OBIEKTU_KONTEKSTU", type="datetime", nullable=false)
     */
    private $dataObiektuKontekstu;

    /**
     * @var string
     *
     * @ORM\Column(name="SYGNATURA_TYPU", type="string", length=32, nullable=true)
     */
    private $sygnaturaTypu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="KOREKTA", type="boolean", nullable=true)
     */
    private $korekta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EFAKTURA", type="boolean", nullable=true)
     */
    private $efaktura;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="OBRAZ_FAKTURY", type="boolean", nullable=true)
     */
    private $obrazFaktury;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdDokumentPodstawowy
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdDokumentPodstawowy")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_DOKUMENTU_PODSTAWOWEGO")
     * })
     */
    private $idDokumentuPodstawowego;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdRodzajObiektuKontekstu
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdRodzajObiektuKontekstu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_RODZAJU_OBIEKTU_KONTEKSTU", referencedColumnName="ID_RODZAJU_OBIEKTU_KONTEKSTU")
     * })
     */
    private $idRodzajuObiektuKontekstu;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdAkcjaUzytkownika
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdAkcjaUzytkownika")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_AKCJI_UZYTKOWNIKA_UTWORZENIA", referencedColumnName="ID_AKCJI_UZYTKOWNIKA")
     * })
     */
    private $idAkcjiUzytkownikaUtworzenia;


}

