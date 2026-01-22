<?php
    require "../config.php";

    $message = "";

    if(isset($_POST["team_name"])){
        $team_name = $_POST["team_name"];
        if($team_name === ""){
            $message = "You must insert values";
        }
        else{
            $sql = "INSERT INTO team (name_team) VALUES (?)";

            try{
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "s", $team_name);
                mysqli_stmt_execute($stmt);
                $message = "Value inserted";
            }
            catch(mysqli_sql_exception $e){$message = "Insertion error" . $e->GetMessage();}
            
        }
    }

    require "../html/insert_team.php";

?>