
        <section>
            <form id="contacts" action="mailto:quartz_90@mail.ru" method="post" name="contactsForm" onchange="checkedForm()" onsubmit="return true">
                <h3>Для связи со мной напишите свои личные данные и задайте вопрос.</h3>
                <p>Ваше ФИО:<br>
                    <input
                        id="fullName"
                        type="text"
                        size="40"
                        name="FIO"
                        class="inputLength1"
                        title="Фамилия Имя Отчество полностью"
                        placeholder="Фамилия Имя Отчество полностью"
                        data-tooltip-message="Введите Фамилия Имя Отчество полностью"
                    >
                </p>
                <p>Ваш телефон:<br>
                    <input id="telephone"
                        type="tel"
                        name="tel"
                        placeholder="+7/+3XXXXXXXXXXX"
                        title="+7 или +3 и 9-11 цифр"
                        data-tooltip-message="Введите номер телефона в формате: +7 или +3 и 9-11 цифр"
                    >
                </p>
                <p id="sexSelection" class="focusP2">Ваш пол<br>
                    <label data-tooltip-message="Выберите Ваш пол" for="men"><input id="men" type="radio" name="pol" value="a1">Мужской<br></label>
                    <label data-tooltip-message="Выберите Ваш пол" for="women"><input id="women" type="radio" name="pol" value="a2">Женский<br></label>
                </p>
                <p id="ageSelection" class="focusP2">Ваш возраст: <br>
                    <select id="ageSelectOption" class="focusSelect3" name="age" data-tooltip-message="Выберите свой возраст">
                        <option value="">Выберите свой возраст</option>
                        <option value="от 15 до 18">от 15 до 18</option>
                        <option value="от 19 до 22">от 19 до 22</option>
                        <option value="от 23 до 26">от 23 до 26</option>
                        <option value="от 27 до 30">от 27 до 30</option>
                        <option value="от 31 до 34">от 31 до 34</option>
                        <option value="от 35 до 38">от 35 до 38</option>
                        <option value="от 39 до 42">от 39 до 42</option>
                        <option value="от 43 до 46">от 43 до 46</option>
                        <option value="от 47 до 50">от 47 до 50</option>
                        <option value="от 51 до 54">от 51 до 54</option>
                    </select>
                </p>
                <p>Ваш e-mail:<br>
                    <input id="email" type="email" name="email" class="inputLength1" placeholder="Ваш e-mail" data-tooltip-message="Введите Ваш e-mail в формате: имя_ящика@домен">
                </p>
                <p id="date_of_birth">Дата рождения:<br>
                    <input name = "dateOfBirth" id = "dateOfBirth" data-tooltip-message="Выберите дату Вашего рождения" onclick = "showCalendar(new Date())" readonly value="">
                </p>
                <br>
                <div id = "calendar">
                    <select id = "month" onclick = "redrawCalendar()"></select>
                    <select id = "year" onclick="redrawCalendar()"></select>
                </div>
                <p>
                    <textarea id="question" name="question" data-tooltip-message="Напишите свой вопрос" placeholder="Напишите свой вопрос"></textarea>
                </p>
                <input type="submit" name="submit" class="submit" form="contacts" value="Отправить" disabled>
                <input type="reset" name="reset" class="reset" value="Сбросить" form="contacts" onclick="location.reload()">
            </form>
        </section>