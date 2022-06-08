<?php

namespace App\Entity;

use App\Repository\FichierClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FichierClientRepository::class)
 */
class FichierClient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Id_cli;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_demande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_fichier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $path;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fichier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_md5;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getIdCli(): ?int
    {
        return $this->Id_cli;
    }

    public function setIdCli(int $Id_cli): self
    {
        $this->Id_cli = $Id_cli;

        return $this;
    }

    public function getIdDemande(): ?int
    {
        return $this->id_demande;
    }

    public function setIdDemande(int $id_demande): self
    {
        $this->id_demande = $id_demande;

        return $this;
    }

    public function getNomFichier(): ?string
    {
        return $this->nom_fichier;
    }

    public function setNomFichier(string $nom_fichier): self
    {
        $this->nom_fichier = $nom_fichier;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getDateFichier(): ?\DateTimeInterface
    {
        return $this->date_fichier;
    }

    public function setDateFichier(\DateTimeInterface $date_fichier): self
    {
        $this->date_fichier = $date_fichier;

        return $this;
    }

    public function getNameMd5(): ?string
    {
        return $this->name_md5;
    }

    public function setNameMd5(string $name_md5): self
    {
        $this->name_md5 = $name_md5;

        return $this;
    }
    public function __toString()
    {
        return $this->getId();
    }
}
