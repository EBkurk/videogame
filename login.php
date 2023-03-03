
<?php

    //inclusions
    require_once '_inc/header.php';
    // require_once '_inc/nav.php';
    require_once '_inc/functions.php';

?>

<h1>Connection</h1>

<form method="post" action="http://localhost:8000/videogames/admin/index.php">
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="password">Mot de passe:</label>
    <input type="password" id="mdp" name="mdp" required>
    <br>
    <input type="submit" value="Connect">
</form>

<?php

    if (isset($_POST['submit'])){

        ProcessLoginForm();

    }

    //inclusions
    require_once '_inc/footer.php';

?>