<?php

    function get_size($size){

        $kb_size = $size / 1024;
        $format_size = number_format($kb_size, 2);
        return $format_size;
    }

    $total = count($_FILES['upload']['name']);

    for($n = 0; $n < $total; $n++){

    $path = 'images/'.$_POST['foldername'];
    $size = get_size($_FILES['upload']['size'][$n]);

    if($size < 500){
        
        if(!file_exists($path)){
            mkdir($path, 0777, true);
        }
        
        $temp_file = $_FILES['upload']['tmp_name'][$n];

        if($temp_file != ""){

            $newfilepath = $path.'/'.$_FILES['upload']['name'][$n];

            if(move_uploaded_file($temp_file, $newfilepath)){

                echo "Successfull!!!";

            }
            else{

                echo "Some error messages encountered: ".$_FILES['upload']['error'][$n];
            }
        }



    }else{

        echo "error";

    }
}
    // print_r($_FILES);
?>