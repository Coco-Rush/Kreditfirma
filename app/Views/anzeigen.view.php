<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kredit erfassen</title>
    <!-- Set base for relative urls to the directory of index.php: -->
    <base href="<?= ROOT_URL ?>/">
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>
<div class="container">
    <h1 class="welcome">Kredite</h1><br><br>
    <p>🌞 = Geld ist noch ausgeliehen, aber noch innerhalb der Verleih-Frist.</p>
    <p>⚡ = Geld ist noch ausgeliehen, aber nicht mehr innerhalb der Verleih-First.</p>
    <?php $this->Select(); ?>
    <br><br><form action="home"><button type="submit" id="zu">Zurück</button></form><br>
</div>
<script src="public/js/app.js"></script>
</body>
</html>