<?php

namespace App;

class Item
{
    /**
     * @return integer
     */
    public function getDescription()
    {
        return $this->getId() . $this->getToken();
    }

    /**
     * @return int
     */
    protected function getId()
    {
        return rand();
    }

    /**
     * @return string
     */
    private function getToken()
    {
        return uniqid();
    }

    /**
     * @param string
     *
     * @return string
     */
    private function getPrefixedToken(string $prefix)
    {
        return uniqid($prefix);
    }
}