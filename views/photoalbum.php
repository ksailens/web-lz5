<section>
    <h2>Мой фотоальбом</h2>
    <div class="gallery">
        <ul class="img-list">
            <?php
            $hrefs = array("img/cirilla.jpg", "img/doctor_who.jpg", "img/dovakin.jpg", "img/geralt.jpg", "img/illidan.jpg",
                "img/jaina.jpeg", "img/Jean.jpeg", "img/konstantin.jpg", "img/legolas.jpg", "img/neo.jpg","img/ragnaros.jpg",
                "img/silvana.jpeg", "img/tauriel.jpg", "img/thrall.jpg", "img/tiranda.png");
            $srcs = array("img/cirilla-sm.jpg", "img/doctor_who-sm.jpg", "img/dovakin-sm.jpg", "img/geralt-sm.jpg", "img/illidan-sm.jpg",
                "img/jaina-sm.jpg", "img/Jean-sm.jpg", "img/konstantin-sm.jpg", "img/legolas-sm.jpg", "img/neo-sm.jpg","img/ragnaros-sm.jpg",
                "img/silvana-sm.jpg", "img/tauriel-sm.jpg", "img/thrall-sm.jpg", "img/tiranda-sm.png");
            $alts = array("Цирилла","Доктор Кто","Довакин","Геральт","Иллидан",
                "Джайна Праудмур","Джин Грей","Джон Константин","Леголас","Нео",
                "Рагнарос","Сильвана Ветрокрылая","Тауриэль","Тралл","Тиранда Шелест Ветра");
            for ($i = 0; $i < count($alts); $i++) {
                echo "<li><a href=$hrefs[$i]  title=$alts[$i]> <img src=$srcs[$i] alt=$alts[$i]>$alts[$i] </a></li>";
            }
            ?>
        </ul>
        <div class="lightbox">
            <div class="overlay"></div>
            <figure>
                <span class="prev">← prev</span>
                <span class="caption"></span>
                <span class="next">next →</span>
                <img src="#">
            </figure>
        </div>
    </div>
</section>