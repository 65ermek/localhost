let choice = function () {
    const choiceSize = document.getElementsByName('choiceSize');
    choiceSize.forEach((choiceSize) => {
        choiceSize.addEventListener('click', () => {
            const selectValue = choiceSize.value;
            const blocks = document.querySelectorAll('[id^=block]');
            blocks.forEach((block) => {
                if (block.id === selectValue) {
                    block.style.display = 'block';
                } else {
                    block.style.display = 'none';
                }
            });
        });
    });
    let clickBut = document.querySelector('#block1');
    clickBut.style.display= 'block';
}
let send = function () {
    const sendSize = document.getElementsByName('sendSize');
    sendSize.forEach((sendSize) => {
        sendSize.addEventListener('click', () => {
            const selectValue = sendSize.value;
            const blocks = document.querySelectorAll('[id^=blockSend]');
            blocks.forEach((block) => {
                if (block.id === selectValue) {
                    block.style.display = 'block';
                } else {
                    block.style.display = 'none';
                }
            });
        });
    });
    let clickBut = document.querySelector('#blockSend1');
    clickBut.style.display= 'block';
}
let sender = function (){
    const radioGroup = document.getElementsByName('type');
    const corporateFields = document.getElementById('corporate-fields');

    for (let i = 0; i < radioGroup.length; i++) {
        radioGroup[i].addEventListener('click', function() {
            if (radioGroup[i].value === 'corporate') {
                corporateFields.style.display = 'block';
                document.getElementById('sender-name').parentNode.style.display = 'none';
            } else {
                corporateFields.style.display = 'none';
                document.getElementById('sender-name').parentNode.style.display = 'block';
            }
        });
    }
}
choice();
send();
sender();
