

<?php
/**
 * Created by PhpStorm.
 * User: Dilip
 * Date: 2/13/2019
 * Time: 6:56 PM
 */

$parsedFile;
$myfile;

parse::commaParse("sample.csv");
createHTML::table();

//read::fileRead($parsedFile);

class main {

}

class read{

    static public function fileRead($myfile)
    {
        $myfile = fopen("sample.csv", "r");

        ob_start();
        echo fread($myfile, filesize("sample.csv"));
        $parsedFile = ob_get_contents();
        ob_end_clean();

        fclose($myfile);
        return $parsedFile;
    }
}

class parse{

    static public function commaParse($myfile)
    {
        $myfile = fopen($myfile, "r");

       // while(!feof($myfile)) {
       //   echo print_r($row[] = fgetcsv($myfile,','));
       // }
       // fclose($myfile);
       // return $row;

        $file = fopen($myfile, 'r');
        while (($row = fgetcsv($myfile)) !== FALSE) {
            print_r($row);
        }
        fclose($file);
    }
}

class store{

    static public function dataStore(){}
}

class createHTML
{
    static public function table(){

        $i = 0;

        echo '<table border="1">';
        while($i < 70){
            if($i%7==0){
                echo "<tr>".PHP_EOL;
            }
            echo "<td>".$i."</td>", PHP_EOL;
            $i++;
            if($i%7==0){
                echo "</tr>".PHP_EOL;
            }
        }
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Demo
    </title>
</head>
<body>

</body>
</html>

