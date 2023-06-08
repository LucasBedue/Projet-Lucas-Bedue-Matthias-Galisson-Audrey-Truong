<?php
require_once('TCPDF-main/tcpdf.php');

if (isset($_POST['pdfContent'])) {
    ob_end_clean();
    session_start();
    // Récupérer l'adresse email
    $mail = $_SESSION['mail'];

    // Rechercher la ligne correspondant à l'adresse email dans le fichier infopers.txt
    $file = fopen("infopers.txt", "r");

    while (!feof($file)) {
        $line = fgets($file);
        $values = explode(";", $line);
        $nom = isset($values[0]) ? trim($values[0]) : null;
        $prenom = isset($values[1]) ? trim($values[1]) : null;
        $dateNaissance = isset($values[2]) ? trim($values[2]) : null;
        $mail_file = isset($values[3]) ? trim($values[3]) : null;

        if ($mail_file == $mail) {
            break;
        }
    }

    fclose($file);

    
        // Créer une instance de TCPDF et fixer les paramètres du PDF
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetAutoPageBreak(true, 10);
        $pdf->AddPage();

        // Convertir le contenu du PDF en HTML
        $html = '<html><body>';

        $html .= '<div>' . $nom . ' ' . $prenom . '</div>';
        $html .= '<div>' . $dateNaissance . '</div>';
        $html .= '<div>' . $mail . '</div>';
        $html .= '</div>';

        // Ajouter le contenu HTML avec les mêmes classes et styles CSS
        $boxContents = explode("\n", $_POST['pdfContent']);
        $boxCount = count($boxContents);
        foreach ($boxContents as $index => $boxContent) {
            if ($boxContent != '') {
                // Afficher "Experience $i+1" uniquement pour les indices pairs
                if ($index % 2 == 0) {
                    $html .= '<div class="box"><u>Experience ' . (($index / 2) + 1) . ':</u> ' . $boxContent . '</div>';
                } else {
                    $html .= '<div class="box">' . $boxContent . '</div>';
                }
            }
        }

        $html .= '</body></html>';

        // Convertir le HTML en PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Créer le fichier PDF et le télécharger
        $pdf->Output('fichier.pdf', 'D');
        exit;
    } else {
        // L'adresse email n'a pas été trouvée dans le fichier
        echo "Adresse email introuvable.";
    }

?>
