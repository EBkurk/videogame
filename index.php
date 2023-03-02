
<?php

    //inclusions
    require_once '_inc/header.php';
    // require_once '_inc/nav.php';
    require_once '_inc/functions.php';

?>

<h1>Home</h1>

<?php

    $games = GetAllGames();
    // Parcours du tableau des jeux
    foreach ($games as $game) {

    echo $game['title']. "<br>";
    echo $game['title']. "<br>";
    echo "<img src='".$game['poster']."' width='100px' height='125px'>" . "<br>";
    echo $game['description'] . "<br>";
    echo $game['release_date'] . "<br>";
    echo "<br>";
}

    //inclusions
    require_once '_inc/footer.php';

?>