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