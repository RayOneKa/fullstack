<pre>
<?php

$mysql = new mysqli('localhost', 'root', 'root', 'fullstack');

if ($mysql->connect_error) {
    die($mysql->connect_error);
}

echo 'Успешное соединение с базой<br>';

$query = "SELECT * FROM users";
$res = $mysql->query($query);

?>

<form method="POST" action="add_user.php">
    <input name='name' placeholder="Введите имя">
    <input name='login' placeholder="Введите login">
    <input name='age' placeholder="Введите возраст">
    <button type="submit">Сохранить</button>
</form>

<?php

echo '<table border=1><tbody>';
while ($row = $res->fetch_assoc()) {
    echo "
    <tr >
        <td>
            {$row['name']}
        </td>
        <td>
            {$row['age']}
        </td>    
        <td>
            <form method='POST' action='del_user.php'>
                <input type='hidden' value='{$row['id']}' name='id'>
                <button type='submit'>x</button>
            </form>
        </td>             
    </tr>
    ";
}
echo '</tbody></table>';