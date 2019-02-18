<section>
    <h2>Тест по дисциплине "Безопасность жизнедеятельности"</h2>
    <form id="tests" action="mailto:quartz_90@mail.ru" method="post" name="testForm" onsubmit="return checkTestData()">
        <fieldset class="fSet1">
            <legend>Заполните все поля и дайте правильные ответы</legend>
            <p>Ваше ФИО:<br>
                <input type="text" size="40" name="FIO" class="inputLength1" title="Фамилия Имя Отчество полностью" data-tooltip-message="Введите Фамилия Имя Отчество полностью" placeholder="Фамилия Имя Отчество полностью">
            </p>
            <p>Ваша группа:<br>
                <select class="focusSelect2" name="groups" data-tooltip-message="Выберите группу, в которой Вы состоите">
                    <optgroup label="">
                        <option disabled selected value="choice">Выберите свою группу</option>
                    </optgroup>
                    <optgroup label="1 курс">
                        <option value="11">ИС/б-11-о</option>
                        <option value="12">ИС/б-12-о</option>
                        <option value="13">ИС/б-13-о</option>
                    </optgroup>
                    <optgroup label="2 курс">
                        <option value="21">ИС/б-21-о</option>
                        <option value="22">ИС/б-22-о</option>
                    </optgroup>
                    <optgroup label="3 курс">
                        <option value="31">ИС/б-31-о</option>
                        <option value="32">ИС/б-32-о</option>
                        <option value="33">ИС/б-33-о</option>
                    </optgroup>
                    <optgroup label="4 курс">
                        <option value="41">ИС/б-41-о</option>
                        <option value="42">ИС/б-42-о</option>
                        <option value="43">ИС/б-43-о</option>
                    </optgroup>
                </select>
            </p>
            <fieldset class="fSet2">
                <legend>Вопрос №1</legend>
                <p>Чрезвычайные ситуации техногенного характера (классификация, причины их возникновения, последствия,
                    ликвидация и действие населения на любом примере ЧС техногенного характера.<br>
                    <textarea name="answer" placeholder="Напишите свой ответ" data-tooltip-message="Напишите ответ. Не менее 30 слов"></textarea>
                </p>
            </fieldset>
            <fieldset class="fSet3" title="Выберите один из вариантов">
                <legend>Вопрос №2</legend>
                <p class="focusP">Убежища малой вместительности:<br>
                    <label data-tooltip-message="Выберите правильный ответ" for="ans0"><input id="ans0" type="radio" name="answer_r" value="r1">до 100 чел.<br></label>
                    <label data-tooltip-message="Выберите правильный ответ" for="ans1"><input id="ans1" type="radio" name="answer_r" value="r2">до 600 чел.<br></label>
                    <label data-tooltip-message="Выберите правильный ответ" for="ans2"><input id="ans2" type="radio" name="answer_r" value="r3">до 1000 чел.<br></label>
                </p>
            </fieldset>
            <fieldset class="fSet4" title="Выберите один из вариантов">
                <legend>Вопрос №3</legend>
                <p>Признаки отравления угарным газом?<br>
                    <select data-tooltip-message="Выберите правильный ответ" class="focusSelect" size="1" name="answ_sel">
                        <option disabled selected>Выберите ответ</option>
                        <option value="true_1">Слабость, тошнота, рвота, головокружение, покраснение кожных покровов</option>
                        <option value="false_0">Слабость, головокружение, побледнение кожных покровов</option>
                    </select>
                </p>
            </fieldset>
            <input type="submit" name="submit" class="submit" form="tests">
            <input type="reset" name="reset" class="reset" form="tests">
        </fieldset>
    </form>
</section>