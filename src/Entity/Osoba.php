<?php


namespace App\Entity;

use App\Repository\OsobaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OsobaRepository::class)
 */
class Osoba
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prezime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIme(): ?string
    {
        return $this->Ime;
    }

    public function setIme(string $Ime): self
    {
        $this->Ime = $Ime;

        return $this;
    }

    public function getPrezime(): ?string
    {
        return $this->Prezime;
    }

    public function setPrezime(string $Prezime): self
    {
        $this->Prezime = $Prezime;

        return $this;
    }
}
