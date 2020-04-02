<?php
/**
 * Основной шаблон
 * ===============
 * $title - заголовок
 * $content - HTML страницы
 */
?>

<?php include 'header.php' ?>
<div class="container">
    <h3 class="m-t"><?=$name?></h3>
    <div class="container">

            <?=$content?>

            <?=$s_button?>


    </div>
</div>
<footer id="footer">
    <hr>
    <div class="container">
        <h4 style="text-align: center;">Slava &copy; 2020</h4>
    </div>
</footer>
</body>
</html>


