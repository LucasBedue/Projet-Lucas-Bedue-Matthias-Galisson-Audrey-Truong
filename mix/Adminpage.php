<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Admin - Jeunes 6.4</title>
		<!--	Page for the "Jeune" to create the profile of his experience		-->
		<script>
			
			<?php
// Démarre ou restaure la session
session_start();

// Vérifie si le dernier temps d'activité existe dans la session
if (isset($_SESSION['last_activity'])) {
    // Durée d'inactivité en secondes (15 minutes = 900 secondes)
    $inactive_duration = 900;

    // Calcul du temps écoulé depuis le dernier temps d'activité
    $elapsed_time = time() - $_SESSION['last_activity'];

    // Vérifie si l'utilisateur est resté inactif pendant plus de 15 minutes
    if ($elapsed_time > $inactive_duration) {
        // Détruit la session
        session_destroy();
        
        // Redirige l'utilisateur vers la page de déconnexion
        header("Location: logout.php");
        exit;
    }
}

// Enregistre le timestamp actuel dans la session
$_SESSION['last_activity'] = time();


if (!isset($_SESSION['role']) || $_SESSION['role'] !== "Admin") {
    echo '<script>alert("Veuillez vous connecter en tant que compte Admin pour accéder à cette page.");</script>';
    echo '<script>window.location.href = "login.php";</script>';
    exit();
}
?>
		</script>
	
	</head>
	<body>
		<link rel="stylesheet" href="Adminpage.css" />

		<div class="whole">			<!--	Container for the whole page	-->
			<div class="head">			<!--	Header	-->
				<img class="fitimg" src="./logos/logo1.png" alt="Jeunes 6.4" />
				<p class="headtext2">ADMIN</p>
				<p class="headtext"></p>
			</div>

			<div class="bodybg">			<!--	Main body	-->
				<div class="tab">				<!--	Menu	-->
					<div class="tabb">
						<p class="tabbox1">
							<a class="link" href="./infopage.php">
								Qui sommes nous?
							</a>
						</p>
						<p class="tabbox1">
							<a class="link" href="./partnerspage.php">Nos partenaires</a>
						</p>
						<p class="tabbox1">
							<a class="link" href="./logout.php">Déconnexion</a>
						</p>
					</div>
				</div>
				<div class="texttop">
					<p>
						Choissiser un jeune et vérifier son compte
						<?php
							$folder = './../InformationsJeunes'; // Dossier à explorer

							// Obtenir la liste des fichiers dans le dossier
							$files = array_diff(scandir($folder), array('.', '..'));

							// Tableau pour stocker les termes extraits des fichiers
							$terms = array();

							// Parcourir les fichiers et extraire les termes
							foreach ($files as $file) {
								$content = file($folder . '/' . $file); // Lire le contenu du fichier ligne par ligne

								$term = '';
								$lineNumber = 0;
								$fileEnded = false;
								$tmp=0;

								// Parcourir les lignes du fichier
								foreach ($content as $line) {
									$line = trim($line);
								
									// Ignorer les fichiers terminés
									if ($fileEnded) {
										continue;
									}
								
									// Vérifier les différentes conditions de ligne
									if ($lineNumber == 2 + $tmp * 34) {
										if ($line != '') {
											$nextLine = isset($content[$lineNumber + 1]) ? trim($content[$lineNumber + 1]) : '';
											$term .= $line . ' ' . $nextLine;
										}
										$tmp = $tmp + 1;
									}
								
									// Vérifier si la fin du fichier est atteinte
									if ($lineNumber == count($content) - 1) {
										$fileEnded = true;
									}
								
									// Vérifier si les termes sont récupérés
									if (!empty($term)) {
										$terms[] = $term;
										break; // Sortir de la boucle dès que les termes sont récupérés
									}
								
									$lineNumber++;
								}
							}
							?>
						<br>
							<!-- Création du menu déroulant HTML -->
							<select name="term">
						<?php foreach ($terms as $term): ?>
							<option value="<?php echo $term; ?>"><?php echo $term; ?></option>
						<?php endforeach; ?>
						</select>

					</p>
				</div>
				
					
				</div>
			</div>
		</div>
			
		
	</body>
</html>
