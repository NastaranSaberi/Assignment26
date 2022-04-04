<?php

    include "database.php";

    session_start();

    $user_choice_id = $_POST["answer"];
    $q_id = $_POST["question_id"];

    $porsesh_ha = $db->query("SELECT * FROM questions");
    $total = $porsesh_ha->num_rows;

    $correct_choice = $db->query("SELECT * FROM answers WHERE question_id = $q_id AND is_true = 1")->fetch_assoc();
    $correct_choice_id = $correct_choice["id"];

    if($user_choice_id == $correct_choice_id)
    {
        $_SESSION["user_score"]++;
        echo"yes";
    }
    else
    {
        //  $_SESSION["user_score"]--;
       // echo"no";
    }

    $q_id++;

    if($q_id > $total)
    {
       header("Location: final.php");
    }
    else
    {
        header("Location: question.php?x=$q_id ");
    }

?>