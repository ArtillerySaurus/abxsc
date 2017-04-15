<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tribe extends Model
{
    private $name;
    private $relation;
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
     * Get the value of Relation
     *
     * @return mixed
     */
    public function getRelationTribe()
    {
        return $this->relation;
    }

    /**
     * Set the value of Relation
     *
     * @param mixed relation
     *
     * @return self
     */
    public function setRelationTribe($relation)
    {
        $this->relation = $relation;

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
