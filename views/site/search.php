
<section>


  <!--===============ТОВАР=======-->



  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 rectovar1">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;ПОИСК</p>
          </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <div style="text-align: center;">
      <form method="POST" action="#">
      Введите строку для поиска:<BR>
        <input class="vvod" name="text" type="text" value="<?php echo @$search_text;?>" placeholder="Что искать?" required><br><br>
        <input name="submit" class="btn btn-default" type="submit" value="Искать">
      </form>
      </div>
    </div>
  </div>
  <br><br>
  <?php if(isset($SearchProducts)): ?>
  <div class="container">
    <div class="row">
      <p>
      <?php if(count($SearchProducts)== 1): ?>
      Найден
    <?php endif; ?>
    <?php if(count($SearchProducts)==2): ?>
      Найдено
    <?php endif; ?>
    <?php if(count($SearchProducts)==3): ?>
      Найдено
    <?php endif; ?>
    <?php if(count($SearchProducts)==4): ?>
      Найдено
    <?php endif; ?>
    <?php if(count($SearchProducts)>4): ?>
      Найдено
    <?php endif; ?>


      <?php echo count($SearchProducts); ?> 
      
      <?php if(count($SearchProducts)== 1): ?>
      товар
    <?php endif; ?>
    <?php if(count($SearchProducts)==2): ?>
      товара
    <?php endif; ?>
    <?php if(count($SearchProducts)==3): ?>
      товара
    <?php endif; ?>
    <?php if(count($SearchProducts)==4): ?>
      товара
    <?php endif; ?>
    <?php if(count($SearchProducts)>4): ?>
      товаров
    <?php endif; ?>


      </p>
      <hr>
    </div>
  </div>
<?php endif; ?>
  <?php if(isset($SearchProducts)): ?>
  <div class="container">
    <div class="row masonry" data-columns>
      <?php foreach ($SearchProducts as $sprod): ?>

      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo $sprod['image']; ?>" alt="">
          <div class="caption">
            <h3>
              <a href="/product/<?php echo $sprod['id']; ?>"><?php echo $sprod['name']; ?></a>
            </h3>
            <p><?php echo $sprod['description']; ?></p>
            <p>Цена:<?php echo $sprod['price']; ?>RUB</p>
            <a class="btn btn-primary add-to-cart" href="/cart/add/<?php echo $sprod['id']; ?>" data-id="<?php echo $sprod['id']; ?>" ><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;В корзину</a>
          </div>
        </div>
      </div>

      <?php endforeach; ?>


    </div>
  </div>
<?php endif; ?>
<?php if (isset($_POST['submit']) && !isset($SearchProducts)): ?>
<div class="container">
  <div class="row">
  <hr>
    <p style="color: red;font-family: 'Open Sans';">Товаров не найдено!</p>
  </div>
</div>
<?php endif; ?>





  <BR>
  <BR>
  <BR>
</section>


<!--========FOOTER=====================-->
<?php include_once 'template/footer.php'; ?>