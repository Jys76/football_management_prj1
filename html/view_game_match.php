<!DOCTYPE html>
<html>
    <head>
        <title>View game match</title>
        <h1>View game match</h1>
    </head>
    <body>
        <form action="../index.php">
            <button>Home page</button>
        </form>
        <br>
        <?php echo GenerateGameMatchTable($sql_result); ?>
        <?php if($message !== ""){ echo htmlspecialchars($message); } ?>
    </body>
</html>