<?php


class HorlogeBerlin
{
    public function simpleMinutes(string $nbMinutes) : string{
        if($nbMinutes === "1") return "YXXX";
        if($nbMinutes === "2") return "YYXX";
        return "XXXX";
    }
}