<section class="tab2">
    <section class="choice">
        <div class="tabs__title">Выберите, как вы хотите отправить посылку</div>
        <div class="section__block">
            <label class="section__block-label" for="radioPost1">
                <div class="section__block-holder">
                    <div class="section__block-title">Отнести на отделение Почты</div>
                    <p class="section__block-text">+ 0 рублей</p>
                    <div class="step__one-radio">
                        <input checked="checked" type="radio" id="radioPost1" class="radio__input"  name="choiceSize" value="block1">
                        <label for="radioPost1" class="radio__label">Выбрано</label>
                    </div>
                    <img src="/../images/png/small.png" alt="small" class="section__block-img">
                </div>
            </label>
            <label class="section__block-label" for="radioPost2">
                <div class="section__block-holder">
                    <div class="section__block-title">Доставить на Постамат боксы</div>
                    <p class="section__block-text">+ 0 рублей</p>
                    <div class="step__one-radio">
                        <input type="radio" id="radioPost2" class="radio__input"  name="choiceSize" value="block2">
                        <label for="radioPost2" class="radio__label">Выбрано</label>
                    </div>
                    <img src="/../images/png/medium.png" alt="medium" class="section__block-img">
                </div>
            </label>
            <label class="section__block-label" for="radioPost3">
                <div class="section__block-holder">
                    <div class="section__block-title">Вызвать курьера домой</div>
                    <p class="section__block-text">+ 100 рублей</p>
                    <div class="step__one-radio">
                        <input type="radio" id="radioPost3" class="radio__input"  name="choiceSize" value="block3">
                        <label for="radioPost3" class="radio__label">Выбрано</label>
                    </div>
                    <img src="/../images/png/big.png" alt="big" class="section__block-img">
                </div>
            </label>
        </div>
    </section>
    <section class="postChoice">
        <div id="block1" class="postChoice__block">
            <div class="info__title">Вы можете положить посылку в ближайший почтовый ящик</div>
            <div class="info__link">Посмотреть ближайшие постаматы ...</div>
        </div>
        <div id="block2" class="postchoice__block">
            <div class="info__title">Вы можете отнести посылку в ближайший почтовый офис</div>
            <div class="info__link">Посмотреть ближайшие постаматы ...</div>
        </div>
        <div id="block3" class="postchoice__block">
            <div class="tabs__title">Запланировать приезд курьера</div>
            <div class="form-control">Сбор осуществляется с 8:00 до 18:00.</div>
        </div>
    </section>
    <section class="sender">
        <div class="tabs__title">Кто посылку отсылает</div>
        <input type="radio" id="person" name="senderPost" checked="checked">
        <label for="person">Частное лицо</label>
        <input type="radio" id="firm" name="senderPost">
        <label for="firm">Юридическое лицо</label>
    </section>
    <section class="senderData">
        <label for="sender__name">Имя и Фамилия отправителя</label>
        <input type="text" id="sender__name" class="senderData__name">
        <label for="sender__street">Улица и номер дома</label>
        <input type="text" id="sender__street" class="senderData__street">
        <label for="sender__city">Город или посёлок</label>
        <input type="text" id="sender__city" class="senderData__city">
        <label for="sender__postcode">Индекс</label>
        <input type="text" id="sender__postcode" class="senderData__postcode">
    </section>
</section>
