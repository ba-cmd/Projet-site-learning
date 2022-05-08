<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/fontawesome/css/all.css" />
    <link rel="stylesheet" href="layout/style.css" />
    <link rel="stylesheet" href="views/accueil.css?ts=<?=time()?>"/>
	<link rel="stylesheet" href="layout/erreur-page.css" />
    <script src="layout/"></script>
    <title>Document</title>
</head>

<body style="background-color:black">

<section>
    <div class="contenu-site">
       <aside class="g" id="g">
                <h1><a>Forum général</a></h1>
                <div class="Formus-gle">
                <?php
                         foreach($forumsNotCours as $fc):
                ?>
                        <ul>
                            <li  ><a href="#" style="color: brown" class="fg" id="fg"><?= $fc->titres() ?></a></li>
                        </ul>
                    <?php endforeach ; ?>
                </div>
       </aside>
        <div class="left-contenu">
            <div class="cours-recent-consulter">
               <h1 style="text-align:center">Cours récements consultés</h1>

                <div class="list-C">
                <?php
                        $this->_t = 'Accueil';
                        foreach($consultes as $consult): 
                ?>
                    <div class="img-tuto"> <a href="#" style="color: brown">
                        <p><img class="img-scalling" src="images/im.jpg" alt="image cours" /></p>
                        <p class="titre-cours"><?= $consult['nom'] ;?></p>
                      </a>
                    </div>
                    <?php endforeach ; ?>
                </div>
            </div>
            <div class="list-cours">
                <h1 style="text-align:center">Liste des Cours</h1>
                
                <div class="list-C">
                <?php
                        $this->_t = 'Accueil';
                        foreach($cours as $cour): 
                ?>
                    <div class="img-tuto"> <a href="#" style="color: brown">
                        <p><img class="img-scalling" src="images/im.jpg" alt="image cours" /></p>
                        <p class="titre-cours"><?= $cour->nom() ;?></p>
                        </a>
                    </div>
                    <?php endforeach ; ?>
                </div>
                
            </div>

        </div>
        <aside class="bloc-forum">
             <aside class="c">
               <p><a href="#"  style="color: black">Ajout Cours</a></p>
            </aside>
           <a><p  style="color: black" >Liste des forums</p></a>
            <div class="list-F">
                <?php
                    foreach($forums as $forum):
                ?>
                         <ul>
                            <li ><a href="#" style="color: brown" class="lf" id="lf"><?= $forum->titres() ?></a></li>
                          </ul>
                    <?php endforeach ; ?>
                </div>

        </aside>
    </div>
    </section>
</body>
</html>