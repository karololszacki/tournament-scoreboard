<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GameRepository")
 */
class Game
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $timestamp;

    /**
     * @ORM\Column(type="simple_array")
     */
    private $teams = [];

    /**
     * @ORM\Column(type="simple_array")
     */
    private $scores = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->timestamp;
    }

    public function setTimestamp(\DateTimeInterface $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getTeams(): ?array
    {
        return $this->teams;
    }

    public function setTeams(array $teams): self
    {
        $this->teams = $teams;

        return $this;
    }

    public function getScores(): ?array
    {
        return $this->scores;
    }

    public function setScores(array $scores): self
    {
        $this->scores = $scores;

        return $this;
    }
}
