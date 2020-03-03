<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--  эта строчка говорит о том что любой девайс с которого вы заходите на сайт, автоматически приравневается к ширине сайта. То-есть ширина вашего сайта приравневается к ширине устройства с которго вы смотрите -->
  <meta property="og:image" content="path/to/image.jpg">
  <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
  <script src="https://kit.fontawesome.com/8fd2a7d500.js" crossorigin="anonymous"></script>

  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#000">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#000">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#000">

  <link rel="stylesheet" href="css/main.min.css">

</head>

<body>
  <section class="main-head" id="js-height-header"> <!-- id учавствует как показатель высоты блока -->
    <div id="particles-js">
    <div class="overlay"></div>
 

      <div class="main-head__menu" id="js-nav"> <!-- id для присвоения класса fixed и для выборки высоты -->
        <ul>
          <li><a href="#js-main" class="menu-link">Home</a></li>
          <li><a href="#js-MiSocial" class="menu-link">Why MISOCIAL</a></li>
          <li><a href="#" class="menu-link">Features</a></li>
          <li><a href="#" class="menu-link">Articles</a></li>
          <li><a href="#" class="menu-link">Pricing</a></li>
          <li><a href="#slider" class="get-started-btn menu-link" id="js-get-started">get started</a></li>
        </ul>
      </div>
  </section>


 


  <section class="header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 ">
          <img src="img/photos/book.jpg" alt="">
        </div>
        <div class="col-lg-7">
          <div class="header-text">
            <h1 class="header-text__title">Название статьи
              <?php echo "ВАДИМ КРУТОЙ ПЕРЕЦ"; ?>
            </h1>
            <h2 class="header-text__subtitle">Автор Статьи</h2>
            <span class="header-text__descr">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Он пояс на берегу имени букв предупреждал? Живет города дороге диких вскоре ему, если даль выйти строчка семантика всемогущая, на берегу продолжил по всей, продолжил домах злых проектах вопроса запятых! Приставка большого текст он агенство, сих необходимыми возвращайся это пояс щеке, вдали встретил.</span>
            <div class="header-text__price">399 р.</div>
            <div class="header-text__buttons">
              <button class="button">Купить</button>
              <button class="button-o"><div>Узнать подробнее</div></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


 <section class="contentMenu">
   <div id="particles-js">
    <div class="overlay"></div>
    <div class="main-header">
      <div class="logo">
        <img src="img/logo.png" alt="">
      </div>
      <div class="menu">
        <ul>
          <li><a href="#" id="js-get-started">home</a></li>
          <li><a href="#">about us</a></li>
          <li><a href="#">item1</a></li>
          <li><a href="#">item2</a></li>
          <li><a href="#">our mail</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>


  <section class="content">
    <div class="container">
      <h2 class="content-title">Заглавный текст</h2>
      <div class="row">

        <div class="col-12 col-lg-3 col-md-6">
          <div class="content-img">
            <div class="content-img__border"><img src="img/icon/icon_m_1.png" alt=""></div>
            <div class="content-img__text">Lorem ipsum dolor sit amet.</div>  
          </div>
        </div>   
        <div class="col-12 col-lg-3 col-md-6">
          <div class="content-img">
            <div class="content-img__border"><img src="img/icon/icon_m_2.png" alt=""></div>
            <div class="content-img__text">Lorem ipsum dolor sit amet.</div>  
          </div>
        </div>   
        <div class="col-12 col-lg-3 col-md-6">
          <div class="content-img">
            <div class="content-img__border"><img src="img/icon/icon_m_3.png" alt=""></div>
            <div class="content-img__text">Lorem ipsum dolor sit amet.</div>  
          </div>
        </div>   
        <div class="col-12 col-lg-3 col-md-6">
          <div class="content-img">
            <div class="content-img__border"><img src="img/icon/icon_m_4.png" alt=""></div>
            <div class="content-img__text">Lorem ipsum dolor sit amet.</div>  
          </div>
        </div>   
      </div>
    </div>
  </section>



<section class="animate1">
  <a href="#" class="btn-wave ">
    <span class="btn-wave__text ">Кнопка</span>
    <span class="btn-wave__waves"></span>
  </a>
</section>


<section class="animate-easy">
 <div class="slavic">
   <img src="img/cart/mavic2.png" alt="" class="slavic-img">
   <div class="mavic__title">
     Slavic
   </div>
 </div>
</section>

<section class="animate-pro" id="slider">

 <div class="mavic">
  <div class="hiddenLay"></div>
  <img src="img/cart/mavic2.png" alt="" class="mavic-img">
  <div class="mavic__title">
   Mavic
 </div>
</div>
</section>


<section class="woman">
  <div class="container">
    <div class="woman-img">
      <img src="img/photos/woman.png" alt="">
    </div>
    <!-- /.woman-img -->
    <div class="woman-text">
      <h2 class="woman-text__title">Узнайте стоимость <br> и срок выполнения вашего макета</h2>
      <div class="woman-text__subtitle">
        Далеко-далеко за словесными горами в стране, <br> гласных и согласных живут рыбные тексты.
      </div>
      <form action="#" class="woman-form">
        <input type="text" placeholder="Ваше имя" class="woman-form__input">
        <input type="tel" placeholder="Контактный телеофн" class="woman-form__input">
        <input type="email" placeholder="Электронная почта" class="woman-form__input">
        <button class="woman-form__button" type="submit">Оставить заявку</button>
      </form>
    </div>
    <!-- /.woman-text -->
  </div>
</section>

<section class="animate4">1
  <div class="card">
    <div class="front">
      <img src="img/cart/man.png" width="200" height="250" alt="photo">
    </div>
    <div class="back">
      <div class="content">
        <h1>
          John Doe 
          <span>Front-end Developer</span>
          <ul class="socials">
            <li>
              <a href="#"><i class="fa fa-comments-o"></i></a>
              <a href="#"><i class="fa fa-envelope-o"></i></a>
              <a href="#"><i class="fa fa-eyedropper"></i></a>
              <a href="#"><i class="fa fa-hand-pointer-o "></i></a>
              <a href="#"><i class="fa fa-home"></i></a>
            </li>
          </ul>
        </h1>
      </div>
    </div>
  </div>
</section>

<section class="animate3">
  <div class="wrapper">
    <button class="btn-animate3">
      <span class="anispan"></span>
      <span class="anispan"></span>
      <span class="anispan"></span>
      <span class="anispan"></span>
      кнопка
    </button>
  </div>
</section>

<section class="JSconfig">
  <div class="wrap">
    <div class="operation">
      <input type="text" name="num1"> <b>&</b> 
      <input type="text" name="num2">
      <div class="clr"></div>
      <input type="button" class="boot"  name="sum" value="+">
      <input type="button" class="boot" name="ras" value="-">
      <input type="button" class="boot" name="pros" value="*">
      <input type="button" class="boot" name="chas" value="/">
    </div>
    <input type="button" class="mainBtn" name="MainBtn" value="MainBtn">

    <textarea class="res"></textarea>
  </div>
</section>
<!-- <script src="libs/jquery/dist/jquery-3.4.1.min.js"></script> -->
<script src="js/scripts.min.js"></script>


<!-- <script src="particles/particles.js"></script> -->


</body>
</html>
