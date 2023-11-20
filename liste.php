<?php
require 'connect.php';


$pdo = new \PDO(DSN, USER, PASS);
//$conn = new mysqli($servername, $username, $password);
// A exécuter afin de tester le contenu de votre table
$table='Commentaires';
$query = "SELECT * FROM Commentaires";
//$statement = $pdo->prepare($query);


//foreach ($conn->query($query) as $row) {
    //print $row['name'] . "\t";
    //print $row['color'] . "\t";
    //print $row['calories'] . "\n";
//}
$statement = $pdo->query($query);
///$commentaires =$statement->execute();



//print $query;

// On veut afficher notre résultat via un tableau associatif (PDO::FETCH_OBJ)

$commentairesobject=$statement->fetchall(PDO::FETCH_OBJ);

//var_dump($commentairesobject);
echo '<br><br>';
foreach($commentairesobject as $commentaire) {

    echo $commentaire->pseudo . ' ' .'<i>'.$commentaire->message.'</i><br><br>';

}





?>
