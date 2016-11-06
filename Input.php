<?php

class Input
{
    protected $inputs = [
        'get' => [],
        'post' => []
    ];

    public static function createFromGlobals()
    {
        return new static(['get' => $_GET, 'post' => $_POST]);
    }

    public function __construct($inputs = [])
    {
        foreach($this->inputs as $key => $input) {
            if(isset($inputs[$key])) {
                $this->inputs[$key] = $inputs[$key];
            }
        }
    }

    public function get($key)
    {
        $result = null;

        if(isset($this->inputs['get'][$key])) {
            $result = $this-inputs['get'][$key];
        }

        return $result;
    }
}