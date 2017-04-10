<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Season extends Model
{
    private $number;
    private $name;
    private $date;
    private $map;

    private $databaseVersion;

    /**
     * Get the value of Number
     *
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of Number
     *
     * @param mixed number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
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
     * Get the value of Date
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of Date
     *
     * @param mixed date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of Map
     *
     * @return mixed
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set the value of Map
     *
     * @param mixed map
     *
     * @return self
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get the value of Database Version
     *
     * @return mixed
     */
    public function getDatabaseVersion()
    {
        return $this->databaseVersion;
    }

    /**
     * Set the value of Database Version
     *
     * @param mixed databaseVersion
     *
     * @return self
     */
    public function setDatabaseVersion($databaseVersion)
    {
        $this->databaseVersion = $databaseVersion;

        return $this;
    }

}
