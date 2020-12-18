<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Ya Salam</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ya Salam</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Infos</a>
        </li>

        
        <div class="float-right mt-3">
        <li class="nav-item float-right">
          <a class="nav-link" href="#">Logout</a>
        </li>
        </div>
      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container">
  <h3>Ya SALAM Agence de voyage</h3>
  <p>Vos informations pour le pélérinage</p>
</div>
  
<div id="content">
            
            <a href='principale.php?deconnexion=true'><span></span></a>
            
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                   // echo "<br>Bonjour $user, vous êtes connectés";
                }
            ?>
            
        </div>
    
    <div id="content">
        <!-- tester si l'utilisateur est connecté -->
        <?php
        session_start();
        if ($_SESSION['username'] !== "") {
            $user = $_SESSION['username'];
            // afficher un message
            //echo "Bonjour $user, vous êtes connecté";
        }
        ?>

    </div>
    <div class="container jumbotron">
        <div class="row">
            <div class="col-md-6 ">
                <fieldset class="border p-2">
                    <legend class="w-auto"> Informations personnelles </legend>
                    <div class="form-group mb-2">
                        <div class="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="">Numéro du compte</span>
                                </div>
                                <input type="text" class="form-control" value="24242424" disabled name="numCompte" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="">Prenom</span>
                                </div>
                                <input type="text" class="form-control" value="24242424" disabled name="numCompte" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="">Nom</span>
                                </div>
                                <input type="text" class="form-control" value="24242424" disabled name="numCompte" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="">Prénom</span>
                                </div>
                                <input type="text" class="form-control" value="Abdourahmane" disabled name="numCompte" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="">Date de Naissance</span>
                                </div>
                                <input type="text" class="form-control" value="22/03/1995" disabled name="numCompte" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <div class="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="">Lieu de Naissance</span>
                                </div>
                                <input type="text" class="form-control" value="Pikine" disabled name="numCompte" />
                            </div>
                        </div>
                    </div>

                </fieldset>

            </div>

            <div class="col-md-6 ">
                <fieldset class="border p-2">
                    <legend class="w-auto"> Informations sur taxes et Ziara </legend>
                    <div class="form-group mb-2">
                        <div class="">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="">Parrain</span>
                                </div>
                                <input type="text" class="form-control" value="Sans Parrain" disabled name="numCompte" />
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" value="Taxe Saoudien" disabled />
                        <div class="">
                            <input class="form-check-input" type="checkbox" checked disabled value="" aria-label="Checkbox for following text input" />
                        </div>

                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" value="Koulou Ziara Medine" disabled />
                        <div class="">
                            <input class="form-check-input" type="checkbox" checked disabled value="" aria-label="Checkbox for following text input" />
                        </div>

                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" value="Koulou Ziara Makka" disabled />
                        <div class="">
                            <input class="form-check-input" type="checkbox" checked disabled value="" aria-label="Checkbox for following text input" />
                        </div>

                    </div>


                </fieldset>
            </div>



        </div>

        <div class="row">
            <div class="col-md-7 ">
                <fieldset class="border p-2">
                    <legend class="w-auto"> Transports </legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Compagnie</span>
                                        </div>
                                        <input type="text" class="form-control" value="24242424" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Date Aller</span>
                                        </div>
                                        <input type="text" class="form-control" value="22/03/1995" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Date Retour</span>
                                        </div>
                                        <input type="text" class="form-control" value="22/03/1995" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Bus</span>
                                        </div>
                                        <input type="text" class="form-control" value="B 3" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Compagnie</span>
                                        </div>
                                        <input type="text" class="form-control" value="24242424" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Date Aller</span>
                                        </div>
                                        <input type="text" class="form-control" value="22/03/1995" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Date Retour</span>
                                        </div>
                                        <input type="text" class="form-control" value="22/03/1995" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Bus</span>
                                        </div>
                                        <input type="text" class="form-control" value="B 3" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </fieldset>

            </div>

            <div class="col-md-5 ">
                <fieldset class="border p-2">
                    <legend class="w-auto"> Séjour </legend>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Médine</h4>
                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Hotel</span>
                                        </div>
                                        <input type="text" class="form-control" value="hotel dbdb" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Chambre</span>
                                        </div>
                                        <input type="text" class="form-control" value="10 C" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Koulou Ziarra</span>
                                        </div>
                                        <input type="text" class="form-control" value="22/03/1995" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <h4>Makka</h4>
                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Hotel</span>
                                        </div>
                                        <input type="text" class="form-control" value="hotel dbdb" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Chambre</span>
                                        </div>
                                        <input type="text" class="form-control" value="10 C" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="">Koulou Ziarra</span>
                                        </div>
                                        <input type="text" class="form-control" value="22/03/1995" disabled name="numCompte" />
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </fieldset>
            </div>

        </div>

    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-center">&copy; 2020 - Agence de voyage YA SALAM</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>