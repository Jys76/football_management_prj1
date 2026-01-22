<?php
    require "../config.php";

    $message = "";

    $sql = "SELECT t.name_team as team_1, tt.name_team as team_2, gm.gol_team_1, gm.gol_team_2, gm.data_match
        FROM game_match gm
        JOIN team t ON gm.team_1_id = t.id
        JOIN team tt ON gm.team_2_id = tt.id
        ORDER BY t.name_team ASC
    ";
    
    try{
        $sql_result = mysqli_query($conn, $sql);
    }   
    catch(mysqli_slq_exception $e){$message = "Query error: " . $e->GetMessage();}

    function GenerateGameMatchTable($sql_result){
        ob_start();
        ?>
        <table border=1>
            <tr>
                <th>Team 1</th>
                <th>Team 2</th>
                <th>Gol team 1</th>
                <th>Gol team 2</th>
                <th>Data match</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($sql_result)):?>
                <tr>
                    <td><?=htmlspecialchars($row["team_1"])?></td>
                    <td><?=htmlspecialchars($row["team_2"])?></td>
                    <td><?=htmlspecialchars($row["gol_team_1"])?></td>
                    <td><?=htmlspecialchars($row["gol_team_1"])?></td>
                    <td><?=htmlspecialchars($row["data_match"])?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <?php
        return ob_get_clean();
    }
    
    require "../html/view_game_match.php";
?>