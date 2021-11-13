<?php 
  //public: a propriedade público permite que o valor possa ser alterado de qualquer lugar e qualquer forma;

  //protected: apenas a classe mãe e e suas heranças podem alterar tal valor;
  
  //private: somente a classe mãe pode alterar esse valor.
  
  class Cell {
    public const ATTACHMENT = 'Charging station';
    public const ATTACHMENT2 = 'Headset';

    public $owner;
    public $brand;

    function setOwner($user) {
      $this->owner = $user;
    }

    function setBrand($mark) {
      $this->brand = $mark;
    }

    function owner() {
      return $this->owner;
    }

    function brand() {
      return $this->brand;
    }

    function attachment() {
      return self::ATTACHMENT . "; " . self::ATTACHMENT2;
    }
  }