<?php
include_once('../../sql/db_conexao_dgh.php');

$email = $_POST['email'];
echo $email;

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $sql = ("DELETE FROM chamados WHERE email = '$email' ");

    $result = $coat->query($sql);

    header('Location:chamados.php');
} else {
    echo "Error nos NAMES";
}

?>