<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdHistoriaStatusuImportuDokumentowEdeklaracja
 *
 * @ORM\Table(name="ZD_HISTORIA_STATUSU_IMPORTU_DOKUMENTOW_EDEKLARACJA", indexes={@ORM\Index(name="IDX_2FEC46A27CE0C01B", columns={"ID_AKCJI_UZYTKOWNIKA_UTWORZENIA"})})
 * @ORM\Entity
 */
class ZdHistoriaStatusuImportuDokumentowEdeklaracja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_HISTORII_STATUSU_IMPORTU_DOKUMENTOW_EDEKLARACJA", type="integer", nullable=false)
     */
    private $idHistoriiStatusuImportuDokumentowEdeklaracja;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_MASZYNY", type="string", length=128, nullable=false)
     */
    private $nazwaMaszyny;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_UZYTKOWNIKA_MASZYNY", type="string", length=128, nullable=false)
     */
    private $nazwaUzytkownikaMaszyny;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_DOMENY_UZYTKOWNIKA_MASZYNY", type="string", length=128, nullable=true)
     */
    private $nazwaDomenyUzytkownikaMaszyny;

    /**
     * @var string
     *
     * @ORM\Column(name="LOKALIZACJA_FOLDERU", type="string", length=1024, nullable=true)
     */
    private $lokalizacjaFolderu;

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

