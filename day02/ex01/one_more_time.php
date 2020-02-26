#!/usr/bin/php
<?php
/*
    Days of the week
    Monday      - Lundi
    Tuesday     - Mardi
    Wednesday   - Mercredi
    Thursday    - Jeudi
    Friday      - Vendredi
    Saturday    - Samedi
    Sunday      - Dimanche

    Months of the year
    January     - Janvier
    February    - Fevrier
    March       - Mars
    April       - Avril
    May         - Mai
    June        - Juin
    July        - Juillet
    August      - Aout
    September   - Septembre
    October     - Octobre
    November    - Novembre
    December    - Decembre

    References:
    https://www.w3schools.com/php/func_string_ucfirst.asp
    https://www.epochconverter.com/
    https://www.geeksforgeeks.org/php-checkdate-function/
    https://stackoverflow.com/questions/1936237/php-convert-date-into-seconds
    https://stackoverflow.com/questions/4834202/convert-time-in-hhmmss-format-to-seconds-only
*/

function is_day_of_week_valid($day)
{
    $day_array = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    $number_of_days = 7;
    $i = 0;
    while($i < $number_of_days)
        if(strcmp($day_array[$i++], ucfirst($day)) == 0)
            return(true);
    return(false);
}

function is_month_of_year_valid($month)
{
    $month_array = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
    $number_of_months = 12;
    $i = 0;
    while($i < $number_of_months)
        if(strcmp($month_array[$i++], ucfirst($month)) == 0)
            return(true);
    return(false);
}

function get_month($month)
{
    $month_array = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
    $number_of_months = 12;
    $i = 0;
    while($i < $number_of_months)
        if(strcmp($month_array[$i++], ucfirst($month)) == 0)
            return($i);
    return(0);
}

function is_time_valid($time)
{
    if($time[2] != ':' || $time[5] != ':')
        return(false);
    if(strlen($time) != 8)
        return(false);
    $time_array = explode(":", $time);
    $hour = $time_array[0];
    $minute = $time_array[1];
    $second = $time_array[2];
    if($hour < 0 || $hour > 24)
        return(false);
    if($minute < 0 || $minute > 60)
        return(false);
    if($second < 0 || $second > 60)
        return(false);
    if($hour == 24 && $minute != 0 && $second != 0)
        return(false);
    return(true);
}

function is_info_valid($str_array)
{
    if(count($str_array) != 5)
        return(false);
    $day = $str_array[0];
    $date = $str_array[1];
    $month = $str_array[2];
    $year = $str_array[3];
    $time = $str_array[4];
    if(is_day_of_week_valid($day) == false)
        return(false);
    if(is_month_of_year_valid($month) == false)
        return(false);
    if(checkdate(get_month($month), $date, $year) == false)
        return(false);
    if($year < 1970)
        return(false);
    if(is_time_valid($time) == false)
        return(false);
    return(true);
}

function convert_military_time_to_seconds($military_time)
{
    $time_array = explode(":", $military_time);
    $hour = $time_array[0];
    $minute = $time_array[1];
    $second = $time_array[2];
    $time_in_seconds = ($hour * 3600) + ($minute * 60) + ($second);
    return($time_in_seconds);
}

function convert_date_array_to_date_string($date_array)
{
    $date = $date_array[1];
    $month = $date_array[2];
    $year = $date_array[3];
    $year_month_date_string = $year."-".get_month($month)."-".$date;
    return($year_month_date_string);
}
/*
    ------main------
*/
    if($argc != 2)
        return(0);
    $str_array = explode(" ", $argv[1]);
    if(is_info_valid($str_array) == false)
    {
        echo("Wrong Format\n");
        return(0);
    }
    $year_month_date_string = convert_date_array_to_date_string($str_array);
    $second = convert_military_time_to_seconds($str_array[4]);
    $timestamp = strtotime($year_month_date_string) + $second - 3600;
    echo ($timestamp)."\n";
?>