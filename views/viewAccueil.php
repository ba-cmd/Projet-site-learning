<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="layout/fontawesome/css/all.css" />
    <link rel="stylesheet" href="layout/style.css">
    <link rel="stylesheet" href="views/accueil.css">
	<link rel="stylesheet" href="layout/erreur-page.css" />
    <script src="layout/"></script>
    <title>Document</title>
</head>
<body>

<section>
    <div class="contenu-site">
       <aside class="g" id="g">
                <p><a href="https://www.google.com" target="_blank" style="color: black">Forum général</a></p>
                <div class="Formus-gle">
                <?php
                        //$this->_t = 'Forums';
                         foreach($forumsNotCours as $fc):
                            //  var_dump($fc);
                ?>
                        <ul>
                            <li ><?= $fc->titres() ?></li>
                        </ul>
                    <?php endforeach ; ?>
                </div>
       </aside>
        <div class="left-contenu">
            <div class="cours-recent-consulter">
                <p>Cours récements consultés</p>
            </div>
            <div class="list-cours">
                <h1 style="text-align:center">Liste des Cours</h1>
                
                <div class="list-C">
                <?php
                        $this->_t = 'Accueil';
                        foreach($cours as $cour): 
                            // var_dump($cour);
                ?>
                    <div class="img-tuto">
                        <p><img class="img-scalling" src="images/im.jpg" alt="image cours" /></p>
                        <h2 class="titre-cours"><?= $cour->NomCours() ;?></h2>
                    </div>
                    <?php endforeach ; ?>
                </div>
                
            </div>

        </div>
        <aside class="bloc-forum">
             <aside class="c">
               <p><a href="google.com" style="color: black">Ajout Cours</a></p>
            </aside>
           <h1 style="color: black">Liste des forums</h1>
            <div class="list-F">
                <?php
                        //$this->_t = 'Forums';
                         foreach($forums as $forum):
                            //  var_dump($forum);
                ?>
            
                            <p><?= $forum->titres() ?></p>
                       
                    <?php endforeach ; ?>
                </div>

        </aside>
    </div>
    </section>
</body>
</html>