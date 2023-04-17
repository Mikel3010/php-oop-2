<?php

class Product{
    protected $name;
    protected $price;
    protected $image;

    public function __construct($name,$price,$image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImage(){
        return $this->image;
    }
}

class DogProduct extends Product{
    protected $size;
    public function __construct($name,$price,$image,$size)
    {
        parent::__construct($name,$price,$image);
        $this->size = $size;
    }
    public function getSize(){
        return $this->size;
    }
}

class CatProduct extends Product{
    protected $type;
    public function __construct($name,$price,$image,$type)
    {
        parent::__construct($name,$price,$image);
        $this->type = $type;
    }
    public function getType(){
        return $this->type;
    }
}

class FishProduct extends Product{
    protected $waterType;
    public function __construct($name,$price,$image,$waterType)
    {
        parent::__construct($name,$price,$image);
        $this->waterType = $waterType;
    }
    public function getWaterType(){
        return $this->waterType;
    }
}