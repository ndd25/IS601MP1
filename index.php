<?php
/**
 * Created by PhpStorm.
 * User: Dilip
 * Date: 2/13/2019
 * Time: 6:56 PM
 */

main::start("sample.csv");

class main {

    static public function start($filename){

        parse::commaParse($filename);
        createHTML::table();
    }
}


class parse{
    static public function commaParse($myfile)
    {
        $file = $myfile;
        $content = file($file);

        $array = array();

        for($i = 0; $i < count($content); $i++) {
            $line = explode(',', $content[$i]);
            for ($j = 0; $j < count($line); $j++) {
                $array[$i][$j + 1] = $line[$j];
            }
        }

        return $array;
    }
}
class store{
    static public function dataStore(){}
}
class createHTML
{
    static public function table(){

        //$array = array(array("#","Name","Title","Salary","Supervisor","Hire Date","Location"),
        //                array("1","Jake Adams","Technician","55000","Robert Morris","01/20/2018","New Jersey"));

        echo "<html>";
        echo "<body>";
        echo "<table border='1'>";

        $array = parse::commaParse("sample.csv");

        print_r($array);


        for($i = 0; $i < 7; $i++){
            echo "<tr>".PHP_EOL;
            for($j = 0; $j < 7; $j++){
                echo "<td>".$array[$i][$j]."</td>", PHP_EOL;
            }
            echo "</tr>".PHP_EOL;

        }
        echo "</table>";

        echo "</body>";
        echo "</html>";
    }
}
?>
