<?php
    require "../config.php";
    $message = "";
    $sql = "SELECT * FROM team";
    try{
        $sql_result = mysqli_query($conn, $sql);
    }
    catch(mysqli_sql_exception $e){$message = "Query Error: " . $e->GetMessage();}
    
    require "../html/view_team_html.php";