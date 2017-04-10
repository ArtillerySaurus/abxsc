<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Player extends Model{

    private $name;
    private $tribe;
    private $level;
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
     * Get the value of Tribe
     *
     * @return mixed
     */
    public function getTribe()
    {
        return $this->tribe;
    }

    /**
     * Set the value of Tribe
     *
     * @param mixed tribe
     *
     * @return self
     */
    public function setTribe($tribe)
    {
        $this->tribe = $tribe;

        return $this;
    }

    /**
     * Get the value of Level
     *
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set the value of Level
     *
     * @param mixed level
     *
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;

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
