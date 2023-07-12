
<div class="container">
    <div class="tabs__title">Оформление посылки</div>
    <div class="tabs">
        <div class="tabs__nav tabs__nav-pc">
            <span class="line" id="div0"></span>
            <div class="tab__nav-link"><span class="tab__num" id="div1">1</span><p class="tab__nav-title">Посылка</p></div>
            <div class="tab__nav-link"><span class="tab__num" id="div2">2</span><p class="tab__nav-title">Отправитель</p></div>
            <div class="tab__nav-link"><span class="tab__num" id="div3">3</span><p class="tab__nav-title">Получатель</p></div>
            <div class="tab__nav-link"><span class="tab__num" id="div4">4</span><p class="tab__nav-title">Оплата</p></div>
            <div class="tab__nav-link"><span class="tab__num" id="div5">5</span><p class="tab__nav-title">Наклейка</p></div>
            <span class="line" id="div6"></span>
        </div>
        <div class="tabs__nav tabs__nav-mob">
            <span class="line" id="div10"></span>
            <div class="tab__nav-link-mob active"><span class="tab__num" id="div11"></span></div>
            <div class="tab__nav-link-mob__right"><span class="tab__num" id="div12"></span></div>
        </div>
    </div>
    <div class="tab__content">
        <div id="tab_1" class="tab__item"><?php include('tab-1.php')?><button class="tab__next button button__next" data-but="2">Далее</button></div>
        <div id="tab_2" class="tab__item"><?php include('tab-2.php')?><button class="tab__prev button button__prev" data-but="1">Назад</button><button class="tab__next button button__next" data-but="3">Далее</button></div>
        <div id="tab_3" class="tab__item"><?php include('tab-3.php')?><button class="tab__prev button button__prev" data-but="2">Назад</button><button class="tab__next button button__next" data-but="4">Далее</button></div>
        <div id="tab_4" class="tab__item"><?php include('tab-4.php')?><button class="tab__prev button button__prev" data-but="3">Назад</button><button class="tab__next button button__next" data-but="5">Далее</button></div>
        <div id="tab_5" class="tab__item"><?php include('tab-5.php')?><button class="tab__prev button button__prev" data-but="4">Назад</button></div>
    </div>
