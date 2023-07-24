<section class="tab1">
    <section class="method">
        <div class="section__block-title__h1">Выберите способ отправки посылки</div>
        <div class="section__block">
            <label class="section__block-label section__block-label__first" for="radioDelivery1">
                <input checked="checked" type="radio" id="radioDelivery1" class="radio__input"  name="delivery-method" value="qr">
                <span class="radio__label">Выбрано Без наклейкой</span>
                <div class="section__block-holder">
                    <img src="/../images/jpeg/qr.jpg" alt="mobile" class="section__block-img">
                    <div class="section__block-title">Без наклейки</div>
                    <p class="section__block-text">Вам не нужно ничего печатать. <br>После оплаты доставки к вам на телефон <br>придётQR-код и SmartPIN.</p>
                </div>
            </label>
            <label class="section__block-label section__block-label__first" for="radioDelivery2">
                <input type="radio" id="radioDelivery2" class="radio__input"  name="delivery-method" value="pdf">
                <span class="radio__label">Выбрано с наклейкой</span>
                <div class="section__block-holder">
                    <img src="/../images/jpeg/qr1.jpg" alt="printer" class="section__block-img">
                    <div class="section__block-title">С наклейкой</div>
                    <p class="section__block-text">После оплаты заказа распечатайте <br>этикетку и наклейте ее на посылку.<br>&nbsp;</p>
                </div>
            </label>
        </div>
    </section>
    <section class="country">
        <div class="section__block-title__h1">Выбор страны адресата</div>
        <select name="country" id="country" class="select__country">
            <?php foreach ($langs as $lang): ?>
                <option value="<?=$lang['country_name']?>"><?=$lang['country_name']?></option>
            <?php endforeach; ?>
        </select>
    </section>
    <section class="section__size">
        <div class="section__block-title__h1">Выберите размер посылки</div>
        <div class="section__block">
            <label class="section__block-label" for="radioSize1">
                <input checked="checked" type="radio" id="radioSize1" class="radio__input" name="parcel-size" value="1">
                <span class="radio__label">Выбрано Малый</span>
                <div class="section__block-holder">
                    <img src="/../images/png/small.png" alt="smallParcel" class="section__block-img">
                    <div class="section__block-title">Малый</div>
                    <p class="section__block-text">от 100 рублей</p>
                    <p class="section__block-text">Максимальные размеры <br>30×30×30 см</p>

                </div>
            </label>
            <label class="section__block-label" for="radioSize2">
                <input type="radio" id="radioSize2" class="radio__input" name="parcel-size" value="2">
                <span class="radio__label">Выбрано Средний</span>
                <div class="section__block-holder">
                    <img src="/../images/png/medium.png" alt="mediumParcel" class="section__block-img">
                    <div class="section__block-title">Средний</div>
                    <p class="section__block-text">от 150 рублей</p>
                    <p class="section__block-text">Максимальные размеры <br>60×40×30 см</p>

                </div>
            </label>
            <label class="section__block-label" for="radioSize3">
                <input type="radio" id="radioSize3" class="radio__input"  name="parcel-size" value="3">
                <span class="radio__label">Выбрано Большой</span>
                <div class="section__block-holder">
                    <img src="/../images/png/big.png" alt="bigParcel" class="section__block-img">
                    <div class="section__block-title">Большой</div>
                    <p class="section__block-text">от 200 рублей</p>
                    <p class="section__block-text">Максимальные размеры <br>100×50×50 см</p>

                </div>
            </label>
        </div>
    </section>
    <section class="agree">
        <a href="/../images/off.pdf" target="_blank" class="agree__link">Обязательно ознакомьтесь со списком запрещенных предметов к отсылке</a>
        <div class="checkbox__package">
            <label class="checkbox__package-label">
                <input type="checkbox" class="checkbox__package-input" required>
                <span class="check__box"></span>
                Я ознакомился с условиями
                <a href="/../images/off.pdf" target="_blank"> упаковки посылок</a>
            </label>
        </div>
        <div class="package__error">Это поле обязательно к прочтению, чтобы продолжить, выберите этот флажок</div>
    </section>
</section>

