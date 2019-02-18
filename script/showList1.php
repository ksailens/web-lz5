 <?php
                function showList1($hrefs, $listobjects){
                    echo "<ul>";
                    for ($i = 0; $i < count($hrefs); $i++){
                        echo "<li> <a href=\"" . $hrefs[$i] . "\"> " . $listobjects[$i] . " </a>";
                    }
                    echo "</ul>";
                }
                $hrefs = array('myInterests.php#loveCinema', 'myInterests.php#loveBook', 'myInterests.php#loveMusic');
                $listobject = array('Любимые фильмы', 'Любимые книги', 'Любимая музыка');
                showList1($hrefs,$listobject);
                ?>