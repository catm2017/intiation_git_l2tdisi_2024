-<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="PageCSS.css">
        <title>SOLOQUIZZ</title>
        <link rel="stylesheet" href="../public/PageHTML.css">
    </head>
    <body >
        <header class="pb-2 headerClasse">
            <nav class="px-3 navbar navbar-expand-lg navbar-dark bg-dark fixed">
                <div class="container row px-1 marge">
                    <div class="col">
                        <a class="navbar-brand" href="#"><img src="Soloquizz.png" class="img"></a>
                    </div>
                    <div class="col" class="icon">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <button class="px-3 btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="user.png" class="user">
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-info">
                                        <li>
                                            <a class="dropdown-item text-dark" href="#">
                                                <span<ion-icon name="person"></ion-icon></span>
                                                <strong>&nbsp;Alassane Laye Diop</strong>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-dark" href="#">
                                                <span<ion-icon name="power"></ion-icon></span>&nbsp;Deconnexion</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="bg-light">
            <!-- <hr class="bg-primary" class="white"> -->
            <nav class=" nav navbar navbar-expand-lg">
                <div class="container">
                    <div class="container-fluid row">
                        <div class="col-7">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <div class="">
                                    <ul class="navbar-nav lienNav liste">
                                        <li class="nav-item ">
                                            <a class=" element nav-link" href="#">Tableau de bord</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link elements" href="#">Parametres</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class=" elements nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Certifications
                                            </a>
                                          <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-dark" href="#">Action</a></li>
                                            <li><a class="dropdown-item text-dark" href="#">Another action</a></li>
                                            <li><a class="dropdown-item text-dark" href="#">Something else here</a></li>
                                          </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a  class="elements nav-link" href="#">Parametres</a>
                                        </li>
                                        <li class="nav-item">
                                            <a  class="elements nav-link" href="#">Classes</a>
                                        </li>
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="taille">
                <div class=" row text-center shadow bg-light ligne">
                    <div class="col-3 shadow-lg Etudiants ">Etudiants<br><strong class="text-dark">4</strong></div>
                    <div class="text-center col-lg-3 shadow-lg rounded Certifications ">Certifications<br><strong class="text-dark">2</strong></div>
                    <div class="text-center col-lg-3 shadow-lg rounded Classe">Classe<br><strong class="text-dark">5</strong></div>
                </div>
                <div class="container bg-light bg1 ">
                    <div class="container bg-light bg2 ">
                        <div class="bg-white table">
                            <nav aria-label="breadcrumb"class="table1">
                                <ol class="breadcrumb ligneTable">
                                  <li class="breadcrumb-item"><a href="#" class="ligneTables">Accueil</a></li>
                                  <li class="breadcrumb-item"><a href="#" class="ligneTables">Administrateurs</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Listes des administrateurs</li>
                                </ol>
                              </nav>
                            <div>
                                <div class="center row bg-light colonneTable ">
                                    <div class="col-4"><strong>Listes des adminstrateurs</strong></div>
                                    <div class="col-4"><strong>Nombre d'administrateurs 4</strong></div>
                                   </div>
                                <form method="post" action="PageHTML.php" class="col-12">
                                    <div class="row mt-3 mt-md-0">
                                        <div class="col-6 mb-3">
                                            <input type="text" class="form-control" id="prenom" placeholder="Prénom">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <input type="text" class="form-control" id="nom" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="row mt-3 mt-md-0">
                                        <div class="col-6 mb-3">
                                            <input type="text" class="form-control" id="prenom" placeholder="Adresse">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <input type="email" class="form-control" id="nom" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row mt-3 mt-md-0">
                                        <div class="col-6 mb-3">
                                            <input type="number" class="form-control" id="prenom" placeholder="Age">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <input type="file" accept="image/*" class="form-control" id="nom" placeholder="Aucun fichier choisi">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 text-center">Enregistrer</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!--Footer 2-->
       <div class="footer">
        <div class="container">
            <p class="text-white text-center"><span>Ministèrer de l'enseignement supérieur, de la Recherche et de l'innovation <span class="text-primary">(MESRI)</span></span><br/>
            <span>Université Cheikh Anta Diop de DAKAR <span class="text-primary">(UCAD)</span></span><br/>
            <span>Transmission des données et sécurités de linformation <span class="text-primary">(TDSI)</span></span></p>
        </div>
      </div>
  </footer>  

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>