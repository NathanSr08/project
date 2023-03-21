<?php

namespace App\Entity;

use App\Repository\InfoClientRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InfoClientRepository::class)
 * @UniqueEntity(fields={"Mail"}, message="There is already an account with this email")
 * @UniqueEntity(fields={"nom_Societe"}, message="La société est deja enregister")
 */
class InfoClient
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_Societe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Num_pro;

    /**
     * @ORM\Column(type="integer")
     */
    private $Cp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ville;

    /**
     * @ORM\Column(type="string")
     */
    private $num_siret;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_adm;

    /**
     * @ORM\Column(type="integer")
     */
    private $count_file;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getNomSociete(): ?string
    {
        return $this->nom_Societe;
    }

    public function setNomSociete(string $nom_Societe): self
    {
        $this->nom_Societe = $nom_Societe;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getNumPro(): ?string
    {
        return $this->Num_pro;
    }

    public function setNumPro(string $Num_pro): self
    {
        $this->Num_pro = $Num_pro;

        return $this;
    }

    public function getCp(): ?int
    {
        return $this->Cp;
    }

    public function setCp(int $Cp): self
    {
        $this->Cp = $Cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getNumSiret(): ?string
    {
        return $this->num_siret;
    }

    public function setNumSiret(string $num_siret): self
    {
        $this->num_siret = $num_siret;

        return $this;
    }

    public function getIdAdm(): ?int
    {
        return $this->id_adm;
    }

    public function setIdAdm(int $id_adm): self
    {
        $this->id_adm = $id_adm;

        return $this;
    }
   

    public function getCountFile(): ?int
    {
        return $this->count_file;
    }

    public function setCountFile(int $count_file): self
    {
        $this->count_file = $count_file;

        return $this;
    }
    public function __toString():string 
    {
        
        return $this->getNom();
        return $this->getCountFile();
    }
    
   
}
