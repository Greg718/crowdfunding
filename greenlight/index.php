<!--<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--
<html>
    <head>
        <meta charset="UTF-8">
        <title>Greenlight</title>
        <link rel="icon" type="image/png" href="media/favicon.png" />
    </head>
    <body>
        
        <p> Hello sa marche pas
        <?php
            echo $_POST['login'];
                // put your code here
        ?>
        </p>
    </body>
</html>
-->

<!DOCTYPE html>
<html lang="fr">
<head>
	<title> GREENLIGHT </title>
	<meta name="keywords" content="projet, crowdfunding, calédonie, université" />
	<meta name="description" content="Greenlight" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="style.css" />
	<link rel="icon" type="image/png" href="media/favicon.png" />
</head>

<body >

	<header>
    	<h1>
        	<img src="media/favicon.png" alt="Icone feu" />
		Greenlight
    	</h1>
    
    	<form method="post" action="hello.php"> 
        
        	<label for="login"> Identifiant </label> :     
        	<input type="text" name="login" id="login" placeholder="defaut" /> 
        
        	<label for="password"> Mot De Passe </label> :  
        	<input type="password" name="password" id="password" />
        
        	<input type="submit" value="Connection"> 
        	<!--<input type="submit" value="Inscrivez-vous">-->
        	<a href="Page_d'inscription.php" title="Par Ici">Inscrivez-vous</a>
    	</form>  
	</header>

	<section>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed 
        non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing
        nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas 
        ligula massa, varius a, semper congue, euismod non, mi. Proin 
        porttitor, orci nec nonummy molestie, enim est eleifend mi, non 
        fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, 
        scelerisque vitae, consequat in, pretium a, enim. Pellentesque 
        congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum
        bibendum augue. Praesent egestas leo in pede. Praesent blandit odio 
        eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum 
        ante ipsum primis in faucibus orci luctus et ultrices posuere 
        cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque 
        fermentum. Maecenas adipiscing ante non diam sodales hendrerit.Ut 
        velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut 
        orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, 
        ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus 
        sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. 
        Integer id felis. Curabitur aliquet pellentesque diam. Integer quis 
        metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, 
        consectetuer adipiscing elit. Morbi vel erat non mauris convallis 
        vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, 
        convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. 
        Proin feugiat, augue non elementum posuere, metus purus iaculis 
        lectus, et tristique ligula justo vitae magna.Aliquam convallis 
        sollicitudin purus. Praesent aliquam, enim at fermentum mollis, 
        ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce 
        vulputate sem at sapien. Vivamus leo. Aliquam euismod libero eu 
        enim. Nulla nec felis sed leo placerat imperdiet. Aenean suscipit 
        nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt 
        tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus, felis 
        magna fermentum augue, et ultricies lacus lorem varius purus. 
        Curabitur eu amet.
    </section>

    <footer>
            
    </footer>

</body>

</html>
