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
    <form action="bearbeitet" method="POST">
        <h1 class="welcome">Kredite bearbeiten</h1>
        <fieldset><legend><b>Bearbeiten</b></legend><br>
            <label for="idnumber">Id:<br></label>
            <select name="idnumber" name="idnumber">
                <?= $this->getid() ?>
            </select><br>
            <label for="kundenname">Name:<br></label>
            <input type="text" name="kundenname" id="kundenname"><br>
            <label for="phone">Telefon:<br></label>
            <input type="number" name="phone" id="phone" required="required"><br>
            <label for="email">Email:<br></label>
            <input type="email" name="email" id="email" required="required"><br>
            <label for="kredit">Kredit-Paket:<br></label>
            <select name="kredit" id="kredit">
                <?= $this->credit() ?>
            </select><br>
            <label for="verleih">Verleih-Status:<br></label>
            <select name="verleih" id="verleih">
                <option value="0">Nicht fertig bezahlt</option>
                <option value="1">Alles bezahlt</option>
            </select><br>
        </fieldset><br>
    <button type="submit">Bearbeiten</button></form><br>
    <form action="home"><button type="submit" id="zu">Zurück</button></form><br>
</div>
<script src="public/js/app.js"></script>
</body>
</html>