<!DOCTYPE html>
<html>
    <head>
        <title>View team</title>
        <h1>View team page</h1>
    </head>
    <body>
        <form action="../index.php">
            <button>Home page</button>
        </form>
        <br>

        <?php require "../scheme/team_table_scheme.php"; ?>

        <?php if($message !== ""){echo($message);} ?>
    </body>
</html>