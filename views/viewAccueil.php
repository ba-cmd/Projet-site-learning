<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="layout/"></script>
    <title>Document</title>
</head>
<body>

<section>
    <div class="contenu-site">
       <aside class="g" id="g">
                <p><a href="google.com" style="color: black">Forum général</a></p>
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
                <!-- <?php
                        $this->_t = 'Accueil';
                        foreach($forums as $forum): ?>
            
                        <h2 ><?= $forum->Titre() ?></h2>
                    <?php endforeach ; ?> -->
                </div>

        </aside>
    </div>
    </section>
</body>
</html>