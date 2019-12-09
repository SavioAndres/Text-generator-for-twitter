<?php

class Phrase {

    public function __construct() {
        return self::phrase();
    }

    public function phrase() {
        $json = self::getJson();
        return self::word($json[0]) . self::word($json[1]) . self::word($json[2]) . self::word($json[3]);
    }

    private function getJson() {
        $json = array();
        $json[] = json_decode(file_get_contents('words/arg1.json'), true);
        $json[] = json_decode(file_get_contents('words/arg2.json'), true);
        $json[] = json_decode(file_get_contents('words/arg3.json'), true);
        $json[] = json_decode(file_get_contents('words/arg4.json'), true);
        return $json;
    }

    private function word($json) {
        $position = rand(0, count($json) - 1);
        return $json[$position];
    }


}