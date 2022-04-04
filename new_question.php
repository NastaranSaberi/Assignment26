<?php
    include "database.php";
    session_start();

    $question = $_POST["question"];
    $db->query("INSERT INTO questions(text) VALUES('$question')");


    $porsesh_ha = $db->query("SELECT * FROM questions");
    $total = $porsesh_ha->num_rows;
    $question_id =$total;

    $answers = $_POST['answer'];
    $is_true = $_POST["is_true"];


    $number_question= 1;
    $istrue = 0;
    foreach($answers as $answer) {
        if($number_question == $is_true)
        {
            $istrue = 1;
        }   
        if($answer != "")
        {
        $db->query("INSERT INTO answers(text, is_true, question_id) VALUES('$answer', '$istrue', '$question_id')");
        $istrue = 0;
        $number_question++;
        }
            
    }
    

    header("Location: admin.php");
?>