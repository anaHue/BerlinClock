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
        if($nbMinutes >= "60") return "XXXXXXXXXXX";
        if($nbMinutes >= "55") return "YYRYYRYYRYY";
        if($nbMinutes >= "50") return "YYRYYRYYRYX";
        if($nbMinutes >= "45") return "YYRYYRYYRXX";
        if($nbMinutes >= "40") return "YYRYYRYYXXX";
        if($nbMinutes >= "35") return "YYRYYRYXXXX";
        if($nbMinutes >= "30") return "YYRYYRXXXXX";
        if($nbMinutes >= "25") return "YYRYYXXXXXX";
        if($nbMinutes >= "20") return "YYRYXXXXXXX";
        if($nbMinutes >= "15") return "YYRXXXXXXXX";
        if($nbMinutes >= "10") return "YYXXXXXXXXX";
        if($nbMinutes >= "5") return "YXXXXXXXXXX";
        return "XXXXXXXXXXX";
    }

    public function simpleHours(string $nbHours) : string {
        if($nbHours % 5 == "4") return "RRRR";
        if($nbHours % 5 == "3") return "RRRX";
        if($nbHours % 5 == "2") return "RRXX";
        if($nbHours % 5 == "1") return "RXXX";
        return "XXXX";
    }

    public function blockFiveHours(string $nbHours) : string{
        if($nbHours === "20") return "RRRR";
        if($nbHours === "15") return "RRRX";
        if($nbHours === "10") return "RRXX";
        if($nbHours === "5") return "RXXX";
        return "XXXX";
    }
}