

<section>


  <!--===============ТОВАР=======-->



  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 rectovar1">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;КОРЗИНА</p>
          </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="">
        
      <?php if($productsInCart): ?>
        <p>Список ваших товаров :</p>
        <table class="table-bordered table-striped table">
        <tr>
           <th>Код товара</th>
           <th>Название</th>
           <th>Стоимость</th>
           <th>Кол-во, шт</th>
           <th>Удалить</th>
         </tr> 

        <?php foreach ($products as $product): ?>
          <tr id="del-tovar">
            <td><?php echo $product['code']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $productsInCart[$product['id']]; ?></td>
            <td><a class="delete-product" data-id="<?php echo $product['id']; ?>" href="delete/<?php echo $product['id']; ?>";"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
          </tr>
        <?php endforeach; ?>
        <tr>
          <td colspan="3">Общая стоимость:</td>
          <td><?php echo $totalPrice; ?></td>
        </tr>


          
        </table>
        <a href="checkout">
      <button class="btn btn-default cartpust">ОФОРМИТЬ ЗАКАЗ</button></a>


      <?php else: ?>
      <p class="cartpust">В вашей корзине нет товаров!</p>

    <?php endif; ?>



      </div>
    </div>
  </div>
  






  <BR>
  <BR>
  <BR>
</section>


<!--========FOOTER=====================-->
<?php include_once 'template/footer.php'; ?>