$(document).ready(function(){

    $('.carrossel-main').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
    });

    $('.search-input').focus(function() {
        $('.search-button').css('background-color', '#3498db')
    }).blur(function() {
        $('.search-container').css('box-shadow', '')

        var scrollTop = window.scrollY || document.documentElement.scrollTop;

        if (scrollTop === 0) {
            $('.search-button').css('background-color', '#3498dba1')
        } else {
            $('.search-button').css('background-color', '#3498db')
        }
    });

    carrega_classes()
    
});

window.onscroll = function() {
    var scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop === 0) {
        $('.barra-nav').css('background', 'rgb(251 251 251 / 67%)')
        $('.barra-nav').css('box-shadow', '')
        $('.search-button').css('background-color', '#3498dba1')
        $('.barra-nav').slideUp()

    } else {
        $('.barra-nav').css('background', '#fbfbfb')
        $('.barra-nav').css('box-shadow', '0 0 3px rgba(0, 0, 0, 0.2)')
        $('.search-button').css('background-color', '#3498db')
        $('.barra-nav').slideDown()
        $('.barra-nav').css('display', 'block')
    }
};

function carrega_classes(){

    $.ajax({
        url: 'menu-itens.php',
        type: 'POST',
        data: {pega: true},
        success: function(data) {
            data.forEach(element => {
                $('.campos-pesquisa').append(`<a href="#" class="item-menu">${element}</a>`)
                $('.filtros').append(`<a href="#" class="filtro-item">${element}</a>`)
            });
        }
    });
}

//Criando uma tela responsiva ._.

function tela_pc(){
    $('.campos-pesquisa').css('display', 'flex');
    $('.search-input').css('display', 'none');
    $('.search-input').css('width', '6.5vw');
    $('.usuario-topo').css('width', '20vw');

    $('.search-container').mouseenter(function(){
        $('.search-input').css('display', 'block');
        $('.search-input').stop().animate({
            width: '35vw'
        }, 300);
    }).mouseleave(function(){
        if(!$('.search-input').is(":focus")){
            $('.search-input').stop().animate({
                width: '6.5vw'
            }, 300, function () {
                $(this).css('display', 'none');
            });
        }
    });

    $('.search-input').blur(function(){
        $('.search-input').stop().animate({
            width: '6.5vw'
        }, 300, function () {
            $(this).css('display', 'none');
        });
    });
}

function tela_mobile(){
    $('.campos-pesquisa').css('display', 'none');
    $('.search-input').css('display', 'flex');
    $('.search-input').css('width', '48vw');
    $('.usuario-topo').css('width', '30vw');

    $('.search-container').off('mouseenter').off('mouseleave');
    $('.search-input').off('blur');
}

$(document).ready(function () {
    if ($(window).width() >= 992) {
        tela_pc()
    } else {
        tela_mobile()
    }

    $(window).resize(function () {
        if ($(window).width() >= 992) {
            tela_pc()
        } else {
            tela_mobile()
        }
    });
});