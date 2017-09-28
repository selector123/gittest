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
		<br><br>
		<hr>
		<a href="/adminpanel/create">
		<button class="btn btn-default">
		<p><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Добавить товар</p>
		</button></a>
		<br><br><br>
		<p>Список товаров</p>
		<table class="table-bordered table-striped table">
		<tr>
		<th>ID товара</th>
		<th>Артикул</th>
		<th>Название товара</th>
		<th>Цена</th>
		<th>Ред.</th>
		<th>Уд.</th>
		</tr>

	<?php foreach ($AllProdItem as $AllProdItems): ?>

		<tr>
			<td><?php echo $AllProdItems['id']; ?></td>
			<td><?php echo $AllProdItems['code']; ?></td>
			<td><?php echo $AllProdItems['name']; ?></td>
			<td><?php echo $AllProdItems['price']; ?></td>
			<td><a href="/adminpanel/editproduct/<?php echo $AllProdItems['id']; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
			<td><a href="/adminpanel/product/<?php echo $AllProdItems['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
		</tr>
	<?php endforeach; ?>



		</table>


	</div>
</div>