<!DOCTYPE html>
<html>
    <head>
        <title>Insert game match</title>
        <h1>Insert game match</h1>
    </head>
    <body>
        <form action="../index.php">
            <button>Homer page</button>
        </form>
        <br>
        <form action="../php/insert_game_match.php" method="post">
            Data match <br><input type="date" name="data_match"><br><br>
            Team 1 <br><?= GetTeamSelectionTab("team_1_id"); ?><br><br>
            Team 2 <br><?= GetTeamSelectionTab("team_2_id"); ?><br><br>
            Gol team 1 <br><input type="text" name="gol_team_1" placeholder="insert here"><br><br>
            Gol team 2 <br><input type="text" name="gol_team_2" placeholder="insert here"><br><br>
            <button type="submit">Insert</button>
        </form>
        <br>
        
        <?php
            if($message !== ""){
                echo $message;
            }
        ?>
    </body>
</html>