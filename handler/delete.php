<?php



if(isset($_POST['submit']) && $_POST['submit'] == 'Obrisi'){
    $id = $_POST['id_predmeta'];
    $prijava = new Prijava($id);
    $obrisano = $prijava->deletById($id, $conn);
}