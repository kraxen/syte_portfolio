function show(state){
  document.getElementById('dark_form').style.display = state;
}
function show_menu(state){
  document.getElementById('adaptive_menu').style.display = state;
}
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone").mask("+7(999) 999-9999");
  $("#dop_phone").mask("+7(999) 999-9999");
});

