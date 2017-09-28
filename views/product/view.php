
<section>


  <!--===============ТОВАР=======-->



  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 rectovar1">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;ТОВАР</p>
          </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <hr>
      <div class="col-xs-12 col-sm-6 col-lg-6">
        <div class="pull-left image-block">
          <img class="img-responsive" src="<?php echo $product['image']; ?>" alt="">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-6">
        <h2 class="productname"><?php echo $product['name']; ?></h2>
        <h4 class="productmodel">Model 1</h4>
        <div class="description">
          <?php echo $product['description']; ?>
        </div>
        <ul class="instock">
          <li><b>Shipping Weight:</b>&nbsp;41lbs</li>
          <hr class="prodinf">
          <li><b>Manufactured by:</b>&nbsp;Bosch</li>
          <hr class="prodinf">
        </ul>
        <div class="description">
        <div class="prod-price pull-right">
          <span class="productSalePrice">
            <?php echo $product['price']; ?>&nbsp;RUB
          </span>
        </div>
        </div>
        <div class="addtocart">
          <a href="#" class="btn btn-default addtocartbutton"><p class="wrcart"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Добавить в корзину</p></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12 rectovar">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;ПОХОЖИЕ ТОВАРЫ</p>
          </div>
        </div>
      </div>
      <div class="container">
    <div class="row masonry" data-columns>
      <div class="item">
        <div class="thumbnail">
          <img src="http://placehold.it/350x240" alt="">
          <div class="caption">
            <h3>
              <a href="#">Название товара</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>Цена:222RUB</p>
            <a class="btn btn-primary" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;В корзину</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="http://placehold.it/350x240" alt="">
          <div class="caption">
            <h3>
              <a href="#">Название товара</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>Цена:222RUB</p>
            <a class="btn btn-primary" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;В корзину</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="http://placehold.it/350x240" alt="">
          <div class="caption">
            <h3>
              <a href="#">Название товара</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>Цена:222RUB</p>
            <a class="btn btn-primary" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;В корзину</a>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="http://placehold.it/350x240" alt="">
          <div class="caption">
            <h3>
              <a href="#">Название товара</a>
            </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>Цена:222RUB</p>
            <a class="btn btn-primary" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;В корзину</a>
          </div>
        </div>
      </div>
    </div>
  </div>






  <BR>
  <BR>
  <BR>
</section>


<!--========FOOTER=====================-->
<?php include_once 'template/footer.php'; ?>