<?php
  abstract class Customer {
    protected $id;
    private $name;
    private $email;
    private $location;

    public function __construct($id, $name, $email, $location) {
      $this->id = $id;
      $this->name = $name;
      $this->email = $email;
      $this->location = $location;
    }

    abstract public function getId();

  }

  

  


  class Subscriber extends Customer {
    private $plan;
    public function __construct($id, $name, $email, $location, $plan) {
      parent::__construct($id, $name, $email, $location);
      $this->plan = $plan;
    }

    public function getId() {
      return $this->id;
    }
  }

  $sub = new Subscriber(1, 'Vlad', 'vlad@gmail.com', 'poznan', 'sub');
  echo $sub->getId();

  class ClassWithStaticProperty {
    public $username;
    public $password;
    public static $password_length = 5;

    public static function getPasswordLength() {
      return self::$password_length;
    }
  }

  echo ClassWithStaticProperty::getPasswordLength();
?>