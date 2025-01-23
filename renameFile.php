<?php

    // Caminho da pasta 
    $folder = "";
    $folderEnd = "";

    //Verifica se o caminho existe;
    if(is_dir($folder))
    {
        //começa pelo o indice 2
        foreach(array_slice(scandir($folder),2) as $index => $photoName)
        {
            echo $photoName."<br>";
            echo rename($folder.$photoName, $folderEnd.date("dmY_His_{$index}").".jpg");
        }
    }
