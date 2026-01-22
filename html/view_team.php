<!DOCTYPE html>
<html lang = "en">
    <head>
        <link rel="stylesheet" href="../css/view_team.css">
        <meta charset="UTF-8">
        <title>View team</title>
        <h1 id="title">View team</h1>
        
    </head>
    <body>
        <form action="../index.php">
            <button>Home page</button>
        </form>
        <br>

        <?php echo GenerateTableTeamTable($sql_result) ?>
        <?php if($message !== ""){echo($message);} ?>
    </body>
</html>