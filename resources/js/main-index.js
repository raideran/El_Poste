var menuButton = document.getElementById('menu-btn');
var navBar = document.getElementById('nav-bar');
var counter = false;

$(document).ready(main());

function main() {
    $('.menu-btn').click(function () {
        if (counter == false) {
            $('.nav-bar').animate({
                left: '0'
            });
            counter = true;
        }
        else{
            counter = false;
            $('.nav-bar').animate({
                left: '-100%'
            });
        }
    });

    $('.menu-container').click(function(){
        $(this).children('.submenu').slideToggle();
    });
}

/*menuButton.addEventListener('click', function () {
    if(counter == false){
        counter = true;
        navBar.style.left = '0';
    }
    else{
        counter = false;
        navBar.style.left = '-100%';
    }
})*/