<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TabelaPowiazanZamowien
 *
 * @ORM\Table(name="TABELA_POWIAZAN_ZAMOWIEN", indexes={@ORM\Index(name="TPZ_IDZAMOWIENIA_IDPOZDOKMAG", columns={"ID_ZAMOWIENIA", "ID_POZ_DOK_MAG"}), @ORM\Index(name="TPZ_IDZAM_IDPZZAM", columns={"ID_ZAMOWIENIA", "ID_POZYCJI_ZAMOWIENIA"}), @ORM\Index(name="TPZ_IDZAM_REZEALIZ", columns={"ID_ZAMOWIENIA", "REZ_REALIZ"}), @ORM\Index(name="TPZ_IDPOZZAM_IDPOZDOKMAG", columns={"ID_POZYCJI_ZAMOWIENIA", "ID_POZ_DOK_MAG"}), @ORM\Index(name="TPZ_IDZAMOWIENIA_REZREALIZ_IDPOZDOKMAG", columns={"ID_ZAMOWIENIA", "REZ_REALIZ", "ID_POZ_DOK_MAG"})})
 * @ORM\Entity
 */
class TabelaPowiazanZamowien
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_MAG", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_ZAMOWIENIA", type="string", length=9, nullable=false)
     */
    private $idPozycjiZamowienia;

    /**
     * @var string
     *
     * @ORM\Column(name="ZREALIZOWANO", type="string", length=9, nullable=true)
     */
    private $zrealizowano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZAREZERWOWANO", type="string", length=9, nullable=true)
     */
    private $zarezerwowano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMOWIENIA", type="string", length=9, nullable=true)
     */
    private $idZamowienia;

    /**
     * @var string
     *
     * @ORM\Column(name="REZ_REALIZ", type="string", length=1, nullable=true)
     */
    private $rezRealiz = '1';


}

