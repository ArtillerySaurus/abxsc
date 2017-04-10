<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Creature extends Model
{

    private $species;
    private $name;
    private $gender;
    private $status;
    private $levelsWild;
    private $levelsDom;
    private $tamingEff;
    private $imprintingBonus;
    private $owner;
    private $note;
    private $guid;
    private $isBred;
    private $fatherGuid;
    private $motherGuid;
    private $generation;
    private $colors;
    private $growingUntil;
    private $cooldownUntil;
    private $domesticatedAt;
    private $neutered;
    private $mutationCounter;

    function __construct(){

    }

    /**
     * Get the value of Species
     *
     * @return mixed
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set the value of Species
     *
     * @param mixed species
     *
     * @return self
     */
    public function setSpecies($species)
    {
        $this->species = $species;

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
     * Get the value of Gender
     *
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of Gender
     *
     * @param mixed gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of Status
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of Status
     *
     * @param mixed status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of Levels Wild
     *
     * @return mixed
     */
    public function getLevelsWild()
    {
        return $this->levelsWild;
    }

    /**
     * Set the value of Levels Wild
     *
     * @param mixed levelsWild
     *
     * @return self
     */
    public function setLevelsWild($levelsWild)
    {
        $this->levelsWild = $levelsWild;

        return $this;
    }

    /**
     * Get the value of Levels Dom
     *
     * @return mixed
     */
    public function getLevelsDom()
    {
        return $this->levelsDom;
    }

    /**
     * Set the value of Levels Dom
     *
     * @param mixed levelsDom
     *
     * @return self
     */
    public function setLevelsDom($levelsDom)
    {
        $this->levelsDom = $levelsDom;

        return $this;
    }

    /**
     * Get the value of Taming Eff
     *
     * @return mixed
     */
    public function getTamingEff()
    {
        return $this->tamingEff;
    }

    /**
     * Set the value of Taming Eff
     *
     * @param mixed tamingEff
     *
     * @return self
     */
    public function setTamingEff($tamingEff)
    {
        $this->tamingEff = $tamingEff;

        return $this;
    }

    /**
     * Get the value of Imprinting Bonus
     *
     * @return mixed
     */
    public function getImprintingBonus()
    {
        return $this->imprintingBonus;
    }

    /**
     * Set the value of Imprinting Bonus
     *
     * @param mixed imprintingBonus
     *
     * @return self
     */
    public function setImprintingBonus($imprintingBonus)
    {
        $this->imprintingBonus = $imprintingBonus;

        return $this;
    }

    /**
     * Get the value of Owner
     *
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the value of Owner
     *
     * @param mixed owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

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

    /**
     * Get the value of Guid
     *
     * @return mixed
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set the value of Guid
     *
     * @param mixed guid
     *
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get the value of Is Bred
     *
     * @return mixed
     */
    public function getIsBred()
    {
        return $this->isBred;
    }

    /**
     * Set the value of Is Bred
     *
     * @param mixed isBred
     *
     * @return self
     */
    public function setIsBred($isBred)
    {
        $this->isBred = $isBred;

        return $this;
    }

    /**
     * Get the value of Father Guid
     *
     * @return mixed
     */
    public function getFatherGuid()
    {
        return $this->fatherGuid;
    }

    /**
     * Set the value of Father Guid
     *
     * @param mixed fatherGuid
     *
     * @return self
     */
    public function setFatherGuid($fatherGuid)
    {
        $this->fatherGuid = $fatherGuid;

        return $this;
    }

    /**
     * Get the value of Mother Guid
     *
     * @return mixed
     */
    public function getMotherGuid()
    {
        return $this->motherGuid;
    }

    /**
     * Set the value of Mother Guid
     *
     * @param mixed motherGuid
     *
     * @return self
     */
    public function setMotherGuid($motherGuid)
    {
        $this->motherGuid = $motherGuid;

        return $this;
    }

    /**
     * Get the value of Generation
     *
     * @return mixed
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * Set the value of Generation
     *
     * @param mixed generation
     *
     * @return self
     */
    public function setGeneration($generation)
    {
        $this->generation = $generation;

        return $this;
    }

    /**
     * Get the value of Colors
     *
     * @return mixed
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Set the value of Colors
     *
     * @param mixed colors
     *
     * @return self
     */
    public function setColors($colors)
    {
        $this->colors = $colors;

        return $this;
    }

    /**
     * Get the value of Growing Until
     *
     * @return mixed
     */
    public function getGrowingUntil()
    {
        return $this->growingUntil;
    }

    /**
     * Set the value of Growing Until
     *
     * @param mixed growingUntil
     *
     * @return self
     */
    public function setGrowingUntil($growingUntil)
    {
        $this->growingUntil = $growingUntil;

        return $this;
    }

    /**
     * Get the value of Cooldown Until
     *
     * @return mixed
     */
    public function getCooldownUntil()
    {
        return $this->cooldownUntil;
    }

    /**
     * Set the value of Cooldown Until
     *
     * @param mixed cooldownUntil
     *
     * @return self
     */
    public function setCooldownUntil($cooldownUntil)
    {
        $this->cooldownUntil = $cooldownUntil;

        return $this;
    }

    /**
     * Get the value of Domesticated At
     *
     * @return mixed
     */
    public function getDomesticatedAt()
    {
        return $this->domesticatedAt;
    }

    /**
     * Set the value of Domesticated At
     *
     * @param mixed domesticatedAt
     *
     * @return self
     */
    public function setDomesticatedAt($domesticatedAt)
    {
        $this->domesticatedAt = $domesticatedAt;

        return $this;
    }

    /**
     * Get the value of Neutered
     *
     * @return mixed
     */
    public function getNeutered()
    {
        return $this->neutered;
    }

    /**
     * Set the value of Neutered
     *
     * @param mixed neutered
     *
     * @return self
     */
    public function setNeutered($neutered)
    {
        $this->neutered = $neutered;

        return $this;
    }

    /**
     * Get the value of Mutation Counter
     *
     * @return mixed
     */
    public function getMutationCounter()
    {
        return $this->mutationCounter;
    }

    /**
     * Set the value of Mutation Counter
     *
     * @param mixed mutationCounter
     *
     * @return self
     */
    public function setMutationCounter($mutationCounter)
    {
        $this->mutationCounter = $mutationCounter;

        return $this;
    }

}
