<?php

namespace App\Entity\Traits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait TimestampTrait {

    /**
     * @var \DateTime $created_at
     *
     * @ORM\Column(type="datetime")
     */
    private $created_at = null;

    /**
     * @var \DateTime $created_at
     *
     * @ORM\Column(type="datetime")
     */
    private $updated_at = null;


    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->created_at = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updated_at = $updatedAt;
        return $this;
    }
















}