<section class="tab1">
    <section class="method">
        <div class="tabs__title">Выберите способ отправки посылки</div>
        <div class="section__block">
            <label class="section__block-label section__block-label__first" for="radioDelivery1">
                <div class="section__block-holder">
                    <div class="section__block-title">Без наклейки</div>
                    <p class="section__block-text">Вам не нужно ничего печатать, вы получаете SmartPIN и QR-код с оплаченной доставкой</p>
                    <div class="step__one-radio">
                        <input checked="checked" type="radio" id="radioDelivery1" class="radio__input"  name="delivery-method" value="qr">
                        <label for="radioDelivery1" class="radio__label">Выбрано</label>
                    </div>
                    <img src="/../images/jpeg/qr.jpg" alt="mobile" class="section__block-img">
                </div>
            </label>
            <label class="section__block-label section__block-label__first" for="radioDelivery2">
                <div class="section__block-holder">
                    <div class="section__block-title">С наклейкой</div>
                    <p class="section__block-text">После оплаты заказа распечатайте этикетку и обязательно наклейте ее на посылку</p>
                    <div class="step__one-radio">
                        <input type="radio" id="radioDelivery2" class="radio__input"  name="delivery-method" value="pdf">
                        <label for="radioDelivery2" class="radio__label">Выбрано</label>
                    </div>
                    <img src="/../images/jpeg/qr1.jpg" alt="printer" class="section__block-img">
                </div>
            </label>
        </div>
    </section>
    <section class="country">
        <div class="tabs__title">Выбор страны адресата</div>
    </section>
    <section class="size">
        <div class="tabs__title">Выберите размер посылки</div>
        <div class="section__block">
            <label class="section__block-label" for="radioSize1">
                <div class="section__block-holder">
                    <div class="section__block-title">Малый</div>
                    <p class="section__block-text">от 100 рублей</p>
                    <p class="section__block-text">Максимальные размеры 30×30×30 см</p>
                    <div class="step__one-radio">
                        <input checked="checked" type="radio" id="radioSize1" class="radio__input" name="parcel-size" value="1">
                        <label for="radioSize1" class="radio__label">Выбрано</label>
                    </div>
                    <img src="/../images/png/small.png" alt="smallParcel" class="section__block-img">
                </div>
            </label>
            <label class="section__block-label" for="radioSize2">
                <div class="section__block-holder">
                    <div class="section__block-title">Средний</div>
                    <p class="section__block-text">от 150 рублей</p>
                    <p class="section__block-text">Максимальные размеры 60×40×30 см</p>
                    <div class="step__one-radio">
                        <input type="radio" id="radioSize2" class="radio__input" name="parcel-size" value="2">
                        <label for="radioSize2" class="radio__label">Выбрано</label>
                    </div>
                    <img src="/../images/png/medium.png" alt="mediumParcel" class="section__block-img">
                </div>
            </label>
            <label class="section__block-label" for="radioSize3">
                <div class="section__block-holder">
                    <div class="section__block-title">Большой</div>
                    <p class="section__block-text">от 200 рублей</p>
                    <p class="section__block-text">Максимальные размеры 100×50×50 см</p>
                    <div class="step__one-radio">
                        <input type="radio" id="radioSize3" class="radio__input"  name="parcel-size" value="3">
                        <label for="radioSize3" class="radio__label">Выбрано</label>
                    </div>
                    <img src="/../images/png/big.png" alt="bigParcel" class="section__block-img">
                </div>
            </label>
        </div>
    </section>
    <section class="agree">
        <a href="/../images/off.pdf" target="_blank" class="agree__link">Обязательно ознакомьтесь со списком запрещенных предметов к отсылке</a>
        <div class="checkbox__package">
            <input name="package" type="checkbox" class="checkbox__package-input" required>
            <label for="package" class="checkbox__package-label">Я ознакомился с условиями
                <a href="/../images/off.pdf" target="_blank"> упаковки посылок</a>
            </label>
        </div>
        <div class="package__error">Это поле обязательно к прочтению, чтобы продолжить, выберите этот флажок</div>
    </section>
</section>

