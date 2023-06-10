<?php
require_once('TCPDF-main/tcpdf.php');

if (isset($_POST['pdfContent'])) {
    ob_end_clean();
    session_start();
    // Get the mail
    $mail = $_SESSION['mail'];

    // Find the good line in infopers.txt
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

    
        // Create an instance of TCPDF and fix the PDF's parameters
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetAutoPageBreak(true, 10);
        $pdf->AddPage();

        // Convert what is in the PDF in HTML
        $html = '<html><body>';

        $html .= '<div>' . $nom . ' ' . $prenom . '</div>';
        $html .= '<div>' . $dateNaissance . '</div>';
        $html .= '<div>' . $mail . '</div>';
        $html .= '</div>';

        // add the HTML content with same classes and CSS style
        $boxContents = explode("\n", $_POST['pdfContent']);
        $boxCount = count($boxContents);
        foreach ($boxContents as $index => $boxContent) {
            if ($boxContent != '') {
                // show "Experience $i+1" for even indices 
                if ($index % 2 == 0) {
                    $html .= '<div class="box"><u>Experience ' . (($index / 2) + 1) . ':</u> ' . $boxContent . '</div>';
                } else {
                    $html .= '<div class="box">' . $boxContent . '</div>';
                }
            }
        }

        $html .= '</body></html>';

        // Convert HTML in PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Create the PDF and download it
        $pdf->Output('fichier.pdf', 'D');
        exit;
    } else {
        // If the mail wasn't found
        echo "Adresse email introuvable.";
    }

?>
