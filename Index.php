<?php
/**
 * Created by PhpStorm.
 * User: mitul
 * Date: 6/21/19
 * Time: 2:40 PM
 */
main::First("info.csv");
class main
{
/*This will collect my functions and display */
    static public function first($filename)
    {
      $records = csv::getfollowing($filename);
      print_r($records);
    }
}
class csv
{
    static public function getfollowing($filename)
    {
        $file = fopen($filename,"r");// this will help me to declare a csv file to reconize in following code

        while(! feof($file))
        {
            $record = fgetcsv($file);
            $records[] = $record;
        }

        fclose($file);
        return($records);//return to main function
    }
}

