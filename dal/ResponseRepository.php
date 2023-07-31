<?php


require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/dal/Repository.php");



class ResponseRepository extends Repository
{


    private const TABLE_NAME = "responses";

    public function __construct(mysqli $connection)
    {
        parent::__construct($connection, self::TABLE_NAME);
    }


public function get_all_responses_by_Id(string $fieldsAndValues) : void
{
  
    $sqlSelect = $this -> connection -> prepare("Select * FROM ".self::TABLE_NAME." WHERE id = ? ");
        $sqlSelect -> bind_param("i", $fieldsAndValues); 
        $sqlSelect -> execute();
        $res = $sqlSelect -> get_result();
        $result = array();
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $output = new Response();
                $output -> Id = $row["Id"];
                $output -> Username = $row["Username_post"];
                $output -> Email = $row["Email"];
                $output -> Phone = $row["Phone"];
                $output -> Turnover = $row["Annual_turnover"];
                $output -> PropertyCards = $row["Property_cards"];
                $output -> Employe = $row["Employe"];
                $output -> Documents = $row["Documents"];
                $output -> LegalForm = $row["Legal_form"];
                $output -> Business = $row["Business"];
                $output -> Interest = $row["Interest"];
                $output -> DPH = $row["TaxPay"];
                $output -> Info = $row["Info"];
                array_push($result, $output);

            } 
        }
   
        else 
            
            {
                echo "0 results";
            }
    
    
}




}








































if(isset($_POST["submit"]))
{

  

    $Username = $_POST["Username_post"];
    $Email = $_POST["E-mail"];
    $Phone = $_POST["Phone"];
    $Turnover = $_POST["Annual_turnover"];
    $PropertyCards = $_POST["Property_cards"];
    $Employe = $_POST["Employe"];
    $Documents = $_POST["Documents"];
    $LegalForm = $_POST["Legal_form"];
    $Business = $_POST["Business"];
    $Interest = $_POST["Interest"];
    $DPH = $_POST["DPH"];


    


    $sql = "INSERT INTO responses (full_name, email, phone_number,annual_turnover,property_cards,employe,documents,legal_form,scope_of_business,interest,tax_pay,inf,)
    
     VALUES ('$Username', '$Email', '$Phone','$Turnover','$PropertyCards','$Employe','$Documents','$LegalForm','$Business','$Interest','$DPH')";

    if (mysqli_query($conn, $sql)) 
    {
        echo "Data byla úspěšně vložena";
    }
     else
    {
        echo "Chyba: " . mysqli_error($conn);
    }


    }
    



















// class Signer implements ISigner
// {
//     private mysqli $connection;
//     private Crypt $crypt;
//     private const TABLE_NAME = "responsens";

//     public function __construct(mysqli $conn)
//     {
//         $this -> connection = $conn;
//         $this -> crypt = new Crypt();
//     }
//     public function add_user(string $username ,string $email, string $password, string $confirmNewPassword) : void
//     {
//         $sql = "INSERT INTO ".$this -> tableName."(".implode(',',array_keys($fieldsAndValues)).")VALUES('".implode('\',\'', array_values($fieldsAndValues))."');";
//         $sql = self::prepare_query($sql);
//         if(!self::run_query($sql))
//         {
//             throw new Exception("Pridani nove polozky selhalo");
//         }
//         return $this -> connection -> insert_id;

//         }
//     }
// }



// class ResponseRepostiroy extends Repository
// {
//     private const TABLE_NAME = "responses";

//     public function __construct(mysqli $connection)
//     {
//         parent::__construct($connection, self::TABLE_NAME);
//     }

// public function get_responses_by_id(int $Id) : int
// {
//     $sql = $this -> connection -> prepare("SELECT * FROM ".self::TABLE_NAME. " WHERE Id = ? ORDERED BY time_date DESC");
//     $sql -> bind_param("i", $Id);
//     $res = $sql -> get_result();
//     $result = array();



// }



// }



?>