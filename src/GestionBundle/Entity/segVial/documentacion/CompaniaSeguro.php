<?php

namespace GestionBundle\Entity\segVial\documentacion;

use GestionBundle\Entity\Repository\Entity\segVial\documentacion\CompaniaSeguroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="gest_docum_comp_seguro")
 * @ORM\Entity(repositoryClass=CompaniaSeguroRepository::class)
 */

class CompaniaSeguro extends ProveedorExterno
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cdigoSsn;

    public function getCdigoSsn(): ?string
    {
        return $this->cdigoSsn;
    }

    public function setCdigoSsn(string $cdigoSsn): self
    {
        $this->cdigoSsn = $cdigoSsn;

        return $this;
    }
}