</div>
<script src="/js/line.js"></script>
<script src="/js/choice.js"></script>
<script>
    let openTab = {
        tabNumBig: document.getElementById('div11'),
        tabNumSmall: document.getElementById('div12'),
        openProg1() {
            let num = document.querySelectorAll('.tab__nav-link')[0];
            num.classList.add('active');
        },
        openTab1() {
            let tabItem = document.querySelectorAll('.tab__item')[0];
            tabItem.classList.add('active');
            this.tabNumBig.innerHTML = '1';
            this.tabNumSmall.innerHTML = '2';

        },
        closeProg1() {
            let num = document.querySelectorAll('.tab__nav-link')[0];
            num.classList.remove('active');
            let tabItem = document.querySelectorAll('.tab__item')[0];
            tabItem.classList.remove('active');
        },
        closeTab1() {
            let tabItem = document.querySelectorAll('.tab__item')[0];
            tabItem.classList.remove('active');
        },
        openProg2() {
            let num = document.querySelectorAll('.tab__nav-link')[1];
            num.classList.add('active');
            let tabItem = document.querySelectorAll('.tab__item')[1];
            tabItem.classList.add('active');
        },
        openTab2() {
            let tabItem = document.querySelectorAll('.tab__item')[1];
            tabItem.classList.add('active');
            this.tabNumBig.innerHTML = '2';
            this.tabNumSmall.innerHTML = '3';
        },
        closeProg2() {
            let num = document.querySelectorAll('.tab__nav-link')[1];
            num.classList.remove('active');
            let tabItem = document.querySelectorAll('.tab__item')[1];
            tabItem.classList.remove('active');
        },
        closeTab2() {
            let tabItem = document.querySelectorAll('.tab__item')[1];
            tabItem.classList.remove('active');
        },
        openProg3() {
            let num = document.querySelectorAll('.tab__nav-link')[2];
            num.classList.add('active');
            let tabItem = document.querySelectorAll('.tab__item')[2];
            tabItem.classList.add('active');
        },
        openTab3() {
            let tabItem = document.querySelectorAll('.tab__item')[2];
            tabItem.classList.add('active');
            this.tabNumBig.innerHTML = '3';
            this.tabNumSmall.innerHTML = '4';
        },
        closeProg3() {
            let num = document.querySelectorAll('.tab__nav-link')[2];
            num.classList.remove('active');
            let tabItem = document.querySelectorAll('.tab__item')[2];
            tabItem.classList.remove('active');
        },
        closeTab3() {
            let tabItem = document.querySelectorAll('.tab__item')[2];
            tabItem.classList.remove('active');
        },
        openProg4() {
            let num = document.querySelectorAll('.tab__nav-link')[3];
            num.classList.add('active');
            let tabItem = document.querySelectorAll('.tab__item')[3];
            tabItem.classList.add('active');
        },
        openTab4() {
            let tabItem = document.querySelectorAll('.tab__item')[3];
            tabItem.classList.add('active');
            this.tabNumBig.innerHTML = '4';
            this.tabNumSmall.innerHTML = '5';
        },
        closeProg4() {
            let num = document.querySelectorAll('.tab__nav-link')[3];
            num.classList.remove('active');
            let tabItem = document.querySelectorAll('.tab__item')[3];
            tabItem.classList.remove('active');
        },
        closeTab4() {
            let tabItem = document.querySelectorAll('.tab__item')[3];
            tabItem.classList.remove('active');
        },
        openProg5() {
            let num = document.querySelectorAll('.tab__nav-link')[4];
            num.classList.add('active');
            let tabItem = document.querySelectorAll('.tab__item')[4];
            tabItem.classList.add('active');
        },
        openTab5() {
            let tabItem = document.querySelectorAll('.tab__item')[4];
            tabItem.classList.add('active');
        },
        closeProg5() {
            let num = document.querySelectorAll('.tab__nav-link')[4];
            num.classList.remove('active');
            let tabItem = document.querySelectorAll('.tab__item')[4];
            tabItem.classList.remove('active');
        },
        closeTab5() {
            let tabItem = document.querySelectorAll('.tab__item')[4];
            tabItem.classList.remove('active');
        },
    }
    openTab.openProg1();
    openTab.openTab1();
    document.addEventListener('click', function (e) {
        if (e.target.dataset.but) {
            e.preventDefault();
            if (e.target.dataset.but == 1) {
                openTab.openTab1();
                openTab.closeProg2();
                openTab.closeTab2();
                connect(div1, div2, "#ffb194", 2);

            }
            if (e.target.dataset.but == 2) {
                openTab.openProg2();
                openTab.openTab2();
                openTab.closeTab1();
                openTab.closeTab3();
                openTab.closeProg3();
                connect(div1, div2, "#ff632a", 2);
                connect(div2, div3, "#ffb194", 2);
            }
            if (e.target.dataset.but == 3) {
                openTab.openProg3();
                openTab.openTab3();
                openTab.closeTab2();
                openTab.closeTab4();
                openTab.closeProg4();
                connect(div2, div3, "#ff632a", 2);
                connect(div3, div4, "#ffb194", 2);
            }
            if (e.target.dataset.but == 4) {
                openTab.openProg4();
                openTab.openTab4();
                openTab.closeTab3();
                openTab.closeTab5();
                openTab.closeProg5();
                connect(div3, div4, "#ff632a", 2);
                connect(div4, div5, "#ffb194", 2);
            }
            if (e.target.dataset.but == 5) {
                openTab.openProg5();
                openTab.openTab5();
                openTab.closeTab4();
                connect(div4, div5, "#ff632a", 2);
                connect(div5, div6, "#ff632a", 2);
            }
        }
    });
</script>
