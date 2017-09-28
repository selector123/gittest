

<section>


  <!--===============ТОВАР=======-->



  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 rectovar1">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;РЕГИСТРАЦИЯ</p>
          </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="" style="text-align: center">
      <?php if($result): ?>
        <p>Вы успешно прошли регистрацию!</p>
      <?php else: ?>
      <?php if (isset($errors) && is_array($errors)): ?>
        <UL class="tableerror">
        <?php foreach ($errors as $error): ?>
          <li class="tableerror1">-<?php echo $error; ?></li>
        <?php endforeach; ?>
      <?php endif; ?>
      <br>



        <div class="signin-form">
          <form action="#" method="POST">
          <p>Имя:</p>
            <input class="vvod" type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>";"><BR>
            <p>Email:</p>
            <input class="vvod" type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"><BR>
            <p>Пароль:</p>
            <input class="vvod" type="password" name="password" placeholder="Пароль" value=""><BR><br>
            <input type="submit" name="submit" class="btn btn-default" value="Регистрация"></input>
          </form>
        </div>
        
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