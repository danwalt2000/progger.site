//слайдер меню в мобильной версии
$(document).ready(function(){
  const active = $(".hidden__menu"), menu = $(".topmenu"), span = active.find("span");
  active.click(function(){
    active.toggleClass("hidden__menu_active")
    menu.slideToggle("fast");    
  });  
});

//функция управления блоком "плюс/минус"
$(document).ready(function() {
  $('.minus').click(function () {
    var $input = $(this).parent().find('input');
    const count = parseInt($input.val()) - 1;
    if(count < 1){ return false; }
    $input.val(parseInt($input.val()) - 1);
    $input.change();
    return false;
   });
  $('.plus').click(function () {
    const $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });
});


//скрипт, запрещающий ввод без заполнения предыдущего поля
const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");
const email = document.getElementById("email");

firstName.oninput = function(){
  lastName.placeholder = "Enter Last Name";
  email.placeholder = "Enter Email";
}
lastName.oninput = function(){
  if(!firstName.value){
    lastName.placeholder = "Заполните поле First Name";
    lastName.value = '';
  }
  email.placeholder = "Enter Email";
}

email.oninput = function(){
  if(!firstName.value || !lastName.value){
    if(!firstName.value){
      email.placeholder = "Заполните поле First Name";
    } else {
      email.placeholder = "Заполните поле Last Name";
    }
    email.value = '';
  }
}






