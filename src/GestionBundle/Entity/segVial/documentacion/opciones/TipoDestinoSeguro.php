<?php

namespace GestionBundle\Entity\segVial\documentacion\opciones;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * TipoDestinoSeguro
 *
 * @ORM\Table(name="gest_docum_opciones_tipos_destino_seguro")
 * @ORM\Entity
  * @UniqueEntity(
 *     fields={"destino"},
 *     errorPath="destino",
 *     message="Destino existente en la Base de Datos"
 * )
 */
class TipoDestinoSeguro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="destino", type="string", length=255)
     * @Assert\NotNull(message="El campo no puede permanecer en blanco")
     */
    private $destino;

    public function __toString()
    {
        return strtoupper($this->destino);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDestino(): ?string
    {
        return $this->destino;
    }

    public function setDestino(string $destino): self
    {
        $this->destino = $destino;

        return $this;
    }

}
