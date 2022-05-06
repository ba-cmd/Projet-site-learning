
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="layout/fontawesome/css/all.css" />
    <link rel="stylesheet" href="layout/style.css">
    <link rel="stylesheet" href="views/accueil.css">
    <title><?= $t ?></title>
</head>
<body>
    <header>
        <!-- <!?php require_once('layout/entete.php'); ?> -->   
    <div id="menu-barre">
        
        <input id="menu-cb" type="checkbox" class="menu-cb">
        <nav class="menu-nav">
          <ul>
            <li class="menu-item"><a href=" URL" style="color: black">Accueil</a></li>
            <li class="menu-item"><a href="google.com" style="color: black">Ajouter Cours</a></li>
            <li class="menu-item"><a href="forumG.php" style="color: black">Forum général</a></li>
          </ul>
        </nav> 

        <div class="left-entete">
          
          <label class="navbar-item searchContainer">
            
            <div class="icon" tabindex="0">
                
            </div>
          </label>
          <div class="navbar-item">
              
          </div>
          <div class="btn-deconnect">
            
          </div>
  
        </div>
    
      </div>
    </header>
    <?= $content ?>
    <footer>
        <!-- <?php require_once('layout/piedpage.php'); ?> -->
    </footer>
</body>
</html>