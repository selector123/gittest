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
	<p>Товар №<?php echo $ids;?></p>
	<form action="#" method="post" enctype="multipart/form-data">

        <p>Название товара</p>
        <input type="text" name="name" placeholder="" value="<?php echo $prodinformation['name']; ?>">

        <p>Артикул</p>
        <input type="text" name="code" placeholder="" value="<?php echo $prodinformation['code']; ?>">

        <p>Стоимость</p>
        <input type="text" name="price" placeholder="" value="<?php echo $prodinformation['price']; ?>">

        <p>Категория</p>
        <input type="text" name="category_id" value="<?php echo $prodinformation['category_id']; ?>">
        

        <br/><br/>

        <p>Производитель</p>
        <input type="text" name="brand" placeholder="" value="<?php echo $prodinformation['brand']; ?>">

        <p>Изображение товара</p>
        <input type="text" name="image" placeholder="" value="<?php echo $prodinformation['image']; ?>">

        <p>Детальное описание</p>
        <textarea name="description" rows="10" cols="45"><?php echo $prodinformation['description']; ?></textarea>

        <br/><br/>

        <p>Наличие на складе</p>
        <input type="text" name="availability" value="<?php echo $prodinformation['availability']; ?>">
        

        <br/><br/>

        <p>Новинка</p>
        <input name="is_new" type="text" value="<?php echo $prodinformation['is_new']; ?>">
        

        <br/><br/>

        <p>Рекомендуемые</p>
        <input name="is_recommended" value="<?php echo $prodinformation['is_recommened']; ?>">
        

        <br/><br/>

        <p>Статус</p>
        <input type="text" name="status" value="<?php echo $prodinformation['status']; ?>">
        
        <br/><br/>

        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

        <br/><br/>

        </form>
		


	</div>
</div>