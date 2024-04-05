<?php
if (isset($_POST["pega"]) && $_POST["pega"] == true) {
    require_once 'conecta.php';

    $html = [];

    $query = mysqli_query($conexao, "SELECT * FROM classes_produtos LIMIT 5");

    while ($row = mysqli_fetch_array($query)) {
        $atual = $row["nome_classe"];
        $show = $row['mostrar_classe'];

        if($show == 1){
            array_push($html, $atual);
        }
    }

    // Defina o cabeçalho Content-Type como application/json
    header('Content-Type: application/json');
    echo json_encode($html);
}
