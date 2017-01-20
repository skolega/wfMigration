<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdDokumentPodstawowy
 *
 * @ORM\Table(name="ZD_DOKUMENT_PODSTAWOWY", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_ZD_DOKUMENT_PODSTAWOWY", columns={"GUID_DOKUMENTU_PODSTAWOWEGO"})}, indexes={@ORM\Index(name="IDX_FED38019716FCD5B", columns={"ID_RODZAJU_DANYCH_BINARNYCH_DOKUMENTU_PODSTAWOWEGO"}), @ORM\Index(name="IDX_FED3801914749E72", columns={"ID_RODZAJU_DOKUMENTU_PODSTAWOWEGO"}), @ORM\Index(name="IDX_FED380197CE0C01B", columns={"ID_AKCJI_UZYTKOWNIKA_UTWORZENIA"}), @ORM\Index(name="IDX_FED38019AC1A1CDE", columns={"ID_AKCJI_UZYTKOWNIKA_MODYFIKACJI"}), @ORM\Index(name="IDX_FED380193F1E9421", columns={"ID_AKCJI_UZYTKOWNIKA_USUNIECIA"}), @ORM\Index(name="IDX_FED38019E3FDF554", columns={"ID_METODY_PRZECHOWANIA_DANYCH_BINARNYCH_DOKUMENTU_PODSTAWOWEGO"})})
 * @ORM\Entity
 */
class ZdDokumentPodstawowy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DOKUMENTU_PODSTAWOWEGO", type="bigint", nullable=false)
     */
    private $idDokumentuPodstawowego;

    /**
     * @var string
     *
     * @ORM\Column(name="GUID_DOKUMENTU_PODSTAWOWEGO", type="string", length=36, nullable=false)
     */
    private $guidDokumentuPodstawowego;

    /**
     * @var binary
     *
     * @ORM\Column(name="DANE_BINARNE_DOKUMENTU_PODSTAWOWEGO", type="binary", nullable=false)
     */
    private $daneBinarneDokumentuPodstawowego;

    /**
     * @var string
     *
     * @ORM\Column(name="SKROT_DANYCH_BINARNYCH_DOKUMENTU_PODSTAWOWEGO", type="string", length=64, nullable=false)
     */
    private $skrotDanychBinarnychDokumentuPodstawowego;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_PLIKU", type="string", length=256, nullable=false)
     */
    private $nazwaPliku;

    /**
     * @var string
     *
     * @ORM\Column(name="STEMPEL_WERSJI_WIERSZA", type="string", length=8, nullable=false)
     */
    private $stempelWersjiWiersza;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_OBOWIAZYWANIA_BLOKADY", type="datetime", nullable=false)
     */
    private $dataObowiazywaniaBlokady;

    /**
     * @var string
     *
     * @ORM\Column(name="GUID_PROCESU_BLOKADY", type="string", length=36, nullable=true)
     */
    private $guidProcesuBlokady;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_DOKUMENTU", type="string", length=256, nullable=true)
     */
    private $nazwaDokumentu;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdRodzajDanychBinarnych
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdRodzajDanychBinarnych")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_RODZAJU_DANYCH_BINARNYCH_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_RODZAJU_DANYCH_BINARNYCH")
     * })
     */
    private $idRodzajuDanychBinarnychDokumentuPodstawowego;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdRodzajDokumentuPodstawowego
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdRodzajDokumentuPodstawowego")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_RODZAJU_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_RODZAJU_DOKUMENTU_PODSTAWOWEGO")
     * })
     */
    private $idRodzajuDokumentuPodstawowego;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdAkcjaUzytkownika
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdAkcjaUzytkownika")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_AKCJI_UZYTKOWNIKA_UTWORZENIA", referencedColumnName="ID_AKCJI_UZYTKOWNIKA")
     * })
     */
    private $idAkcjiUzytkownikaUtworzenia;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdAkcjaUzytkownika
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdAkcjaUzytkownika")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_AKCJI_UZYTKOWNIKA_MODYFIKACJI", referencedColumnName="ID_AKCJI_UZYTKOWNIKA")
     * })
     */
    private $idAkcjiUzytkownikaModyfikacji;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdAkcjaUzytkownika
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdAkcjaUzytkownika")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_AKCJI_UZYTKOWNIKA_USUNIECIA", referencedColumnName="ID_AKCJI_UZYTKOWNIKA")
     * })
     */
    private $idAkcjiUzytkownikaUsuniecia;

    /**
     * @var \WfMagConnectionBundle\Entity\ZdMetodaPrzechowaniaDanychBinarnych
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\ZdMetodaPrzechowaniaDanychBinarnych")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_METODY_PRZECHOWANIA_DANYCH_BINARNYCH_DOKUMENTU_PODSTAWOWEGO", referencedColumnName="ID_METODY_PRZECHOWANIA_DANYCH_BINARNYCH")
     * })
     */
    private $idMetodyPrzechowaniaDanychBinarnychDokumentuPodstawowego;


}

