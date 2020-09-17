<?php

namespace App\Entity;

use App\Repository\AssociationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AssociationRepository::class)
 */
class Association
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Conducteur::class, cascade={"persist", "remove"})
     */
    private $Conducteur;

    /**
     * @ORM\OneToOne(targetEntity=Vehicule::class, cascade={"persist", "remove"})
     */
    private $Vehicule;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConducteur(): ?Conducteur
    {
        return $this->Conducteur;
    }

    public function setConducteur(?Conducteur $Conducteur): self
    {
        $this->Conducteur = $Conducteur;

        return $this;
    }

    public function getVehicule(): ?Vehicule
    {
        return $this->Vehicule;
    }

    public function setVehicule(?Vehicule $Vehicule): self
    {
        $this->Vehicule = $Vehicule;

        return $this;
    }
}
