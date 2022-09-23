<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: PlayerRepository::class)]

class Player
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['list_players'])]
    private ?string $firstname = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column]
    #[Groups(['list_players'])]
    private ?int $age = null;

    #[ORM\Column]
    private ?int $resistanceAuxBlessures = null;

    #[ORM\Column]
    private ?int $pourcMaxDomicile = null;

    #[ORM\Column]
    private ?int $caseDomMax = null;

    #[ORM\Column]
    private ?int $valeur = null;

    #[ORM\Column]
    private ?int $valeurRevente = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstname;
    }

    public function setFirstName(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastname;
    }

    public function setLastName(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getResistanceAuxBlessures(): ?int
    {
        return $this->resistanceAuxBlessures;
    }

    public function setResistanceAuxBlessures(int $resistanceAuxBlessures): self
    {
        $this->resistanceAuxBlessures = $resistanceAuxBlessures;

        return $this;
    }

    public function getPourcMaxDomicile(): ?int
    {
        return $this->pourcMaxDomicile;
    }

    public function setPourcMaxDomicile(int $pourcMaxDomicile): self
    {
        $this->pourcMaxDomicile = $pourcMaxDomicile;

        return $this;
    }

    public function getCaseDomMax(): ?int
    {
        return $this->caseDomMax;
    }

    public function setCaseDomMax(int $caseDomMax): self
    {
        $this->caseDomMax = $caseDomMax;

        return $this;
    }

    public function getValeur(): ?int
    {
        return $this->valeur;
    }

    public function setValeur(int $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getValeurRevente(): ?int
    {
        return $this->valeurRevente;
    }

    public function setValeurRevente(int $valeurRevente): self
    {
        $this->valeurRevente = $valeurRevente;

        return $this;
    }


}
