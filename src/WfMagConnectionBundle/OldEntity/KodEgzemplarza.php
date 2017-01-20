<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KodEgzemplarza
 *
 * @ORM\Table(name="KOD_EGZEMPLARZA", indexes={@ORM\Index(name="IND_KODEGZ_POZ_ZAM", columns={"ID_POZYCJI_ZAMOWIENIA", "KOD_EGZEMPLARZA"}), @ORM\Index(name="IND_KODGEZ_POZDOKMAG", columns={"ID_POZYCJI_DOK_MAG", "KOD_EGZEMPLARZA"}), @ORM\Index(name="IND_KODGEZ_POZ_SADU", columns={"ID_POZYCJI_SADU", "KOD_EGZEMPLARZA"})})
 * @ORM\Entity
 */
class KodEgzemplarza
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KODU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKodu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_EGZEMPLARZA", type="string", length=100, nullable=true)
     */
    private $kodEgzemplarza;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_EGZEMPLARZA_KOPIA", type="string", length=100, nullable=true)
     */
    private $kodEgzemplarzaKopia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_ZAMOWIENIA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPozycjiZamowienia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_DOK_MAG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPozycjiDokMag;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_SADU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPozycjiSadu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_ZLECENIA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPozycjiZlecenia;


}

