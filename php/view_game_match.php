<?php
    require "../config.php";

    $message = "";

    $sql = "SELECT t.name_team as team_1, tt.name_team as team_2, gm.gol_team_1, gm.gol_team_2, gm.data_match
        FROM game_match gm
        JOIN team t ON gm.team_1_id = t.id
        JOIN team tt ON gm.team_2_id = tt.id
        ORDER BY t.name_team ASC";
    
    try{
        $sql_result = mysqli_query($conn, $sql);
    }   
    catch(mysqli_slq_exception $e){$message = "Query error: " . $e->GetMessage();}

    require "../html/view_game_match_html.php";