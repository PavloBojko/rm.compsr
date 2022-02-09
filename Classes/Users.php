<?php

namespace Classs;

class Users
{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
        echo "<h1>Hello_{$this->name}</h1>";
    }

}
