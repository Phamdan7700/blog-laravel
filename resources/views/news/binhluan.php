<?php require "./core/tin.php"; ?>
<?php
$chitiettin = new tin;
if (isset($_GET['idTin']) && isset($_GET['name']) && isset($_GET['comment'])) {
    $idTin = $_GET['idTin'];
    $HoTen = $_GET['name'];
    $NoiDung = $_GET['comment'];
    $chitiettin->result = $chitiettin->LuuYKienVaoDB($idTin, $HoTen, $NoiDung);
    header('location:single-post.php?idTin='. $idTin);
}
?>