<?php

// PHP redirect, som viderestiller til hjem.php - Login siden. Og giver alert om at man er logget ud.
echo "<script>
alert('Du er nu logget ud');
window.location.href='hjem.php';
</script>";


// Hvis sessionen bliver benyttet skal den gå nedenstående igennem.
session_start();

// Slet alt info fra sessionen.
$_SESSION = array();

// Hvis brugeren vælger at logge ud og slette sessionen skal browseren også slette Cookien.
// Note: Dette vil slette sessionen og ikke kun dataen.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Sletter sessionen.
session_destroy();
?>


