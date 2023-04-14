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
