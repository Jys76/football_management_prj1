
<!DOCTYPE html>
<html>
    <head>
        <title>Insert team</title>
        <h1>Insert team</h1>
    </head>

    <body>
        <form action="../index.php">
            <button>Home page</button>
        </form>
        <br>
        <form method="post" action="../php/insert_team.php">
            Team name <br>
            <input type="text" name="team_name" placeholder="insert here"><br><br>
            <button type="submit">Insert</button>
        </form>
        <br>
        <p><?php if($message !== ""){echo htmlspecialchars($message);}?></p>
    </body>

</html>