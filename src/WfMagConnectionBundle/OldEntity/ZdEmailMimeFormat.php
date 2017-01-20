<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmailMimeFormat
 *
 * @ORM\Table(name="ZD_EMAIL_MIME_FORMAT", indexes={@ORM\Index(name="ZD_EMAIL_MIME_FORMAT_ID_EMAIL", columns={"ID_EMAIL"})})
 * @ORM\Entity
 */
class ZdEmailMimeFormat
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
     * @ORM\Column(name="ID_EMAIL", type="integer", nullable=false)
     */
    private $idEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL_MIME_FORMAT", type="text", length=-1, nullable=true)
     */
    private $emailMimeFormat;


}

