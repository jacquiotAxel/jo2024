
<?php 
// On démarre la session sur cette page
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
     // Ensuite on affiche le contenu de la variable session
     echo "<p class='message'> Bonjour " . htmlspecialchars($_SESSION['email']) . "</p>";
    ?>

    <script type="text/javascript">
        // Rediriger vers index.html après 2 secondes
        setTimeout(function() {
            window.location.href = 'index.html';
        }, 2000);
    </script>
</body>
</html>
