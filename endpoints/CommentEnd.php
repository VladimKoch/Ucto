<?php

if(isset($_POST["operation_type"]))
{
    $commentRepo = new CommentRepository($connection);
    if($_POST["operation_type"] == "create")
    {
        if(isset($_POST["userId"])&&
        isset($_POST["date_comment"])&&
        isset($_POST["comment_text"]))
        {
            $input = array("userId" => $_POST["userId"],
            "date_comment" => $_POST["date_comment"], 
            "comment_text" => $_POST["comment_text"]);
            echo $commentRepo -> insert($input);
        }
   
    }

    else if($_POST["operation_type"] == "update")
    {
        if(isset($_POST["IdComment"]) && isset($_POST["userId"]) && isset($_POST["date_comment"]) && isset($_POST["comment_text"]))
        {
            $condition = "IdComment = ".$_POST["IdComment"];
            $input = array("userId" => $_POST["userId"],
            "date_comment" => $_POST["date_comment"],
            "comment_text"=> $_POST["comment_text"]);
            $commenctRepo -> update($input, $condition);
        }
    }
    
        else if($_POST["operation_type"] == "delete")
        { 
            if(isset($POST["IdComment"]))
            {
                $commentRepo -> delete("IdComment = ".$_POST["IdComment"]);
            }
           
        }
    }





?>