<?php
    require "../config.php";
    $message = "";
    $sql = "SELECT id, name_team FROM team";
    try{
        $sql_result = mysqli_query($conn, $sql);
    }
    catch(mysqli_sql_exception $e){$message = "Query Error: " . $e->GetMessage();}

    function GenerateTableTeamTable($sql_result){
        ob_start();
        ?>
        <table border=1>
            <tr>
                <th>Id</th>
                <th>Team name</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($sql_result)):?>
                <tr>
                    <td><?=htmlspecialchars($row["id"])?></td>
                    <td><?=htmlspecialchars($row["name_team"])?></td>
                </tr>
            <?php endwhile?>
        </table>
        <?php
        return ob_get_clean();
    }

    require "../html/view_team.php";
?>