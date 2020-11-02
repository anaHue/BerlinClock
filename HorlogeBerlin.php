<?php


class HorlogeBerlin
{
    public function simpleMinutes(string $nbMinutes) : string{
        if($nbMinutes%5 == "1") return "YXXX";
        if($nbMinutes%5 == "2") return "YYXX";
        if($nbMinutes%5 == "3") return "YYYX";
        if($nbMinutes%5 == "4") return "YYYY";
        return "XXXX";
    }

    public function blockFiveMinutes(string $nbMinutes) : string{
        if($nbMinutes >= "10") return "YYXXXXXXXXX";
        if($nbMinutes >= "5") return "YXXXXXXXXXX";
        return "XXXXXXXXXXX";
    }
}