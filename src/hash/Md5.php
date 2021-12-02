<?php

namespace think\helper\hash;

class Md5
{
    protected $salt = 'qq171787869';

    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : $this->salt;
        return md5( md5($value) . $salt );
    }

    public function check($value, $hashedValue, array $options = [])
    {
        if ( strlen($hashedValue) === 0 ) {
            return false;
        }
        $salt = isset($options['salt']) ? $options['salt'] : $this->salt;
        return md5( md5($value) . $salt ) == $hashedValue;
    }

    public function setSalt($salt)
    {
        $this->salt = (string)$salt;
        return $this;
    }
    
}