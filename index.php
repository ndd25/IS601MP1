<?php
/**
 * Created by PhpStorm.
 * User: Dilip
 * Date: 2/13/2019
 * Time: 6:56 PM
 */

main::start("sample.csv");


class main {

    static public function start($filename)
    {
        createHTML::table();
    }
}


class parse {

    static public function recordParse($filename)
    {
        $file = fopen($filename,"r");


        while(($row = fgetcsv($file, ',')) !== false){
            $rows[] = $row;
        }

        fclose($file);
        return $rows;
    }
}

class createHTML
{
    static public function table(){

        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\">";
        echo "<table border='1'>";
        echo "<table class=\"table table-dark table-striped\">";

        $array = parse::recordParse("sample.csv");

        for($i = 0; $i < 4; $i++){
            echo "<tr>".PHP_EOL;
            for($j = 0; $j < 4; $j++){
                echo "<td>".$array[$i][$j]."</td>", PHP_EOL;
            }
            echo "</tr>".PHP_EOL;
        }

    }

}
?>
