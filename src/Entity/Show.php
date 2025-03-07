<?php

namespace App\Entity;

use App\Repository\ShowRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ShowRepository::class)]
#[ORM\Table(name: '`show`')]
    
class Show
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numShow = null;

    #[ORM\Column]
    private ?int $NbrSeat = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Dateshow = null;

    #[ORM\ManyToOne]
    private ?TheatrePlay $relation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumShow(): ?int
    {
        return $this->numShow;
    }

    public function setNumShow(int $numShow): static
    {
        $this->numShow = $numShow;

        return $this;
    }

    public function getNbrSeat(): ?int
    {
        return $this->NbrSeat;
    }

    public function setNbrSeat(int $NbrSeat): static
    {
        $this->NbrSeat = $NbrSeat;

        return $this;
    }

    public function getDateshow(): ?\DateTimeInterface
    {
        return $this->Dateshow;
    }

    public function setDateshow(\DateTimeInterface $Dateshow): static
    {
        $this->Dateshow = $Dateshow;

        return $this;
    }

    public function getRelation(): ?TheatrePlay
    {
        return $this->relation;
    }

    public function setRelation(?TheatrePlay $relation): static
    {
        $this->relation = $relation;

        return $this;
    }
}
