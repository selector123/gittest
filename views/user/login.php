

<section>


  <!--===============ТОВАР=======-->



  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 rectovar1">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;ВХОД НА САЙТ</p>
          </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <div style="text-align: center;">
    

      <?php if (isset($errors) && is_array($errors)): ?>
        <UL class="tableerror">
        <?php foreach ($errors as $error): ?>
          <li class="tableerror1">-<?php echo $error; ?></li>
        <?php endforeach; ?>
      <?php endif; ?>
      <br>


      <form action="" method="POST">
      <p>Email:</p>
        <input class="vvod" type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" requred><br>
        <p id="paswr">Пароль:</p>
        <input class="vvod" type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" requred><br><br>
        <input type="submit" name="submit" class="btn btn-default" value="Войти">
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