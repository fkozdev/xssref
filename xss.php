<?php

if(isset($_GET["kelime"])){
    $kelime = $_GET["kelime"];
}else{
    $kelime = "";
}
?>

<form action="">
    Ara: <input type="text" name="kelime" value="<?php echo $kelime; ?>">
    <input type="submit">
</form>

<?php
if(isset($_GET['kelime'])){
    echo ' aradığınız kelime : ' . $kelime . "<br>";
    echo "sonuclar : <br> ";
}

?>
