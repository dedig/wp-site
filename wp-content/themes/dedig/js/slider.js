var nBanners = document.querySelectorAll('.banner').length;
var dots = [];
var selected = 0;
var change = false;

var animated = function(element) {
    this.element = element;
    this.marginLeft = 0;
    this.timer = 0;
    this.step;
    this.reset = function() {
        this.timer = 0;
        this.marginLeft = 0;
        this.element.style.marginLeft = '0';
    }
}

var dot = function(element) {
    this.element = element;
    this.marginLeft;
    this.index;
    this.checked = false;
    var temp = this;

    element.addEventListener('click', function() {
        bar.reset();
        temp.checked = true;
        window.selected = temp.index;
    });
};

var bar = new animated(document.getElementById('bar-fill'));
var slider = new animated(document.getElementById('slidesContainer'));
//var slider = document.getElementById('slidesContainer');
//sliderAnim = new animation();

slider.speed = 5;
bar.end = 300;
bar.step = 100 / bar.end;


for (var i = 0; i < nBanners; i ++) {
    dots.push(new dot(document.getElementsByClassName('slider-dots')[i]));
    dots[i].marginLeft = i * 100;
    dots[i].index = i;
    if (i == 0)
      dots[i].checked = true;
}


function barLoader() {
    if (bar.timer < bar.end) {
        bar.marginLeft += bar.step;
        bar.element.style.marginLeft = String(bar.marginLeft) + '%';
        bar.timer++;
        if (bar.timer == bar.end)
            change = true;
    }
}

function cleanDots() {
    for (i in dots) {
        if (i != selected) {
            dots[i].checked = false;
        }
    }
}

function changeDotsColor() {
    for (i in dots) {
        if (dots[i].checked == true)
            dots[i].element.style.backgroundColor = '#0064c5';
        else if (dots[i].checked == false)
            dots[i].element.style.backgroundColor = '#bbbbbb';
    }
}

function changeChecked() {
    if (change) {
        for (i in dots) {
            if (dots[i].checked == true) {
                if (i == nBanners - 1) {
                    dots[i].checked = false;
                    dots[0].checked = true;
                    selected = 0;
                }
                else if (i < nBanners - 1) {
                    dots[i].checked = false;
                    selected = Number(i) + 1;
                    dots[Number(i) + 1].checked = true;
                }
                change = false;
                break;
            }
        }
    }
}

function slide() {
    if (dots[selected].checked == true && /* sliderAnim.currentFrame */ slider.marginLeft != dots[selected].marginLeft) {
        slider.step = slider.marginLeft - dots[selected].marginLeft;
        if (slider.step < 0)
            slider.step *= -1;

        if (slider.step > 100)
            slider.step = slider.speed / (slider.step / 100);
        else
            slider.step = slider.speed;

        /*
        sliderAnim.animate(0, 100, function() {
            slider.style.marginLeft = '-' + String(sliderAnim.currentFrame) + '%';
            if (slider.marginLeft <= dots[selected].marginLeft) {
                slider.marginLeft = dots[selected].marginLeft;
                bar.reset();
            }
        }, false, 10); */

        if (slider.marginLeft > dots[selected].marginLeft) {
            slider.marginLeft -= slider.step;
            if (slider.marginLeft <= dots[selected].marginLeft) {
                slider.marginLeft = dots[selected].marginLeft;
                bar.reset();
            }
            slider.element.style.marginLeft = '-' + String(slider.marginLeft) + '%';
        }
        else if (slider.marginLeft < dots[selected].marginLeft) {
            slider.marginLeft += slider.step;
            if (slider.marginLeft >= dots[selected].marginLeft) {
                slider.marginLeft = dots[selected].marginLeft;
                bar.reset();
            }
            slider.element.style.marginLeft = '-' + String(slider.marginLeft) + '%';
        }
    }
}


function update() {
    barLoader();
    changeChecked();
    cleanDots();
    changeDotsColor();
    slide();
}

function loop() {

    update();
    
    setTimeout(function() {
        loop();
    }, 30);
}

loop();