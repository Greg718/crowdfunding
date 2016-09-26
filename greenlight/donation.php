<!DOCTYPE html>
<html lang="fr">
<head>
	<title> GREENLIGHT </title>
	<meta name="keywords" content="projet, crowdfunding, calédonie, université" />
	<meta name="description" content="Greenlight" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="style.css" />
</head>

<body >

    <header>
	<h1>Greenlight</h1>
        
        <h2>DONATION</h2>

    </header>
        
    <form method="post" action="hello.php">
        
        <label for="email"></label>     
        <input type="email" name="email" id="email" placeholder="Email" required/>*
        
        </br></br>
        
        <label for="montant"></label>     
        <input type="number" name="montant" id="montant" placeholder="Montant" required/>*
        
        </br></br>
        
        <label for="nom"></label>     
        <input type="text" name="nom" id="nom" placeholder="Nom" /> &nbsp;
        
        </br></br>
        
        <label for="prénom"></label>     
        <input type="text" name="prénom" id="prénom" placeholder="Prénom" /> &nbsp;
        
        </br></br>
        
        <label for="téléphone"></label>     
        <input type="tel" pattern="\{6}" name="téléphone" id="téléphone" placeholder="Téléphone" /> &nbsp;
        
        </br></br>
        
        <label for="commentaire"></label>     
        <input type="text" name="commentaire" id="commentaire" placeholder="Commentaire" /> &nbsp;
        
        </br></br>
        
        <input type="submit" value="Annuler">
        <input type="submit" value="Valider">
        
        </br>
        *Champ Obligatoire
        
    </form>
    
    <footer>
            
    </footer>
        


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
