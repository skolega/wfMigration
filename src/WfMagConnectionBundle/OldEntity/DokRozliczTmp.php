<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DokRozliczTmp
 *
 * @ORM\Table(name="DOK_ROZLICZ_TMP")
 * @ORM\Entity
 */
class DokRozliczTmp
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_ROZLICZ", type="string", length=9, nullable=false)
     */
    private $idDokRozlicz;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="string", length=9, nullable=false)
     */
    private $idRozrachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokumentuHandlowego = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMOWIENIA", type="string", length=9, nullable=false)
     */
    private $idZamowienia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA", type="string", length=9, nullable=false)
     */
    private $kwota = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=5, nullable=false)
     */
    private $symWal;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=false)
     */
    private $semafor;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=false)
     */
    private $flagaStanu = '0';


}

