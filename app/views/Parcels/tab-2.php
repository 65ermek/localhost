<section class="tab2">
    <section class="choice">
        <div class="section__block-title__h1">Выберите, как вы хотите отправить посылку</div>
        <div class="section__block">
            <label class="section__block-label" for="radioPost1">
                <input checked="checked" type="radio" id="radioPost1" class="radio__input"  name="choiceSize" value="block1">
                <span class="radio__label">Выбрано</span>
                <div class="section__block-holder">
                    <img src="/../images/jpeg/postamat.jpg" alt="small" class="section__block-img">
                    <div class="section__block-title">Отнести на Почту</div>
                    <p class="section__block-text">+ 0 рублей</p>
                </div>
            </label>
            <label class="section__block-label" for="radioPost2">
                <input type="radio" id="radioPost2" class="radio__input"  name="choiceSize" value="block3">
                <span class="radio__label">Выбрано</span>
                <div class="section__block-holder">
                    <img src="/../images/jpeg/curier.jpg" alt="courier" class="section__block-img">
                    <div class="section__block-title">Вызвать курьера домой</div>
                    <p class="section__block-text">+ 100 рублей</p>
                </div>
            </label>
        </div>
    </section>
    <section class="postChoice">
        <div id="block1" class="postChoice__block">
            <div class="info__title">Вы можете положить посылку в ближайший почтовый ящик</div>
            <div class="info__link">Посмотреть ближайшие постаматы ...</div>
        </div>
        <div id="block3" class="postChoice__block">
            <div class="section__block-title__h1">Запланировать приезд курьера</div>
            <div class="form-control">Сбор осуществляется с 8:00 до 18:00.</div>
        </div>
    </section>
    <section class="sender">
        <div class="section__block-title__h1">Кто посылку отсылает</div>
        <input type="radio" name="type" value="individual" checked> Частное лицо
        <input type="radio" name="type" value="corporate"> Юридическое лицо
    </section>
    <section class="senderData">
        <div class="sender__name">
            <label for="sender-name">Имя и Фамилия отправителя:</label>
            <input type="text" id="sender-name" name="sender-name" required>
        </div>
        <div id="corporate-fields" style="display:none;">
            <label for="company-name">Название фирмы:</label>
            <input type="text" id="company-name" name="company-name" required>
            <label for="contact-name">Имя и Фамилия контактного лица:</label>
            <input type="text" id="contact-name" name="contact-name" required>
        </div>
        <div class="sender__street">
            <label for="street">Улица и номер дома:</label>
            <input type="text" id="street" name="street" required>
        </div>
        <div class="sender__city">
            <label for="city">Город или посёлок:</label>
            <input type="text" id="city" name="city" required>
            <label for="postcode">Индекс</label>
            <input type="text" id="postcode" name="postcode" required>
        </div>
        <div class="sender__phone">
            <label for="phone">Номер телефона:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="sender__email">
            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="sender__note">
            <label for="sender__note">Важная информация</label>
            <textarea name="senderNote" id="sender__note" maxlength="50"></textarea>
        </div>
    </section>
</section>
