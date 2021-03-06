<!DOCTYPE html>
<html>
	<head>
        <!-- En-tête de la page -->
		<?php include("../head.php"); ?>
	</head>
	
	<header>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="../index.php" class="brand">Raspberry Pi</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="../index.php">Accueil</a></li>
							<li><a href="../tutoriels.php">Tutoriels</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
	</header>

	<body>
		<div class="container">    
			<div class="row-fluid">
				<div class="span12">
					<div class="moncadre">
						<h2>Premiers Pas</h2>
						<p>
							Voici le deuxième tuto, faisant donc suite au précédent.<br />
							Celui ci a pour but de paramétrer votre Raspberry via l'utilitaire fournit.<br /><br />

							Dans un terminal ou en ssh, la première chose à taper est :<br />
							<code>sudo raspi-config</code><br /><br />
				
							Voici les divers paramétrages:<br />
			
							<span class="bold">expand-rootfs</span><br />
							Par défaut, vous n'utilisez que la partie de la carte qui a été prise lors de la copie de votre OS.<br />
							Cela vous permet donc d'étendre la mémoire utilisable à toute la carte<br /><br />

							<span class="bold">overscan</span><br />
							Cette partie concerne les personnes qui sont directement connectées à un écran.<br />
							Cela vous permet de réduire les bandes noires qui encadrent l'image du Raspberry.<br /><br />

							<span class="bold">configure_keyboard</span><br />
							Cela vous permet de configurer le clavier quand vous en avez un branché sur le Raspberry.<br /><br />

							<span class="bold">change_pass</span><br />
							Cela vous permet de changer le mot de passe de l'utilisateur pi.<br /><br />

							<span class="bold">change_local</span><br />
							Cela vous permet de configurer les paramètres locaux.<br />
							Descendez la liste jusqu'à vous positionner en face de fr_FR.UTF-8 UTF-8 et appuyez sur la barre d'espace.<br />
							Vous pouvez décochez celui déjà choisi en tapant sur espace aussi devant.<br />
							Puis appuyez sur Entrée.<br />
							La on vous demande de choisir le paramètre par défaut. Descendez sur fr_FR.UTF-8 et taper sur Entrée.<br /><br />

							<span class="bold">change_timezone</span><br />
							Cela vous permet de régler la zone horaire.<br />
							Descendez sur Europe et taper sur Entrée. Puis Paris et Entrée.<br /><br />

							<span class="bold">memory_split</span><br />
							Cela vous permet de régler le partage de la mémoire entre le CPU et le GPU.<br />
							Cela dépendra de votre utilisation, vous pouvez mettre au minimum si vous comptez rester en ssh et en ligne de commande, ou la partager pour lire des vidéos.<br /><br />

							<span class="bold">overclock</span><br />
							Cela vous permet d'overclocker votre Raspberry.<br />
							Personnellement, vu que mon Raspberry est dans sa boite, sans aération supplémentaire, je l'ai mi sur High. Il faut savoir que lorsque votre Raspberry chauffe trop, il enlève lui-même l'overclocking pour se protéger.<br /><br />

							<span class="bold">ssh</span><br />
							Cela vous permet d'activer le ssh (activer par défaut maintenant) ou de le désactiver, en fonction de votre utilisation.<br /><br />

							<span class="bold">boot_behaviour</span><br />
							Cela vous permet de configurer l'affichage du bureau en mode graphique au démarrage.<br /><br />

							Puis faite un update. Puis finish pour terminer.<br /><br />

							S'il ne vous propose pas de redémarrer, taper pour finir l'installation : <br />

							<code>sudo reboot</code><br /><br />
			
							<a href="../tutoriels.php">Retour</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</body>
	
	<footer>
	<!-- Pied de la page -->
		<?php include("../footer.php"); ?>
	</footer>
    
</html>
