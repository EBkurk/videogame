<?php

    //inclusions
    require_once '_inc/header.php';
    // require_once '_inc/nav.php';
    require_once '_inc/functions.php';

?>

<h1>Contact</h1>

<form method = "post">
    <p>
        <label>Firstname:</label>
        <input type="text" name = "firstname">
    </p>
    <p>
        <label>Name:</label>
        <input type="text" name = "name">
    </p>
    <p>
        <label>Email:</label>
        <input type="email" name = "email">
    </p>
    <p>
        <label>Subject:</label>
        <input type="text" name = "subject">
    </p>
    <p>
        <label>Message:</label>
        <textarea name = "message"></textarea>
    </p>
    <p>
        <input type="submit" name = "submit">
    </p>
</form>

<?php

if(isset($_POST['submit'])){

    processContactForm();

}

    //inclusions
    require_once '_inc/footer.php';

?>