<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TMomentyPodatkowe
 *
 * @ORM\Table(name="T_MOMENTY_PODATKOWE")
 * @ORM\Entity
 */
class TMomentyPodatkowe
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokMagazynowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="string", length=9, nullable=true)
     */
    private $idDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_VAT", type="string", length=4, nullable=false)
     */
    private $dataVat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_KURS_WAL", type="string", length=4, nullable=false)
     */
    private $dataKursWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL", type="decimal", precision=14, scale=8, nullable=false)
     */
    private $przelicznikWal = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=false)
     */
    private $symWal = 'PLN';


}

