

<section>


  <!--===============ТОВАР=======-->



  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 rectovar1">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;ОБРАТНАЯ СВЯЗЬ</p>
          </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div style="text-align: center;">
     
      <?php if (isset($errors) && is_array($errors)): ?>
        <UL>
        <?php foreach ($errors as $error): ?>
          <li><?php echo $error; ?></li>
        <?php endforeach; ?>
      <?php endif; ?>


        <h3><span class="bluecolor">Есть вопрос?</span>Напишите его нам!</h3>
        <div class="signin-form">
          <form action="#" method="POST">
          <p>Ваша почта</p>
            <input class="vvod" type="email" name="email" placeholder="E-mail" value=""><BR><BR>
            <p>Сообщение</p>
            <textarea rows="10" cols="45" class="vvod" name="message" value=""></textarea><BR><BR>
            <input type="submit" name="submit" class="btn btn-default" value="Отправить"></input>
          </form>
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