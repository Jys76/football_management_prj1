<?php
    require "../config.php";

    $message = "";

    if(
        isset($_POST["data_match"]) &&
        isset($_POST["team_1_id"]) && isset($_POST["team_2_id"]) &&
        isset($_POST["gol_team_1"]) && isset($_POST["gol_team_2"])
    ){
        $data_match = $_POST["data_match"];
        $team_1_id = $_POST["team_1_id"];
        $team_2_id = $_POST["team_2_id"];
        $gol_team_1 = $_POST["gol_team_1"];
        $gol_team_2 = $_POST["gol_team_2"];

        if(
            $data_match !== "" && $team_1_id !== "" && $team_2_id !== "" &&
            $gol_team_1 !== "" && $gol_team_2 !== ""
        ){
            $sql = "INSERT INTO game_match (data_match, team_1_id, team_2_id, gol_team_1, gol_team_2)
                    VALUES (?, ?, ?, ?, ?)";
            try{
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "siiii", $data_match, $team_1_id, $team_2_id, $gol_team_1, $gol_team_2);
                mysqli_stmt_execute($stmt);
                $message = "Values inserted";
            }
            catch(mysqli_sql_exception $e){$message = "Insertion error: " . $e->GetMessage();}
        }
        else{
            $message = "You must insert values";
        }
            
    }
    

    function GetTeamSelectionTab($post_name){
        require "../config.php";
        $sql = "SELECT id, name_team FROM team ORDER BY name_team";
        $sql_result_list = [];

        try{
            $sql_result = mysqli_query($conn, $sql);
        }    
        catch(mysqli_sql_exception $e){$message = "GetTeamSelectionTab Error" . $e->GetMessage();}
        
        while($row = mysqli_fetch_assoc($sql_result)){
            $sql_result_list[] = $row;
        }
        
        ob_start();
        ?>
        <select name= <?= $post_name ?>>
            <option value="">-- choose --</option>

            <?php foreach($sql_result_list as $element): ?>
            <option value= <?= $element["id"]; ?> > <?= $element["name_team"]; ?> </option>
            <?php endforeach; ?>
                
        </select>
        <?php
        return ob_get_clean();
    }


    require "../html/insert_game_match.php";
    