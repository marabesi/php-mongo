<?php

namespace Sokil\Mongo\DocumentTest;

class SomeBehavior extends \Sokil\Mongo\Behavior
{
    public function return42()
    {
        return 42;
    }
    
    public function getOwnerParam($name)
    {
        return $this->getOwner()->get($name);
    }
}