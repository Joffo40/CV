<?php

// submit_contact.php

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);




            $filename = 'rep.txt';
            $written = 100;
              //On récupère le contenu du fichier
            $fwrite = fopen($filename, 'a+');
//            $texte = file_get_contents($filename);
            
            //On ajoute notre nouveau texte à l'ancien //
            $texte .= "<br>" . "<i>" . $pseudo. "</i>" . "=>" .$message . "<br>";
                        
            //On écrit tout le texte dans notre fichier
            fwrite($fwrite,$texte);
            fclose($fwrite) ;

?>



<script>    
        
       /* alert ('Message bien reçu !'); */
        window.location.href = "./index.php";

</script>}/*


