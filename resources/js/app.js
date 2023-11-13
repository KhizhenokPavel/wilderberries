import './bootstrap';

$( ".main-page__product" ).each(function () {
    $(this).hover(function(){
        $(this).addClass('hover')
    }, function(){ // задаем функцию, которая срабатывает, когда указатель выходит из элемента
        $(this).removeClass('hover')
    });
})
