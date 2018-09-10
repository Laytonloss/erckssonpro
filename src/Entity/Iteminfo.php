<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IteminfoRepository")
 */
class Iteminfo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * @ORM\Column(type="text", length=250)
    */
    private $itemname;


    /**
    * @ORM\Column(type="text", length=250)
    */
    private $type;


    /**
    * @ORM\Column(type="text")
    */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;
    }

    public function getItemname(): ?string
    {
        return $this->itemname;
    }

    public function setItemname($itemname): self
    {
        $this->itemname = $itemname;
    }


    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType($type): self 
    {
        $this->type = $type;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription($description): self 
    {
        $this->description = $description;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }


}
