<div class="container">
	<div class="row">
	<br>
	<div class="btn btn-group btn-lg navbar-right">
                <a href="/adminpanel/"><button class="btn btn-success">
                        <p><i class="fa fa-reply" aria-hidden="true"></i>АДМИНПАНЕЛЬ</p>
                </button>
                </a>
                <a href="/">
                <button class="btn btn-success" style="float: right;">
                <p><i class="fa fa-reply" aria-hidden="true"></i>Перейти на сайт</p>
                </button>
                </a>
        </div>
	<br>
	<br>
	<p>Категория №<?php echo $idcat['id'];?></p>
	<form action="#" method="post" enctype="multipart/form-data">

        <p>Название</p>
        <input type="text" name="name" placeholder="" value="<?php echo $idcat['name']; ?>">

        <p>Номер</p>
        <input type="text" name="sort_order" placeholder="" value="<?php echo $idcat['sort_order']; ?>">

        <p>Статус</p>
        <input type="text" name="status" value="<?php echo $idcat['status']; ?>">
        

        <br/><br/>

        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

        <br/><br/>

        </form>
		


	</div>
</div>