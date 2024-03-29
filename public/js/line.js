function connect(div1, div2, color, thickness) {
    const off1 = getOffset(div1);
    const off2 = getOffset(div2);
    const x1 = off1.left + (off1.width/2);
    const y1 = off1.top + (off1.height/2);
    const x2 = off2.left + (off2.width/2);
    const y2 = off2.top + off2.height/2;
    const length = Math.sqrt(((x2-x1) * (x2-x1)) + ((y2-y1) * (y2-y1)));
    const cx = ((x1 + x2) / 2) - (length / 2);
    const cy = ((y1 + y2) / 2) - (thickness / 2);
    const angle = Math.atan2((y1-y2),(x1-x2))*(180/Math.PI);
    let line = document.createElement('div');
    line.setAttribute('style', "padding:0px; margin:0px; height:" + thickness + "px; background-color:" + color + "; line-height:1px; position:absolute; left:" + cx + "px; top:" + cy + "px; width:" + length + "px; -moz-transform:rotate(" + angle + "deg); -webkit-transform:rotate(" + angle + "deg); -o-transform:rotate(" + angle + "deg); -ms-transform:rotate(" + angle + "deg); transform:rotate(" + angle + "deg); z-index: -1;")
    document.body.appendChild(line);
}

function getOffset( el ) {
    const rect = el.getBoundingClientRect();
    return {
        left: rect.left + window.pageXOffset,
        top: rect.top + window.pageYOffset,
        width: rect.width || el.offsetWidth,
        height: rect.height || el.offsetHeight
    };
}
window.testIt = function() {
    let div0 = document.getElementById('div0');
    let div1 = document.getElementById('div1');
    let div2 = document.getElementById('div2');
    let div3 = document.getElementById('div3');
    let div4 = document.getElementById('div4');
    let div5 = document.getElementById('div5');
    let div6 = document.getElementById('div6');

    connect(div0, div1, "#ff632a", 2);
    connect(div1, div2, "#ffb194", 2);
    connect(div2, div3, "#ffb194", 2);
    connect(div3, div4, "#ffb194", 2);
    connect(div4, div5, "#ffb194", 2);
    connect(div5, div6, "#ffb194", 2);
}
window.mobilIt = function () {
    let div10 = document.getElementById('div10');
    let div11 = document.getElementById('div11');
    let div12 = document.getElementById('div12');
    connect(div10, div11, "#ff632a", 2);
    connect(div11, div12, "#ffb194", 2);
}
if (isMobile.any()) {
    mobilIt();
} else  {
    testIt();
}
