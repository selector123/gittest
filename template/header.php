<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Сайт Автозапчасти</title>

    
    <!--FONT AWESOME-->

    <link rel="stylesheet" href="/template/fa/font-a/css/font-awesome.min.css">
    
    <!-- Bootstrap -->
    
    <link rel="stylesheet" href="/template/style.css">
    <link href="/template/css/bootstrap.css" rel="stylesheet">
    
    <!--JAVASCRIPT-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/template/js/bootstrap.js"></script>
    <script src="/template/js/prettyPhoto.js" type="text/javascript" charset="utf-8"></script> 
    <!-- include Cycle2 -->
    <script src="/template/js/cycle1.js"></script>

    <!-- include one or more optional Cycle2 plugins -->
    <script src="/template/js/cycle2.js"></script>
    <script>
      $(document).ready(function() {
        $(".add-to-cart").click(function() {
          var id = $(this).attr("data-id");
        $.post("/cart/addAjax/"+id, {}, function (data) {
          $("#cart-count").html(data);
        });
        return false;
        });
  });
    </script>
    <script>
      $(document).ready(function(){
  //ЗДЕСЬ БУДУТ СКРИПТЫ
});
    </script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

  </head>
  <body>

  <!-- ===========HEADER====================== -->

<div class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-5 col-lg-5">
       
           <p class="phone">
           <i class="fa fa-phone">
           </i>&nbsp;123-456-789
           <span class="times2">Работаем:с 9:00 до 18:00</span>
           </p>

      </div>
      <div class="col-xs-12 col-md-7 col-lg-7">
        <p class="nav1wr navbar-right">

        <?php if (User::isGuest()): ?>

        <a class="wr1 btn btn-primary" href="/user/login">Войти</a>
        <a href="/user/registr" class="wr1 btn btn-primary">Зарегистрироваться</a>
        
        <?php else: ?>
          <?php $isadmin123 = User::isAdmin($_SESSION['user']); ?>
        <?php if($isadmin123['role'] == 'admin'): ?>
        <a class="wr1 btn btn-primary" href="/adminpanel/">Панель администратора</a>
        <?php else: ?>
        <a class="wr1 btn btn-primary" href="/cabinet/">Аккаунт</a>
      <?php endif; ?>

        <a class="wr1 btn btn-primary" href="/user/logout">Выход</a>

      <?php endif; ?>


        </p>
      </div>
    </div>
  </div>
</div>
<div class="bottom">
  <div class="container">
    <div class="row clearfix">
      <div class="col-xs-12 col-sm-3">
        

        <!--========LOGO========-->
        <a href="/">
        <img style = "border-radius: 4px 4px 4px 4px" src="/template/img/logo4.png" alt="">
        </a>
      </div>
      <div class="col-xs-12 col-sm-9 col-md-9">
        <div class="clearfix navbar-right">
        <p class="ship1">
          <i class="fa fa-thumbs-o-up"></i>&nbsp;ПОЛУЧИ СКИДКУ 10%
          </p>
          <p class="atten">При заказе на сумму свыше <span class="rub">2000RUB</span></p>
          <div id="sandc" class="btn-group btn-lg navbar-right">
            <a href="/search/" class="btn btn-primary"><i class="fa fa-search"></i>&nbsp;Поиск по сайту</a>
            <a href="/cart/" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>&nbsp;Корзина <span id="cart-count" class="badge"><?php echo Cart::countItems(); ?></span></a>
            <a href="#" class="btn btn-primary"><i class="fa fa-"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <!--========ПОЛОСА НАВИГАЦИИ=====-->

<div class="container">
 <div class="row">
          <div id="navigation" class="navbar navbar-inverse">
      <!--navbar-fixed-top,bottom полоса навиг прикрепится к верху и при прокрутке веб страницы будет оставаться вверху-->
      <!--ЕСЛИ default то цвет серый ,если inverse то черный-->
        <div class="container">
          <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#responsive-menu">
          <!--data toggle при нажатии открывается класс-->
          <span class="sr-only">Открыть навигацию</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          </div>
          <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown">
              <a href="#" class="nav-wr dropdown-toggle" data-toggle="dropdown">КАТЕГОРИИ <b class="caret"></b></a>
              <ul class="dropdown-menu" id="nav-element" style="color: white">
              <?php foreach ($categories as $categoryItem) : ?>
              
              <li><a id="elem-wr" href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>

              <?php endforeach; ?>

              </ul>
              </li>
              <li class="dropdown">
              <a href="#" class="nav-wr dropdown-toggle" data-toggle="dropdown">УСЛУГИ <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Пункт 1</a></li>
                <li><a href="#">Пункт 2</a></li>
                <li><a href="#">Пункт 3</a></li>
                <!--divider это разделитель -->
                <li class="divider"></li>
                <li><a href="#">Пункт 4</a></li>
              </ul>
              </li>
              <li><a class="nav-wr" href="#">О НАС</a></li>
              <li><a class="nav-wr" href="/contacts/">ОБРАТНАЯ СВЯЗЬ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
