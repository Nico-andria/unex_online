<?php
//session_start();
    $bdd = new PDO("mysql:host=127.0.0.1;dbname=compta;charset=utf8","root","");
    $erreur = null;
    $success = null;

    if (isset($_POST['valider'])) {
        $libelle = htmlspecialchars($_POST['libelle']);
        $montant = htmlspecialchars($_POST['montant']);
        $reste = htmlspecialchars($_POST['reste']);
        $nomClient = htmlspecialchars($_POST['nomClient']);
        $prenomClient = htmlspecialchars($_POST['prenomClient']);
        $numeroTransaction = htmlspecialchars($_POST['numeroTransaction']);

        if (!empty($montant) && !empty($reste) && !empty($nomClient) && !empty($prenomClient) && !empty($numeroTransaction)) {
            
            if (!empty($montant)) {
                if (!empty($reste)) {
                    if (!empty($nomClient)) {
                        if (!empty($prenomClient)) {
                            if (!empty($numeroTransaction)) {
                                
                                if (isset($_POST['lieu'])=="Mvola") {
                    
                                    if (isset($_POST['libelle']) AND isset($_POST['montant']) AND isset($_POST['reste']) AND  isset($_POST['nomClient']) AND isset($_POST['prenomClient']) AND isset($_POST['numeroTransaction'])) {
                                        
                                        if($_POST['choix']=="Entrée Ariary"){
                                            $requeteMvola = $bdd->prepare("INSERT INTO entreemvola(libelle,montant,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
                                            $requeteMoney = $bdd->prepare("INSERT INTO monnaie(libelle,montant,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
                                            $requeteMvola->execute(array($_POST['libelle'],$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
                                            $requeteMoney->execute(array($_POST['libelle'],$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
                                            $success = "Informations bien enregistrées!";
                                        }else{
                                            $requeteMvola = $bdd->prepare("INSERT INTO sortiemvola(libelle,montant,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
                                            $requeteMoney = $bdd->prepare("INSERT INTO monnaie(libelle,montant,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
                                            $requeteMvola->execute(array($_POST['libelle'],$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
                                            $requeteMoney->execute(array($_POST['libelle'],-$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
                                            $success = "Informations bien enregistrées!";
                                        }
                                    }
                                }else{
                                    if (isset($_POST['libelle']) AND isset($_POST['montant']) AND isset($_POST['reste']) AND  isset($_POST['nomClient']) AND isset($_POST['prenomClient']) AND isset($_POST['numeroTransaction'])) {
                                        
                                        if($_POST['choix']=="Entrée Ariary"){
                                            $requeteCoffre = $bdd->prepare("INSERT INTO coffre(libelle,montant_entree,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
                                            $requeteMoney = $bdd->prepare("INSERT INTO monnaie(libelle,montant,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
                                            $requeteCoffre->execute(array($_POST['libelle'],$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
                                            $requeteMoney->execute(array($_POST['libelle'],$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
                                            $success = "Informations bien enregistrées!";
                                        }else{
                                            $requeteCoffre = $bdd->prepare("INSERT INTO coffre(libelle,montant_sortie,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
                                            $requeteMoney = $bdd->prepare("INSERT INTO monnaie(libelle,montant,reste,nom_client,prenom_client,numero_transaction) VALUES(?,?,?,?,?,?)");
                                            $requeteCoffre->execute(array($_POST['libelle'],$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
                                            $requeteMoney->execute(array($_POST['libelle'],-$_POST['montant'],$_POST['reste'],$_POST['nomClient'],$_POST['prenomClient'],$_POST['numeroTransaction']));
                                            $success = "Informations bien enregistrées!";
                                        }
                                    }
                                }
                            
                            } else {
                                $erreur = "Veuillez entrer les numéros de la transaction";
                            }
                            
                        } else {
                            $erreur = "Veuillez entrer le prénom du client";
                        }
                        
                    } else {
                        $erreur = "Veuillez entrer le nom du client";
                    }
                    
                } else {
                    $erreur = "Veuillez entrer le reste";
                }
                
            } else {
                $erreur = "Veuillez entrer un montant";
            }
            
        } else {
            $erreur = "Veuillez remplir tous les champs";
        }
        
    }

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transactions</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="<?php echo base_url(); ?>assets/fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="<?php echo base_url(); ?>assets/css/templatemo-diagoona.css" rel="stylesheet" />
<!--

TemplateMo 550 Diagoona

https://templatemo.com/tm-550-diagoona

-->
</head>
<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">Insertion manuelle</h1>
                        </div>        
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" 
                            data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="<?php echo base_url(); ?>Compta/index">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="<?php echo base_url(); ?>Compta/choixTransaction">Choix</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="<?php echo base_url(); ?>Compta/suivimvola">Liste</a>
                                </li>                            
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="<?php echo base_url(); ?>Compta/deconnexion">Déconnexion <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
            
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Insertion des données</h2>
                        <form id="contact-form" action="" method="POST">

                            <?php if($erreur): ?>
                                <div class="alert alert-danger">
                                    <?= $erreur ?>
                                </div>
                            <?php endif ?>

                            <?php if($success): ?>
                                <div class="alert alert-successS">
                                    <?= $success ?>
                                </div>
                            <?php endif ?>

                            <div class="form-group mb-4">
                                <div>
                                    <select class="form-control" name="lieu" style="color: white;">
                                        <option style="color: black;">Mvola</option>
                                        <option style="color: black;">Coffre</option>
                                    </select>
                                </div>
                                <span class="focus-input3"></span>
                            </div>

                            <div class="form-group mb-4">
                                <div>
                                    <select class="form-control" name="libelle" style="color: white;">
                                        <option style="color: black;">PayPal</option>
                                        <option style="color: black;">Payoneer</option>
                                        <option style="color: black;">Bitsafe</option>
                                        <option style="color: black;">SEPA</option>
                                        <option style="color: black;">Skrill</option>
                                        <option style="color: black;">Approvisionnement</option>
                                        <option style="color: black;">TransfertWise</option>
                                        <option style="color: black;">Achat BTC</option>
                                        <option style="color: black;">Vente BTC</option>
                                    </select>
                                </div>
                                <span class="focus-input3"></span>
                            </div>


                            <div class="form-group mb-4">
                                <div>
                                    <select class="form-control" name="choix" style="color: white;">
                                        <option style="color: black;">Entrée Ariary</option>
                                        <option style="color: black;">Sortie Ariary</option>
                                    </select>
                                </div>
                                <span class="focus-input3"></span>
                            </div>

                            <div class="form-group mb-4">
                                <input type="number" name="montant" class="form-control" placeholder="Entrez le montant de la transaction" required="" />
                            </div>

                            <div class="form-group mb-4">
                                <input type="number" name="reste" class="form-control" placeholder="Entrez le solde restant" required="" />
                            </div>

                            <div class="form-group mb-4">
                                <input type="text" name="nomClient" class="form-control" placeholder="Entrez le nom du client" required="" />
                            </div>

                            <div class="form-group mb-4">
                                <input type="text" name="prenomClient" class="form-control" placeholder="Entrez le prénom du client" required="" />
                            </div>

                            <div class="form-group mb-4">
                                <input type="text" name="numeroTransaction" class="form-control" placeholder="Entrez le numéro de la transaction" required="" />
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Insérer</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </div>        

        <div class="tm-row">
            <div class="tm-col-left text-center">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>            
            </div>        
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Copyright 2020 Nico ANDRIAIHANTA<a rel="nofollow" target="_parent" href="https://equity-funds.tech" class="tm-text-link">Equity MG LTD</a></p>
                </footer>
            </div>  
        </div>

        <div class="tm-bg"> <!-- Diagonal background design -->
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>