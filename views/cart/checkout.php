

<section>


  <!--===============ТОВАР=======-->



  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 rectovar1">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;ОФОРМЛЕНИЕ ЗАКАЗА</p>
          </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="">
      
      <p>Выбрано товаров:<?php echo $countTovar; ?>, на сумму: <?php echo $totalPrice; ?></p><br><br>
      <p>Для оформления заказа заполните форму.<br>Наш менеджер с вами свяжется.</p>
      <form action="#" method="POST">
        Ваше имя<br>
        <input type="text" value="<?php if (isset($username['name'])): ?><?php echo $username['name']; ?><?php endif; ?>"><br>
        Номер телефона<br>
        <input type="text"><br>
        Комментарий к заказу<br>
        <input type="text" placeholder="Сообщение"><br><br>
        <input class="btn btn-default" type="submit" value="Оформить">
      </form>



      </div>
    </div>
  </div>
  






  <BR>
  <BR>
  <BR>
</section>


<!--========FOOTER=====================-->
<?php include_once 'template/footer.php'; ?>