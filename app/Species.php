<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model{


    private $name;
    private $note;


    function __construct(){

    }

    /**
    * Get the value of Name
    *
    * @return mixed
    */
    public function getName()
    {
        return $this->name;
    }

    /**
    * Set the value of Name
    *
    * @param mixed name
    *
    * @return self
    */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
    * Get the value of Note
    *
    * @return mixed
    */
    public function getNote()
    {
        return $this->note;
    }

    /**
    * Set the value of Note
    *
    * @param mixed note
    *
    * @return self
    */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

}
