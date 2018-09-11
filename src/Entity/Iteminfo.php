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

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getItemname()
    {
        return $this->itemname;
    }

    public function setItemname(string $itemname)
    {
        $this->itemname = $itemname;
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType(string $type) 
    {
        $this->type = $type;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;

      //  return $this;
    }


}
