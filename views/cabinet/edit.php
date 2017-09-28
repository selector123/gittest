

<section>


  <!--===============ТОВАР=======-->



  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 rectovar1">
            <p class="rectovarwr"><i class="fa fa-angle-double-right"></i>&nbsp;РЕДАКТИРОВАНИЕ ДАННЫХ:</p>
          </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <div style="text-align: center;">
    
       <?php if ($result): ?>
                    <p>Данные отредактированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>    
                    <?php endif; ?>


     



      <form action="#" method="POST">
        <input type="name" name="name" placeholder="Имя" value="<?php echo $username['name']; ?>";"><br><br>
        <input type="password" name="password" placeholder="Пароль" value=""><br><br>
        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
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