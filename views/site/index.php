

    <!--========СЛАЙДЕР========-->

<div id="carousel" class="carousel slide slider123">

    <!--ИНДИКАТОРЫ СЛАЙДОВ-->

  

    <!--СЛАЙДЫ-->

  <div class="carousel-inner">
    <div id="img-size" class="item active">
      <img class="img-responsive" src="../template/img/car1.jpg" alt="">
    </div>
    <div id="img-size" class="item">
      <img class="img-responsive" src="../template/img/car2.jpg" alt="">
    </div>
    <div id="img-size" class="item">
      <img class="img-responsive" src="../template/img/car3.jpg" alt="">
    </div>
  </div>

  <!--СТРЕЛКИ ПЕРЕКЛЮЧЕНИЯ СЛАЙДОВ-->

  <a href="#carousel" class="left carousel-control" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a href="#carousel" class="right carousel-control" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<section>


    <div id="item-cont" class="container banners1">
      <div  class="row">
        <div class="col-sm-4 col-xs-12 middle_el">
          <img src="template/img/banimg.jpg" class="img-responsive banimg" alt="New Products Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolorem sit, soluta deserunt hic laborum officiis neque quod illum, aliquid cupiditate suscipit quidem. Vero laboriosam laudantium quos minus totam soluta!">
          <div class="baner-bottom">
                <p class="banwr">
                 <b>Н</b>ОВИНКИ
                </p>
                <p class="banwr-bottom">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur vitae quod dicta possimus.
                </p>
                <p><i class="fa fa-chevron-circle-right"></i></p>
          </div>
        </div>



        <div class="col-sm-4 col-xs-12 middle_el">
          
          <img src="template/img/banimg.jpg" class="img-responsive banimg" alt="New Products Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolorem sit, soluta deserunt hic laborum officiis neque quod illum, aliquid cupiditate suscipit quidem. Vero laboriosam laudantium quos minus totam soluta!">
          <div class="baner-bottom ">
                <p class="banwr">
                 <b>С</b>КИДКИ
                </p>
                <p class="banwr-bottom">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur vitae quod dicta possimus.
                </p>
                <p><i class="fa fa-chevron-circle-right"></i></p>
          </div>
        </div>


        <div class="col-sm-4 col-xs-12 middle_el">
          <img src="template/img/banimg.jpg" class="img-responsive banimg" alt="New Products Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolorem sit, soluta deserunt hic laborum officiis neque quod illum, aliquid cupiditate suscipit quidem. Vero laboriosam laudantium quos minus totam soluta!">
          <div class="baner-bottom">
                <p class="banwr">
                 <b>П</b>ОСЛЕДНИЕ
                </p>
                <p class="banwr-bottom">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur vitae quod dicta possimus.
                </p>
                <p><i class="fa fa-chevron-circle-right"></i></p>
          </div>
        </div>
      </div>
    </div>


  <!--===============РЕКОМЕНДУЕМЫЕ ТОВАРЫ=======-->



  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 rectovar">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;РЕКОМЕНДУЕМЫЕ ТОВАРЫ</p>
          </div>
    </div>
  </div>
  <div class="container">
    <div class="row masonry" data-columns>
      <?php foreach ($RecProductLists as $RecProductListsItem): ?>




      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo $RecProductListsItem['image']; ?>" alt="">
          <div class="caption">
            <h3>
              <a href="/product/<?php echo $RecProductListsItem['id']; ?>"><?php echo $RecProductListsItem['name']; ?></a>
            </h3>
            <p><?php echo $RecProductListsItem['description']; ?></p>
            <p>Цена:<?php echo $RecProductListsItem['price']; ?>RUB</p>
            <a class="btn btn-primary add-to-cart" href="/cart/add/<?php echo $RecProductListsItem['id']; ?>" data-id="<?php echo $RecProductListsItem['id']; ?>" ><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;В корзину</a>
          </div>
        </div>
      </div>

      <?php endforeach; ?>


    </div>
  </div>


  
  <br>
  <br>
</section>


<!--========FOOTER=====================-->

<?php include_once 'template/footer.php'; ?>