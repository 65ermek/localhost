<section class="tab3">
    <section class="deliver">
        <div class="section__block-title__h1">Выберите, куда вы хотите доставить посылку</div>
        <div class="section__block">
            <label class="section__block-label" for="radioRecipient1">
                <input checked type="radio" id="radioRecipient1" class="radio__input"  name="sendSize" value="blockSend1">
                <span class="radio__label">Выбрано</span>
                <div class="section__block-holder">
                    <img src="/../images/jpeg/postamat.jpg" alt="postamat" class="section__block-img">
                    <div class="section__block-title">Доставить на Постамат</div>
                    <p class="section__block-text">+ 0 рублей</p>
                </div>
            </label>
            <label class="section__block-label" for="radioRecipient2">
                <input type="radio" id="radioRecipient2" class="radio__input"  name="sendSize" value="blockSend3">
                <span class="radio__label">Выбрано</span>
                <div class="section__block-holder">
                    <img src="/../images/jpeg/curier.jpg" alt="courier" class="section__block-img">
                    <div class="section__block-title">Доставить домой</div>
                    <p class="section__block-text">+ 100 рублей</p>
                </div>
            </label>
        </div>
    </section>
    <section class="sentChoice">
        <div id="blockSend1" class="sentChoice__block">
            <div class="section__block-title__h1">Выберите, ближайший почтовый офис</div>
            <div class="info__link">Найти ближайший почтовый офис ...</div>
        </div>
        <div id="blockSend2" class="sentChoice__block">
            <div class="checkbox__cod">
                <input name="cod" type="checkbox" class="checkbox__package-input" required>
                <label for="cod" class="checkbox__package-label">
                    Наложенный платёж
                </label>
            </div>
        </div>
    </section>
    <section class="deliverData">
        <div class="section__block-title__h1">Кому посылку посылаете</div>
        <div class="deliver__name">
            <label for="deliver-name">Имя и Фамилия получателя:</label>
            <input type="text" id="deliver-name" name="deliver-name" required>
        </div>
        <div class="deliver__phone">
            <label for="phone">Номер телефона получателя:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="deliver__email">
            <label for="email">Электронная почта получателя:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="deliver__note">
            <label for="deliver__note">Важная информация</label>
            <textarea name="deliverNote" id="deliver__note" maxlength="50"></textarea>
        </div>
    </section>
</section>
