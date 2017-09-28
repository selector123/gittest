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
		<a href="/adminpanel/createcat">
		<button class="btn btn-default">
		<p><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Добавить категорию</p>
		</button></a>
		<br><br><br>
		<p>Список товаров</p>
		<table class="table-bordered table-striped table">
		<tr>
		<th>ID категории</th>
		<th>Имя</th>
		<th>Номер</th>
		<th>Статус</th>
		<th>Ред.</th>
		<th>Уд.</th>
		</tr>

	<?php foreach ($Categories as $CategoryItem): ?>

		<tr>
			<td><?php echo $CategoryItem['id']; ?></td>
			<td><?php echo $CategoryItem['name']; ?></td>
			<td><?php echo $CategoryItem['sort_order']; ?></td>
			<td><?php echo $CategoryItem['status']; ?></td>
			<td><a href="/adminpanel/editcategory/<?php echo $CategoryItem['id']; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
			<td><a href="/adminpanel/deletecat/<?php echo $CategoryItem['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
		</tr>
	<?php endforeach; ?>



		</table>


	</div>
</div>