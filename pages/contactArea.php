<?php
    date_default_timezone_set('America/Sao_Paulo');
    echo "Lista de mensagens do ". $_SESSION["login"]. "</br>";
    echo "<a href=\"./closeSession.php\">Sair</a></br>";
    if (isset($_POST['messageEnvia'])){
        $username = $_SESSION['login'];
        $message = $_POST['message'];
        echo $message." ".date("H:i:s", strtotime($message));;

    }
    ?>

    <h1>Deixe um recado!</h1>

    <form action="" method="post">
        <input type="hidden" name="messageEnvia">
        <textarea name="message" id="message" rows="5"></textarea>
        <input type="submit" value="Enviar">
    </form>

    <?php


