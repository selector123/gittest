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
	<p>Добавление товара</p>

    <form action="#" method="post" enctype="multipart/form-data">

        <p>Название товара</p>
        <input type="text" name="name" placeholder="" value="">

        <p>Артикул</p>
        <input type="text" name="code" placeholder="" value="">

        <p>Стоимость, $</p>
        <input type="text" name="price" placeholder="" value="">

        <p>Категория</p>
        <input type="text" name="category_id">
        

        <br/><br/>

        <p>Производитель</p>
        <input type="text" name="brand" placeholder="" value="">

        <p>Изображение товара</p>
        <input type="text" name="image" placeholder="" value="">

        <p>Детальное описание</p>
        <textarea name="description"></textarea>

        <br/><br/>

        <p>Наличие на складе</p>
        <input type="text" name="availability">
        

        <br/><br/>

        <p>Новинка</p>
        <input name="is_new" type="text">
        

        <br/><br/>

        <p>Рекомендуемые</p>
        <input name="is_recommended">
        

        <br/><br/>

        <p>Статус</p>
        <input type="text" name="status">
        
        <br/><br/>

        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

        <br/><br/>

        </form>
	
		


	</div>
</div>