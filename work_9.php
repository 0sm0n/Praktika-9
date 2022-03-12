<?php
if(!isset ($_POST['submit'])){
    ?>
    <form method="post" action="">
        <p>Введите значения длины и ширины прямоугольника.</p>
        <p>Длина:  <input type="text" placeholder="Длина" name="length" size="5" />
            Ширина:  <input type="text" placeholder="Ширина" name="width" size="5" /></p>
        <input type="submit" name="submit" value="Выполнить" />
    </form>
    <?php
} else {
    $l = $_POST['length'];
    $w = $_POST['width'];
    function test($l, $w){
        $area = $l * $w;
        return $area;
    }
    echo "Площадь прямоугольника длиной $l и шириной $w равна " . test($l, $w). ".";
}