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