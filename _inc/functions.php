<?php 

function isEmail($email) {
    // Utilisation de filter_var pour valider l'adresse e-mail
    $valid = filter_var($email, FILTER_VALIDATE_EMAIL);
    
    // Renvoie true si l'adresse e-mail est valide, false sinon
    return $valid !== false;
}

function isLong($str) {
    // Utilisation de strlen pour obtenir la longueur de la chaîne
    $length = strlen($str);
    
    // Renvoie true si la longueur de la chaîne est supérieure ou égale à 10, false sinon
    return $length >= 10;
}

function processContactForm(){

    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $submissionDate = new DateTime("@$_SERVER[REQUEST_TIME]");
    $formattedDate = $submissionDate->format('Y-m-d H:i:s');

    if(isEmail($email) && islong($subject) && islong($message)){

        echo "Vous vous appelez $firstname $name votre email est ' $email ', vous m'avez contactez au sujet de ' $subject ' en écrivant ' $message ' et vous avez soumis ce formulaire le ' $formattedDate '";

    }

    else{

        echo "Quelque chose n'est pas correct dans votre formulaire, vérifier que le format de votre eamil est correct, et que la longueur des champs 'Subjects' et 'Message' dépasseent 10 caratères";

    }
}

    function dbConnection():PDO
    {
        $connection = new PDO('mysql:host=127.0.0.1; dbname=videogames','root','', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]);

        return $connection;
        
    }


    function GetAllGames(){

        $db = dbConnection();

        $sql = 'SELECT * FROM game';
    
        $ps = $db->query($sql);

        $tableaugames = $ps->fetchAll(PDO::FETCH_ASSOC);
    

        // var_dump($sql);
        // var_dump($ps);
        // var_dump($result);

        return $tableaugames;

    }

    function GetGame($id){

        $db = dbConnection();

        $sql = "SELECT * FROM game WHERE id = $id";
        $ps = $db->query($sql);
        $game = $ps->fetchAll(PDO::FETCH_ASSOC);

        return $game;
    }

    function getRandomGames($count) {
       
        $sql = "SELECT * FROM game ORDER BY RAND() LIMIT $count";
        
        $db = dbConnection();

        // Exécution de la requête
        $ps = $db->query($sql);
        
        // Récupération des données sous forme de tableau associatif
        $randomGames = $ps->fetchAll(PDO::FETCH_ASSOC);
        
        // Retourne le tableau des jeux
        return $randomGames;
    }

    function ProcessLoginForm(){

        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

    }

    function VerifEmailMdp($email,$mdp){

    $db = dbConnection();
    // Requête pour vérifier si l'utilisateur existe dans la base de données
    $sql = "SELECT * FROM admin WHERE email = '$email' AND mdp = '$mdp'";
    $result = $db->query($sql);

    // Vérifier si l'utilisateur existe et renvoyer le résultat
    // if ($result->num_rows > 0) {
    //     // L'utilisateur existe
    //     return true;
    // }

    // else {
    //     return false;
    // }
}

?>