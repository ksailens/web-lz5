<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Персональный сайт Гридасовой Карины. Главная страница.</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
<!--    <link href="../css/bootstrap.min.css" rel="stylesheet">-->
<!--    <link href="../css/layout.css" rel="stylesheet">-->
    <script src="../script/sessionStorageHistory.js"></script>
    <script src="../script/globalHistory.js"></script>
</head>
<body onload = "hideCalendar()">
<div class="wrapper">
    <div class="content">
        <div class="currentTime" id="currentTime"></div>
        <a name="top"></a>
        <header>
            <h1>Вы попали на персональный сайт <br> Гридасовой Карины Владиславовны</h1>
        </header>
        <nav>
            <ul class="mainMenu">
                <li><a id="MainPage" href="/">Главная</a></li>
                <li><a id="AboutMe" href="/aboutMe" onmouseover="setBackground('AboutMe')" onmouseout="restore('AboutMe')">Обо мне</a></li>
                <li><a onclick = "showList()" id="myInterests" href="#" onmouseover="setBackground('myInterests')" onmouseout="restore('myInterests')">Мои интересы</a></li>
                <li><a id="Photoalbum" href="/photoalbum" onmouseover="setBackground('Photoalbum')" onmouseout="restore('Photoalbum')">Мой фотоальбом</a></li>
                <li><a id="Education" href="/education" onmouseover="setBackground('Education')" onmouseout="restore('Education')">Образование</a></li>
                <li><a id="Connection" href="/contacts" onmouseover="setBackground('Connection')" onmouseout="restore('Connection')">Связь со мной</a></li>
                <li><a id="Test" href="/test" onmouseover="setBackground('Test')" onmouseout="restore('Test')">Входное тестирование</a></li>
                <li class="last"><a id="History" href="/history" onmouseover="setBackground('History')" onmouseout="restore('History')">История просмотров</a></li>
            </ul>
            <div class="mainMenu navigation" id ="inter">
                <script src="../script/dropMenu.js"></script>
            </div>
        </nav>
            <?php include 'views/'.$content_view; ?>
    </div>
    <footer>
        <p class="footerNote1">&copy; 2019 GRIDI</p>
        <p class="footerNote2">г. Севастополь СевГУ</p>
        <p class="anchor1"><a href="#top">Наверх</a></p>
    </footer>
</div>
<script src="../script/jquery-3.3.1.min.js"></script>
<script src="../script/check.js"></script>
<script src="../script/onMenuHoverBackgr.js"></script>
<script src="../script/calendar.js"></script>
<script src="../script/currentTime.js"></script>
<script src="../script/check.js"></script>
<script src="../script/tooltips.js"></script>
<script src="../script/table.js"></script>
<script src="../script/clearCookies.js"></script>
<script src="../script/calendar.js"></script>
<script src="../script/list.js"></script>
<script src="../script/history.js"></script>
</body>
</html>
