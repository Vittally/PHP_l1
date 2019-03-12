<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <link rel="stylesheet" href="style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
<body>
<h3>ЗАДАНИЕ 1</h3>
<p>1. Создать галерею фотографий. Она должна состоять из одной страницы, на которой пользователь видит
    все картинки в уменьшенном виде. При клике на фотографию она должна открыться в браузере в новой вкладке.
    Размер картинок можно ограничивать с помощью свойства width.</p>
<div class="imgs">
    <?php
    $dir_sm = "img_small";
    $dir_big = "img_big";
    $files = scandir($dir_sm);
    foreach ($files as $file) {
        if ($file != ".." && $file != ".") {
            echo "<a href='$dir_big/$file' target='_blank'><img class='img' src='$dir_sm/$file'/></a>";
        }
    }
    ?>
</div>
<hr>

<h3>ЗАДАНИЕ 2</h3>
<p>2. *Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес
    папки с изображениями. Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.</p>
<p class="comment"> Пока не получилось - разбираюсь</p>

<form action="engine/upload.php" method="post" enctype="multipart/form-data">
    <p>Загрузите ваши картинки</p>
    <input type="file" multiple name="image[]"><br>
    <input type="submit" value="Загрузить">
</form>
<hr>

<h3>ЗАДАНИЕ 3</h3>
<p>3. *[ для тех, кто изучал JS-1 ] При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне
    (материал в помощь: http://dontforget.pro/javascript/prostoe-modalnoe-okno-na-jquery-i-css-bez-plaginov/)</p>
<p class="comment">Не придумал, как передать правильный id картинки</p>

<div class="imgs">
    <?php
    $dir_sm = "img_small";
    $dir_big = "img_big";
    $files = scandir($dir_sm);
    foreach ($files as $file) {
        if ($file != ".." && $file != ".") {
            echo "<a href='#' id='go' alt='$file'><img class='img' src='$dir_sm/$file'/></a>";
        }
    }
    ?>
</div>

<div id="modal_form"><!-- Сaмo oкнo -->
    <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть -->
    <?php
    echo "<img class='img' src='$dir_big/$file'/>";
    ?>
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->

<script>
    $(document).ready(function() { // вся мaгия пoсле зaгрузки стрaницы
        $('a#go').click( function(event){ // лoвим клик пo ссылки с id="go"
            event.preventDefault(); // выключaем стaндaртную рoль элементa
            $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
                function(){ // пoсле выпoлнения предъидущей aнимaции
                    $('#modal_form')
                        .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
                        .animate({opacity: 1, top: '50%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
                });
        });
        /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
        $('#modal_close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
            $('#modal_form')
                .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                    function(){ // пoсле aнимaции
                        $(this).css('display', 'none'); // делaем ему display: none;
                        $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                    }
                );
        });
    });
</script>
</body>
</html>