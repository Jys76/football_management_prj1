
<!DOCTYPE html>
<html>
    <head>
        <title>Insert team page</title>
        <h1>Insert team page</h1>
    </head>

    <body>
        <form action="../index.php">
            <button>Home page</button>
        </form>
        <br>

        <h3>Insert team section</h3>
        <form method="post" action="../php/insert_team.php">
            Team name <input type="text" name="team_name"><br><br>
            <button type="submit">Insert</button>
        </form>
        <br>
        <p><?php if($message !== ""){echo htmlspecialchars($message);}?></p>
    </body>

</html>