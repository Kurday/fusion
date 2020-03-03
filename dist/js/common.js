$(function(e) {


//плагин библиотека для фона с точками
/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'libs/particles/assets/particles.json', function() {
  console.log('callback - particles.js config loaded');
});

// alert("Привет");



function show(x,y,op){
 // Локальная переменная
 var msg
 // Проверяется значение аргумента
 switch(op){
 case "sum": // Первый блок
 msg=x+" + "+ y+" = "+(x+y)
 break
 case "ras": //Второй блок
 msg=x+" - "+ y+" = "+(x-y)
 break
 case "pros": 
 msg=x+" * "+ y+" = "+(x*y)
 break
 case "chas": // 
 msg=x+" / "+ y+" = "+(x/y)
 break
 default: 
 msg="<b>"+op+"</b> - неизвестная операция <br>"
}
return msg;
}

var mainBtn = document.querySelector('.mainBtn');
var span = document.querySelector('.res');
var inp1 = document.querySelector('input[name=num1]');
var inp2 = document.querySelector('input[name=num2]');

var btn = document.querySelectorAll('.operation .boot')

for(var i = 0; i < btn.length; i++) {
  btn[i].onclick = btnClick;  
}


//функция для кнопок в массиве
function btnClick(e){
  var x1 = parseInt(inp1.value);
  var y1 = parseInt(inp2.value);

  var make = this.getAttribute('name');
  span.innerHTML = show(x1,y1,make);

  //this.setAttribute('disabled','disabled');
  this.disabled = true;
}

//вызываем функцию btnEnable для события текст-инпутов
inp1.oninput = btnEnable;
inp2.oninput = btnEnable;

//функция для активации кнопки путем изменений полей инпут текст
function btnEnable(){
for(var i = 0; i < btn.length; i++) {
  btn[i].disabled = false;
}
  mainBtn.disabled = false;
}

//Код для отдельной кнопки не попадающей в массив кнопок
mainBtn.onclick = function(){
  var res = parseInt(inp1.value) + parseInt(inp2.value);
  span.innerHTML = res;
  this.disabled = true;

}




});

//переходим из id js-get-started в id slider
$(function() {
  $("#js-get-started").on("click", function(e){
    e.preventDefault();
    var sliderOffset = $("#slider").offset().top;

    $("html, body").animate({
      scrollTop: sliderOffset
    }, 500);
  });
});

// функция для закрепления меню при скроле больше высоты экрана
var mainH = $("#js-height-header").height(), //забиваем высоту блока в переменную mainH
    navH = $("#js-nav").innerHeight(); //в переменную помещаем значение высоты с нашей навигацией
    //innerHeight Значит присвоить высоту с учетом внутреннего padding 

$(document).on("scroll", function(){
  var documentScroll = $(this).scrollTop(); //this указывает на страницу. Тут мы присваиваем переменной сколько проскролили
  if (documentScroll > mainH) {
    $("#js-nav").addClass("fixed");
    $("#js-height-header").css("paddingTop", navH); //свойство для присваивания переменной из js файла 
    //paddingTop это css свойство для использования в JS файле
  } else {
    $("#js-nav").removeClass("fixed");
    $("#js-height-header").removeAttr("style"); // удаляем атрибут стайл через JS
  }
});