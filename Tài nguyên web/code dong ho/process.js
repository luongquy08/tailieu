//button
var time = 10; // đơn vị là giây
var button = document.getElementById('button');
button.onclick = function() {demlui(button, 'demnguoc', time)}

//button 1
var time1 = 80;
var button1 = document.getElementById('button1');
button1.onclick = function() {demlui(button1, 'demnguoc1', time1)}

//button 2
var time2 = 500;
var button2 = document.getElementById('button2');
button2.onclick = function() {demlui(button2, 'demnguoc2', time2)}

function demlui(reset, click, time) {
    var phut = Math.floor(time/60);
    var giay = time - phut * 60;
    var click = document.getElementById(click);
    var timer = setInterval(function() {
    reset.style.display = 'none';      
    click.style.display = 'inline';      
        if(giay == 0) {
            if(phut == 0) {
                reset.style.display = 'inline';      
                click.style.display = 'none';      
                clearInterval(timer);
                return;
            } else {
                phut--;
                giay = 60;
            }
        }

        if(phut > 0) {
            var sophut = phut + ' phút';
        } else {
            var sophut = '';
        }
        click.innerHTML = sophut + ' ' + giay + ' ' + 'giây';
        giay--;
    }, 1000);
}


