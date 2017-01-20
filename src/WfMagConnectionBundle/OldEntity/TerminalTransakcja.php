<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TerminalTransakcja
 *
 * @ORM\Table(name="TERMINAL_TRANSAKCJA")
 * @ORM\Entity
 */
class TerminalTransakcja
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSAKCJI", type="string", length=9, nullable=false)
     */
    private $idTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU", type="string", length=9, nullable=true)
     */
    private $idDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOK", type="string", length=1, nullable=true)
     */
    private $typDok = '';

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA", type="string", length=9, nullable=false)
     */
    private $kwota;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=5, nullable=false)
     */
    private $symWal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_TRANSAKCJI", type="string", length=50, nullable=false)
     */
    private $kodTransakcji = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TERMINAL_ID", type="string", length=10, nullable=true)
     */
    private $terminalId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_CZAS", type="datetime", nullable=false)
     */
    private $dataCzas = 'CURRENT_TIMESTAMP';


}

