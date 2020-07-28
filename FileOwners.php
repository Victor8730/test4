<?php

class FileOwners
{
    public static function groupByOwners($files)
    {
        $finalArray = [];
        foreach($files as $key  =>  $value){
            $finalArray[$value][] = $key;
        }
        return $finalArray;
    }
}
$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));