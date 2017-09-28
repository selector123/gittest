
<section>


  <!--===============ТОВАР=======-->


  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 rectovar1">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;<?php echo $categoryName['name']; ?></p>
          </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="content_scene_cat_bg">
        <div class="category-image">
          <img class="img-responsive" src="/template/img/<?php echo $categoryId; ?>.jpg" alt="" width="1170" height="400">
          <div class="cat_bottom">
            <p class="cat_bottom_wr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad perferendis cum dolorum modi placeat, adipisci reprehenderit quis recusandae est delectus nemo corrupti necessitatibus rem voluptate possimus aspernatur dolor distinctio deleniti?</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 rectovar">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;ТОВАРЫ</p>
          </div>
    </div>
  </div>


  <div class="container">
    <div class="row masonry" data-columns>
     
     <?php foreach ($categoryProducts as $productsinId): ?>




     <div class="item">
        <div class="thumbnail">
          <img src="<?php echo $productsinId['image']; ?>" alt="">
          <div class="caption">
            <h3>
              <a href="/product/<?php echo $productsinId['id']; ?>"><?php echo $productsinId['name']; ?></a>
            </h3>
            <p><?php echo $productsinId['description']; ?></p>
            <p>Цена:<?php echo $productsinId['price']; ?>RUB</p>

            <!--=========В СЛЕДУЮЩИХ СТРАНИЦАХ НЕ ЗАБУДЬ ДОБАВИТЬ КЛАСС add-to-cart И АТРИБУТ data-id =====-->

            
            <a class="btn btn-primary add-to-cart" href="/cart/add/<?php echo $productsinId['id']; ?>" data-id="<?php echo $productsinId['id']; ?>" ><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;В корзину</a>
          </div>
        </div>
      </div>

  <?php endforeach; ?>




    </div>
  </div>
  <nav class="text-center">
        <ul class="pagination">
          <li class="disabled controls">
            <a href="#">
            <i class="fa fa-chevron-left"></i>&nbsp;
            </a>
          </li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="/category/1/page-2">2</a></li>
          <li><a href="/category/1/page-3">3</a></li>
          <li><a href="/category/1/page-4">4</a></li>
          <li><a href="/category/1/page-5">5</a></li>
          <li><a href="/category/1/page-6">6</a></li>
          <li class="controls lg">
            <a href="#">
            <i class="fa fa-chevron-right"></i>&nbsp;
          </a>
        </li>
        </ul>
      </nav>
  






  <BR>
  <BR>
  <BR>
</section>


<!--========FOOTER=====================-->
<?php include_once 'template/footer.php'; ?>