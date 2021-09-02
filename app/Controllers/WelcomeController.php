<?php

class WelcomeController
{
    private $pdo;

    /**
     * WelcomeController constructor.
     */
    public function __construct()
    {
        try{
            $this->pdo = new PDO('mysql:host=localhost;dbname=DBname','root','',[
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',]);
        } catch (PDOException $e){
            die('Keine Verbindung zur Database:\n'. $e->getMessage());
        }
    }

    public function index()
	{
		require 'app/Views/welcome.view.php';
	}
	public function erfassen(){
	    require 'app/Views/erfassen.view.php';
    }
    public function bearbeiten(){
	    require 'app/Views/bearbeiten.view.php';
    }
    public function anzeigen(){
        require 'app/Views/anzeigen.view.php';
    }
    public function Add(){
        if(isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['kredit-package'])&&isset($_POST['anzahl-rate'])){
            try{
                $name = e(trim($_POST['name']));
                $phone = e(trim($_POST['phone']));
                $mail = e(trim($_POST['email']));
                $rate = $_POST['anzahl-rate'] . ' Raten';
                $datum = date_add(new DateTime(date('Y-m-d H:i:s')),new DateInterval('P'. $_POST['anzahl-rate'] * 15 .'D'))->format('Y-m-d');
                $statement = $this->pdo->prepare('INSERT INTO `kreditdaten` 
                        (Kundenname, Telefon, Email, KreditPaket, AnzahlRate, VerleihStatus, datum) VALUES 
                        (:Kundenname, :Telefon, :Email, :KreditPakete, :AnzahlRate, 0,:datum);');
                $statement->bindParam('Kundenname',$name);
                $statement->bindParam('Telefon',$phone);
                $statement->bindParam('Email',$mail);
                $statement->bindParam('KreditPakete',$_POST['kredit-package']);
                $statement->bindParam('AnzahlRate',$rate);
                $statement->bindParam('datum',$datum);
                $statement->execute();
                $this->index();
            }catch(PDOException$e){
                echo $e->getMessage() . ' fehlercatch';
            }
        }else{
            echo 'werte konnten nicht gesendet werden.';
        }
    }
    public function Update(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['idnumber'])&&isset($_POST['kundenname'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['kredit'])&&isset($_POST['verleih'])){
                try{
                    $id = htmlspecialchars(trim($_POST['idnumber']));
                    $name = htmlspecialchars(trim($_POST['kundenname']));
                    $phone = htmlspecialchars(trim($_POST['phone']));
                    $email = htmlspecialchars(trim($_POST['email']));
                    $statement = $this->pdo->prepare('UPDATE `kreditdaten` SET Kundenname = :kunde , Telefon = :tele , 
                         Email = :email , KreditPaket = :kredit , VerleihStatus = :verleih WHERE Id = :rair');
                    $statement->bindParam('kunde',$name);
                    $statement->bindParam('tele',$phone);
                    $statement->bindParam('email',$email);
                    $statement->bindParam('kredit',$_POST['kredit']);
                    $statement->bindParam('verleih',$_POST['verleih']);
                    $statement->bindParam('rair',$id);
                    $statement->execute();
                    $this->index();
                }catch(PDOException$e){
                    echo $e->getMessage() . ' Rair is watching you';
                }
            }
        }
        require 'app/Views/bearbeiten.view.php';
    }
    public function Select()
    {
        $statement = $this->pdo->prepare('SELECT kreditdaten.Id, kreditdaten.Kundenname, kreditdaten.Telefon,
        kreditdaten.Email, creditpackages.kreditname, kreditdaten.AnzahlRate, kreditdaten.datum 
        FROM `kreditdaten` RIGHT JOIN `creditpackages` ON kreditdaten.KreditPaket = creditpackages.id
        WHERE VerleihStatus = 0 ORDER BY datum ASC');
        $statement->execute();
        echo '<table border="1"><tr><th>Id</th><th>Name</th><th>Telefonnummer</th><th>E-mail Adresse</th><th>Kredit Paket</th><th>Anzahl Raten</th><th>Verleihfrist</th><th>Status</th></tr>';
        foreach($statement as $item){
            echo '<tr><td>'. $item['Id']. '</td><td>' . $item['Kundenname'] .'</td>
<td>' . $item['Telefon'] .'</td><td>' . $item['Email'] .'</td>
<td>' . $item['kreditname'] .'</td><td>' . $item['AnzahlRate'] .'</td>'
            . '<td>'. $item['datum']. '</td>';
            if(date('Y-m-d') < $item['datum']){
                echo '<td>🌞</td>';
            }else {
                echo '<td>⚡</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    public function credit(){
        $statement = $this->pdo->prepare('SELECT id,kreditname FROM `creditpackages`');
        $statement->execute();
        foreach($statement as $item){
            echo '<option value="'. $item['id']. '">'. $item['kreditname']. '</option>';
        }
    }
    public function getid(){
        $statement = $this->pdo->prepare('SELECT id FROM `kreditdaten`');
        $statement->execute();
        foreach($statement as $item){
            echo '<option value="'. $item['id']. '">'. $item['id']. '</option>';
        }
    }
}

