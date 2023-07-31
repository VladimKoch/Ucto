<?php

require_once(__DIR__."/Repository.php");
require_once(__DIR__."/../model/Comment.php");
require_once(__DIR__."/../db/db.php");


class CommentRepository extends Repository
{
    private const TABLE_NAME = "comments";

    public function __construct(mysqli $connection)
    {
        parent::__construct($connection, self::TABLE_NAME);
    }

    public function get_comments_by_user(string $Username) : array
    {
        $sql = $this -> connection -> prepare("Select * FROM ".self::TABLE_NAME." WHERE userId = (SELECT Id FROM Users WHERE Username = ?) ORDER BY date_comment DESC");
        $sql -> bind_param("s", $Username);
        $res = $sql -> get_result();
        $result = array();
        if($res -> num_rows > 0)
        {
            while($row = $res -> fetch_assoc())
            {
                $output = new Comment();
                $output -> IdComment = $row["IdComment"];
                $output -> userId = $row["userId"];
                $output -> dateComment = $row["date_comment"];
                $output -> commentText = $row["comment_text"];
                array_push($result,$output);
            }
        }
        else
        {
            echo "0 result";
        }

        return $result;
    } 
}
?>




