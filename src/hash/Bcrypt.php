<?php

namespace think\helper\hash;

class Bcrypt
{
    protected $rounds = 10;

    public function make($value, array $options = [])
    {
        $cost = isset($options['rounds']) ? $options['rounds'] : $this->rounds;
        $hash = password_hash($value, PASSWORD_BCRYPT, ['cost' => $cost]);
        if ( $hash === false ) {
            throw new \RuntimeException('Bcrypt hashing not supported.');
        }
        return $hash;
    }

    public function check($value, $hashedValue, array $options = [])
    {
        if ( strlen($hashedValue) === 0 ) {
            return false;
        }
        return password_verify($value, $hashedValue);
    }

    public function setRounds($rounds)
    {
        $this->rounds = (int)$rounds;
        return $this;
    }
    
}