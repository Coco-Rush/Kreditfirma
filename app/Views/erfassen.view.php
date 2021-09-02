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
    <form action="erfasst" method="POST">
    <h1 class="welcome">Neuer Kredit</h1>
    <fieldset><legend><b>Persönliche Daten</b></legend>
        <label for="name">Name:<br></label>
        <input type="text" name="name" id="name" required="required"><br>
        <label for="phone">Telefon:<br></label>
        <input type="number" name="phone" id="phone" required="required"><br>
        <label for="email">Email:<br></label>
        <input type="email" name="email" id="email" required="required"><br>
    </fieldset><br>
    <fieldset><legend><b>Kredite</b></legend>
        Welches Kredit-Paket wünschen Sie sich?<br>
        <select name="kredit-package" id="kredit-package">
            <?= $this->credit() ?>
        </select><br>
        Welche Anzahl Rate wünschen Sie sich?<br>
        <select name="anzahl-rate" id="anzahl-rate">
            <option value="1">(1 Rate) 15 Tage bis zur Rückzahlung</option>
            <option value="2">(2 Raten) 30 Tage bis zur Rückzahlung</option>
            <option value="3">(3 Raten) 45 Tage bis zur Rückzahlung</option>
            <option value="4">(4 Raten) 60 Tage bis zur Rückzahlung</option>
            <option value="5">(5 Raten) 75 Tage bis zur Rückzahlung</option>
            <option value="6">(6 Raten) 90 Tage bis zur Rückzahlung</option>
            <option value="7">(7 Raten) 105 Tage bis zur Rückzahlung</option>
            <option value="8">(8 Raten) 120 Tage bis zur Rückzahlung</option>
            <option value="9">(9 Raten) 135 Tage bis zur Rückzahlung</option>
            <option value="10">(10 Raten) 150 Tage bis zur Rückzahlung</option>
        </select><br>
    </fieldset><br>
    <button type="submit">erfassen</button></form><br>
    <form action="home"><button type="submit" id="zu">Zurück</button></form>
</div>
<script src="public/js/app.js"></script>
</body>
</html>