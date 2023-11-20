<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>CV_J_BONZOM</title>
        <link rel="icon" href="images/fav.jpg" />
</head>
<script>
    function fetchProfileJSON() {

        //const username = 'defunkt';

        const url = "https://api.countapi.xyz/hit/cvjulienbonzom.online/visits?callback=cb";

        fetch(url)

            .then(function(response) {

                return response.json();

            })

            .then(function(profile) {

                const profileHtml = `

        <p><strong>${profile.name}</strong></p>

        <img src="${profile.avatar_url}" />

      `;

                document.querySelector('#github-profile').innerHTML = profileHtml;

            });

    }

</script>



<img src =`compte.php' width="1"/>
    <body>


    <div class="bloc_page">
        
        <div class="bordure"><!-- Bordure esthetique -->
        </div>
        <bodyLast>
        <div class="texte">
            <div class="partie_inf">
                
                <header>    
                    
                        <div class="entete_sup3">
                            <div class="entete_sup2">
                                    <div class="entete">
                                        <div class="nom">Julien BONZOM</div> 
                                        <div class="texte2">
                                            100, avenue de la libération
                                            <br /> 33700 MERIGNAC
                                            <br /> tel: 06.76.11.84.57</div> 

                                        <div class="mail"><a href="mailto:bonzomj@gmail.com">bonzomj@gmail.com</a></div>
                                        <?php
                                        $fp=fopen("comptage.txt","r+");
                                        $nbvisites = fgets($fp,4);
                                        $nbvisites++;
                                        fseek($fp,0);
                                        fputs($fp,$nbvisites);
                                        fclose($fp);
                                        print("$nbvisites visiteurs");?>
                                        <!--<div id="sfc9t1bqqgz5blpftsmeyefdd7yhqw6xem9"></div> <script type="text/javascript" src="https://counter10.optistats.ovh/private/counter.js?c=9t1bqqgz5blpftsmeyefdd7yhqw6xem9&down=async" async></script><noscript><a href="https://www.compteurdevisite.com" ><img src="https://counter10.optistats.ovh/private/compteurdevisite.php?c=9t1bqqgz5blpftsmeyefdd7yhqw6xem9" border="0"></a></noscript>-->
                                    </div> 
                                    
                                    
                                    <div class="fonction">Ingénieur Mécanique/Développeur</div><!-- Titre -->
                            </div>
                            <div class="separation"></div>
                        </div>

                    <a href="images/photo_J_BONZOM_2.jpg" class="fin"><img src="images/photo_J_BONZOM_mini2.jpg" alt="Photo de Julien BONZOM" title="Cliquez pour agrandir" /></a><!--Image photo pouvant etre agrandie--> 

                </header>


                <div class="total">
                <section> <!-- Section -->
                    <div class="base">
                        <div class="competences"><p><h2>Compétences:</h2>
                        <ul>
                            <li><Strong>Languages Informatiques:</Strong> HTML, CSS, PHP, SYMFONY, JAVASCRIPT, GIT, C, ADA, VISUAL BASIC (formation année 2006 et utilisation).</li>
                            <li><Strong>Outils AIRBUS:</Strong> SAP (formation année 2016 et utilisation), ACSA, PSN, SAFE, ISAMI, ASSIST, ASSIST-LINK.</li>
                            <li><Strong>Outils DASSAULT:</Strong> Outils Calcul Dassault (Statique/Fatigue et Tolerance aux dommages), NASGRO, CATIA FE (formation année 2017 et utilisation)</li>
                            <li><Strong>Outils CALCUL/DESIGN:</Strong> PATRAN/NASTRAN, CADLINK (formation année 2006 et utilisation), CADDS 5, CATIAV5, EFFEL, AUTOCAD2000.</li>
                            <li><Strong>Outils OFFICE:</Strong> EXCEL, WORD, POWERPOINT, VISUAL BASIC (formation année 2006 et utilisation).</li>
                            <li><Strong>Langues:</Strong> Anglais (TOEIC Listening & Reading: 825 – 12/2013), Espagnol Scolaire.</li>
                        </ul>
                        
                        </div>
                        
                        <div class="formation"><p><h2>Formation:</h2>
                        
                        <ul>
                            <li><Strong>2023</Strong> Formation POEI (AJC Formation) au Metier de Développeur Embarqué C/C++</li>
                            <li><Strong>2022</Strong> WILDCODESCHOOL de BORDEAUX (formation développeur web Full-Stack).</li>
                            <li><Strong>2001</Strong> Diplôme d’Ingénieur génie Mécanique de l’INSA de TOULOUSE<br />DEA de génie Mécanique (fatigue, matériaux composites,...).</li>
                            <li><Strong>1996</Strong> Baccalauréat Scientifique - spécialité technologie industrielle (Mention AB).</li>

                        </ul>
                        
                        </div>

                        <div class="stages"><p><h2>Stages:</h2>
                        
                        <ul>
                        <li><Strong>03/2001 – 07/2001:</Strong><br />Stage chez PRECIMECA environnement (Fabricant de broyeurs).<br />Avant-projet visant l’implantation d’un ensemble de broyage sur une berce.</li>



                        <li><Strong>07/2000 – 08/2000 :</Strong><br /> Stage au Laboratoire-maquette EADS.<br />Conception CAO sous CADDS de maquettes destinées aux essais en soufflerie.</li>
                        </ul>
                        </div>  
                        <div class="loisirs"><p><h2>Loisirs:</h2>
                        <ul>
                        <li><i>Suivi de cours en ligne (MOOC, OpenClassroom...), sports de montagne, ateliers de musique Jazz.</i></li><br><br>
                        </ul>
                        </div>
                    </div>
                    <div class="espace"></div><!-- espace -->
                    <div class="pro"><h2>Expériences Professionnelles:</h2>
                    <a href="CV-J_BONZOM.pdf"target="_blank"><i><Strong>Curriculum vitae</Strong></i></a>
                    <h3><Strong>Juin 2015- Ingénieur Calcul chez ENGINEERING CONCEPTION MAINTENANCE</Strong><br /><img src="./images/menu.jpg" title="Cliquez pour etendre" id='bouton'/></h3>
                    
                    <div id="cacher">

                        <ul>
                            <li><Strong>09/2021 – 07/2023:</Strong><br />Travaux divers au sein du bureau d'étude ECM de Mérignac.<br /><br />
                            <i>Utilisation de VBA, Patran, Nastran.</i></li> 

                        <br />
                            <li><Strong>04/2018 – 09/2021:</Strong><br />Traitement des réparations Falcon airplanes in-situ DASSAULT Mérignac<br />
                            Contribution à la justification de pièces métalliques et composites en statique et fatigue au travers des méthodologies Dassault.<br /><br />
                            <i>Utilisation des Outils Calcul Dassault, NASGRO, CATIA FE, Ouvrages Références (Peterson, ESDU,...)</i></li> 

                        <br />

                            <li><Strong>09/2016 – 01/2018 :</Strong><br /> Traitement des dérogations A350-900/1000_MLGB en tache 300-350 (tâches calcul) in-situ STELIA Rochefort :<br />

                            Contribution à la justification de pièces métalliques en statique et fatigue au travers des méthodologies développées au sein de l’équipe.<br /><br />
                            <i>Utilisation de SAP, MTS004, M2841, ISAMI.</i><br /></li>    

                        <br />

                            <li><Strong>04/2016 – 08/2016:</Strong><br />  Réalisation des dossiers SRM de la Section S15 de l’A330_NEO pour STELIA :<br /> 
                            Analyse statique des cadres et des panneaux suite aux réparations du type ragréages<br />Rédaction des dossiers SRM.<br /><br /> 
                            <i>Utilisation de ISAMI Express, VBA, </i><br /></li>

                        <br />

                            <li><Strong>06/2015 – 03/2016 :</Strong><br /> Traitement des dérogations S14A en tache 300-350 (tâches calcul) in-situ STELIA Rochefort :<br />

                            Contribution à la justification de pièces métalliques en statique et fatigue au travers des méthodologies développées au sein de l’équipe.<br /><br />
                            <i>Utilisation de SAP, MTS004, M2841, ASSIST, SAFE.</i><br /></li>

                        <br />

                        </ul>

                    </div>
    <script async>

    let bouton = document.getElementById("bouton");
    const cacher = document.getElementById('cacher');
        

    cliquage()

    function cliquage() {         
    if (cacher.style.display == "none") {
        cacher.style.display = "block";
        bouton.src="./images/menu2.jpg";
        bouton.title="Cliquez pour réduire";
        } else {
        cacher.style.display  = "none";
        bouton.src="./images/menu.jpg";
        bouton.title="Cliquez pour étendre";

        }}
    function AdapterDivAResolution() {
    let x_res = screen.width;
    let y_res = screen.height;
    if(x_res < 1024)
    {
    bouton.src="./images/menu2.jpg";
    cacher.style.display = "block";
    cacher.style.visibility="visible";
    }
    }
    AdapterDivAResolution()
    bouton.addEventListener('click',cliquage, false);

    </script>
                    <h3><Strong>Décembre 2009- Ingénieur Calcul chez SEGULA AERONAUTIQUE</Strong><br /><img src="./images/menu.jpg" title="Cliquez pour etendre" id='bouton2'/></h3>
                    
                    <div id="cacher2">
                        <ul>
                            <li><Strong>01/2013-01/2015:</Strong><br />Pré-dimensionnement, Justification trappes A350-1000 pour DAHER-SOCATA:<br />
                            Analyse analytique et FEM de pièces métalliques,<br />Rédaction des dossiers MAT_B et MAT_C,<br />Maillage des pièces métalliques du mécanisme des trappes.<br /><br /><i>Utilisation des Outils Calcul Dassault, NASGRO, CATIA FE, Ouvrages Références (Peterson, ESDU,...)</i></li> 

                        <br />

                            <li><Strong>04/2011 – 12/2012:</Strong><br />Réalisation de la certification de la pointe avant A380 pour DAHER-SOCATA:<br />

                            Calcul analytique Statique et Fatigue de pièces et de fixations de la pointe Avant A380 pour les avions MSN2 et MSN95,<br />Réalisation de dossiers de certification Format AIRBUS,<br />Réalisation d’extraction de charges grâce aux outils PSN AIRBUS,<br />Traitement de Dérogations prenant en compte la nouvelle boucle de charge « A380e ».<br /><br /><i>Utilisation de PATRAN/NASTRAN, MTS004, M2841, ASSIST, SAFE, VBA.</i></li>    

                        <br />

                            <li><Strong>12/2009 - 03/2011:</Strong><br />Traitement des dérogations A380 WP Alenia issues d’Alenia, Saint-Nazaire et Toulouse en tache 300-350 (tâches calcul) in-situ AIRBUS<br /> 
                            Contribution à la justification de pièces métalliques en statique et fatigue au travers des méthodologies développées au sein de l’équipe.<br /><br />
                            <i>Utilisation de SAP, MTS004, M2841, ASSIST, SAFE.</i></li>

                        <br />

                        </ul>
                    </div>

    <script>

    let bouton2= document.getElementById("bouton2");
    const cacher2 = document.getElementById('cacher2');
        
    cliquage();

    function cliquage() {         
    if (cacher2.style.display !== "none") {
        cacher2.style.display  = "none";
        bouton2.src="./images/menu.jpg";
        bouton2.title="Cliquez pour étendre";
        } else {
        cacher2.style.display = "block";
        bouton2.src="./images/menu2.jpg";
        bouton2.title="Cliquez pour réduire";
        }}
    bouton2.addEventListener('click',cliquage, false);

    </script>

                    <h3><Strong>Janvier 2002 - Ingénieur Calcul chez AJILON ENGINEERING</Strong><br /><img src="./images/menu.jpg" title="Cliquez pour etendre" id='bouton3'/></h3>
                    
                    <div id="cacher3">
                        <ul>
                            <li><Strong>01/2008-04/2009:</Strong><br />Justification de l’installation de matériel aéronautique civil (GPS, ADU, TRANSCEIVER,...) sur l’avion C-130 AAF pour SABENA TECHNICS.<br /><br />
                            
                            <i>Utilisation BRUHN, MILITARY HANDBOOK.</i></li> 

                        <br />

                            <li><Strong>05/2005-12/2007:</Strong><br />Justification de la pointe avant A400M pour LABINAL :<br />

                            Calcul analytique de pièces et de fixations de la pointe Avant A400M,<br />Réalisation de dossiers de justification,<br />Réalisation du RF Mapping (statique, fatigue, tolérance aux dommages des Cadres,panneaux, Raidisseurs, lisses puis synthèse des résultats),<br />Traitement de Dérogations prenant en compte la nouvelle boucle de charge « A380e »,<br />Mise à jour géométrique du Modèle Elément Fini.<br /><br />
                            <i>Utilisation MTS004, ASSIST/ASSIST-LINK, ACSA, PSN1Excel, CADLINK, PATRAN, VBA.</i></li>    

                        <br />

                            <li><Strong>05/2003 – 04/2005:</Strong><br />Travaux de dimensionnement réalisés au BE AJILON :<br />Tour de couture A380,<br />Outillages SOCOA, outillages CASA,<br />Antennes FRANCE TELECOM.<br /><br /> 
                            <i>Utilisation Eléments Finis EFFEL</i></li>    
                        
                        <br />


                            <li><Strong>01/2002 – 05/2002:</Strong><br />Certification A340-600 (BAE et STORK FOKKER) pour LABINAL .<br /><br /> 
                            <i>Utilisation MTS004, BRUHN, FOKKER methods.</i></li>    
                        
                        <br /><br /><br />

                        </ul>
                        
                    </div>
    <script>

    let bouton3= document.getElementById("bouton3");
    const cacher3 = document.getElementById('cacher3');
        

    cliquage()                       
    function cliquage() {         
    if (cacher3.style.display != "none") {
        cacher3.style.display  = "none";
        bouton3.src="./images/menu.jpg";
        bouton3.title="Cliquez pour étendre";
        } else {
        cacher3.style.display = "block";
        bouton3.src="./images/menu2.jpg";
        bouton3.title="Cliquez pour réduire";
        }}
    bouton3.addEventListener('click',cliquage, false);


    </script>
                    </div></div>
                <br /><br />

    <span class="ligne"><strong>Si mon profil vous interresse envoyez moi un </strong><a href="mailto:bonzomj@gmail.com">mail</a><strong>...</strong></span>
     <h5><i>Si vous avez un commentaire à propos de ce site, laissez moi un message...</i></h5>

                        <div class="question">
    <form  action="deuxieme.php"  method="post">

        <div>

            <label  for="pseudo">Pseudo (10 caractères):</label>

            <input  type="text"  id="pseudo"  name="user_pseudo" maxlength="10">

        </div>
        <br>
        <div>

            <label  for="message">Message (100 caractères) :</label><br>

            <textarea  id="message"  name="user_message" rows="5" cols="66" maxlength="100"></textarea>

        </div>
        <br>
        <div  class="button">

            <button  type="submit">Envoyer votre message</button>

        </div>

    </form>

    <?php
    include_once 'liste.php';
    ?>

                            </div>
        </body>



