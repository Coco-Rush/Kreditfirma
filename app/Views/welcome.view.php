<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Meine Seite</title>
    <!-- Set base for relative urls to the directory of index.php: -->
    <base href="<?= ROOT_URL ?>/">
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>
    <div class="container">
    
        <h1>Startseite</h1>
        <h3>Kredihay heisst sie herzlich Willkommen</h3><br>
        <fieldset><legend><b>Kredite erfassen</b></legend>
            <p>Wollen sie neue Kredite erfassen? Dann sind sie hier genau richtig!</p>
            <form action="erfassen"><button type="submit" id="erfassen">Kredite erfassen</button></form><br>
        </fieldset>
        <fieldset><legend><b>Kredite bearbeiten</b></legend>
            <p>Wollen sie bestehende Kredite bearbeiten? Dann sind sie hier genau richtig!</p>
            <form action="bearbeiten"><button type="submit" id="bearbeiten">Kredite bearbeiten</button></form><br>
        </fieldset>
        <fieldset><legend><b>Kredite anzeigen</b></legend>
            <p>Wollen sie alle Kredite anschauen? Dann sind sie hier genau richtig!</p>
            <form action="anzeigen"><button type="submit" id="anzeigen">Kredite anzeigen</button></form><br>
        </fieldset>
    </div>

    <!--<script src="public/js/app.js"></script>-->
</body>
</html>
