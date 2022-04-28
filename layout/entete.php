<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En tête</title>
</head>
<body>
    <div id="menu-barre">
        <label for="menu-cb" class="menu-label">
          <svg viewBox="0 0 32 32" fill="#666" >
            <rect x="0" y="4" rx="3" ry="3" width="32" height="3" />
            <rect x="0" y="14" rx="3" ry="3" width="32" height="3" />
            <rect x="0" y="24" rx="3" ry="3" width="32" height="3" />
          </svg>
        </label>
        <input id="menu-cb" type="checkbox" class="menu-cb">
        <nav class="menu-nav">
          <ul>
            <li class="menu-item"><a href="<?= URL ?>">Accueil</a></li>
            <li class="menu-item"><a href="#cours">Ajouter Cours</a></li>
            <li class="menu-item"><a href="#forum">Forum</a></li>
            <li class="menu-item"><a href="#page3">Page 4</a></li>
          </ul>
        </nav> 

        <div class="left-entete">
          
          <label class="navbar-item searchContainer">
            <input placeholder="" />
            <div class="icon" tabindex="0">
                <i class="fas fa-search"></i>
            </div>
          </label>
          <div class="navbar-item">
              <div class="btn btn-blue">
                <!-- <?php echo $firstPre.''.$firstName; ?> -->SD
              </div>
          </div>
          <div class="btn-deconnect">
            <a href="auth/logout.php">Déconnexion</a>
          </div>
  
        </div>
    
      </div>
</body>
</html>