

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

        while(!feof($myfile)) {
            echo print_r($row[] = fgetcsv($myfile,','));
        }
        fclose($myfile);
    }
}

class store{

    static public function dataStore(){}
}

//class createHTML {

//   static public function openHTML(

//    )
//}



?>
