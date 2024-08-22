<?php
$title = "Acceuil";

ob_start();
?>

<div class="d-flex justify-content-around">
    <h1>Bienvenue sur mon site</h1>
    <form action="/api/users" method="post" class="d-flex">
        <input type="text" name="name">
        <button type="submit">add</button>
    </form>
</div>


<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">HTML</th>
            <th scope="col">PHP base</th>
            <th scope="col">PHP OO</th>
            <th scope="col">SQL</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($users as $user) {
            echo "<tr>";
            echo "<form action='/api/users/edit' method='post'>";
            echo "<input type='hidden' name='name' value='".$user['username']."'>";
            echo "<th scope='row'>".$user['username']."</th>";
            echo "<td> <input type='number' name='html_level' value='".$user['html_level']."'></td>";
            echo "<td> <input name='php_base_level' value='".$user['php_base_level']."'></td>";
            echo "<td> <input name='php_oo_level' value='".$user['php_oo_level']."'></td>";
            echo "<td> <input name='sql_level' value='".$user['sql_level']."'></td>";
            echo "<td><button type='submit'>edit</button></td>";
            echo "</form>";
            echo "<td>";
            echo "<form action='/api/users/delete' method='post'>
                    <input type='hidden' name='name' value='".$user['username']."'>
                    <button type='submit'>delete</button>
                </form>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
require "Views/gabarit.php";
?>