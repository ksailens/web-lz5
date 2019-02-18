<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Персональный сайт Гридасовой Карины. Мои интересы.</title>-->
<!--    <link rel="stylesheet" type="text/css" href="css/style.css">-->
<!--    <script src="script/list.js"></script>-->
<!--    <script src="script/sessionStorageHistory.js"></script>-->
<!--    <script src="script/globalHistory.js"></script>-->
<!--</head>-->
<!--<body onload="sessionStorageHistory('Мои интересы'); setCookie('Мои интересы')">-->
<!--<div class="wrapper">-->
<!--    <div class="content">-->
<!--        <div class="currentTime" id="currentTime"></div>-->
<!--        <a name="top"></a>-->
<!--        <header>-->
<!--            <h1>Вы попали на персональный сайт <br> Гридасовой Карины Владиславовны</h1>-->
<!--        </header>-->
<!--        <nav>-->
<!--            <ul class="mainMenu">-->
<!--                <li><a id="MainPage" href="main.php" onmouseover="setBackground('MainPage')" onmouseout="restore('MainPage')">Главная</a></li>-->
<!--                <li><a id="AboutMe" href="aboutMe.php" onmouseover="setBackground('AboutMe')" onmouseout="restore('AboutMe')">Обо мне</a></li>-->
<!--                <li class="active"><a onclick = "showList()" id="myInterests" href="#">Мои интересы</a></li>-->
<!--                <li><a id="Photoalbum" href="photoalbum.php" onmouseover="setBackground('Photoalbum')" onmouseout="restore('Photoalbum')">Мой фотоальбом</a></li>-->
<!--                <li><a id="Education" href="education.php" onmouseover="setBackground('Education')" onmouseout="restore('Education')">Образование</a></li>-->
<!--                <li><a id="Connection" href="contacts.php" onmouseover="setBackground('Connection')" onmouseout="restore('Connection')">Связь со мной</a></li>-->
<!--                <li><a id="Test" href="test.php" onmouseover="setBackground('Test')" onmouseout="restore('Test')">Входное тестирование</a></li>-->
<!--                <li><a id="History" href="history.php" onmouseover="setBackground('History')" onmouseout="restore('History')">История просмотров</a></li>-->
<!--            </ul>-->
<!--            <div class="mainMenu navigation" id ="inter">-->
<!--              <script src="script/dropMenu.js"></script>-->
<!--            </div>-->
<!--        </nav>-->
        <section class="myInterests">
            <h2>Мои интересы</h2>
            <a href="#hobbi" class="first">Моё хобби</a>
            <a href="#loveMusic">Любимая музыка</a>
            <a href="#loveBook">Любимые книги</a>
            <a href="#loveCinema" class="last">Любимые фильмы</a>
            <div class="clear"></div>
            <a name="hobbi"></a>
            <?php
            function showList($list, $type, $class, $ob) {
                if ($type == 0) {
                    echo "<ul class = ". $class . " " ." type = ".$ob. ">";
                }
                else
                if ($type == 1) {
                    echo "<ol class = ". $class . " " ."type = ".$ob. ">";
                }
                for ($i = 0; $i < count($list); $i++) {
                    echo "<li>$list[$i]</li>";
                }
                if ($type == 0) {
                    echo '</ol>';
                }  else {
                    echo '</ul>';
                }
            }
            ?>

            <?php
            $list = array('Крепко спать','Вкусно есть');
            showList($list, 0, "myHobbies", "circle" );
            ?>

            <a name="loveMusic"></a>
            <img id="pictureMusic" src="img/music.jpg" width="300px" height="300px" alt="">

            <?php
            $list = array('БИ-2','Brainstorm','Король и Шут', 'The Retuses', 'Мумий Троль', 'ДДТ');
            showList($list, 1, "loveMusic", "a" );
            ?>

            <a name="loveBook"></a>
            <img id="pictureBooks" src="img/books.png" width="400px" height="300px" alt="">
            <?php
            $list = array('Виктор Гюго. Отверженные','Виктор Гюго. Человек, который смеется','Валентин Пикуль. Битва железных канцлеров');
            showList($list, 0, "loveBooks", "square" );
            ?>

            <a name="loveCinema"></a>
            <img id="pictureCinema" src="img/cinema.jpg" width="300px" height="300px" alt="">

            <?php
            $list = array('Король говорит!','Трилогия Хоббит','Трилогия Властелин Колец','Трилогия Матрица','Железная леди','Коллектор','Константин: Повелитель тьмы','Запах женщины');
            showList($list, 1, "loveCinema", "1" );
            ?>

        </section>
<!--    </div>-->
<!--    <footer>-->
<!--        <p class="footerNote1">&copy; 2019 GRIDI</p>-->
<!--        <p class="footerNote2">г. Севастополь СевГУ</p>-->
<!--        <p class="anchor1"><a href="#top">Наверх</a></p>-->
<!--    </footer>-->
<!--</div>-->
<!--<script src="script/jquery-3.3.1.min.js"></script>-->
<!--<script src="script/currentTime.js"></script>-->
<!--</body>-->
<!--</html>-->