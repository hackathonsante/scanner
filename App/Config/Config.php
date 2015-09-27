<?php
namespace App\Config;

class Config {

    static public function getConfig($key = null){

        $config = [
            "kinder" => [
                0 => "service",
                1 => "patient",
                2 => "private",
            ],
        ];

        if ($key != null){
            if (array_key_exists($key, $config))
            {
                return $config[$key];
            }
            return false;
        }
        return $config;
    }
}