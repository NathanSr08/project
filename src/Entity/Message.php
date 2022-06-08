<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 */
class Message
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
    private $sms;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subject;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_envoyeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_dest;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSms(): ?string
    {
        return $this->sms;
    }

    public function setSms(string $sms): self
    {
        $this->sms = $sms;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getIdEnvoyeur(): ?string
    {
        return $this->id_envoyeur;
    }

    public function setIdEnvoyeur(string $id_envoyeur): self
    {
        $this->id_envoyeur = $id_envoyeur;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIdDest(): ?int
    {
        return $this->id_dest;
    }

    public function setIdDest(int $id_dest): self
    {
        $this->id_dest = $id_dest;

        return $this;
    }

   
}
