<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamRepository")
 */
class Team
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="simple_array")
     */
    private $userList = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserList(): ?array
    {
        return $this->userList;
    }

    public function setUserList(array $userList): self
    {
        $this->userList = $userList;

        return $this;
    }
}
