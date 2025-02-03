<?php

namespace App;

abstract class AbstractPerson
{
    protected $surname;

    /**
     * @param string $surname
     *
     * @return void
     */
    public function __construct(string $surname){
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    abstract protected function getTitle();

    public function getNameAndTitle(){
        return $this->getTitle() . ' ' . $this->surname;
    }
}