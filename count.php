<?php

    if(isset($_POST['word'])){
        $recWord = $_POST['word'];
        $totalWord = str_word_count("$recWord");
        echo "$totalWord";
    }


?>