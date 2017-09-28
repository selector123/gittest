<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AJAX TEST</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	<h1>AJAX пример</h1>

	 <p>Ваше имя :</p>
	 <input type="text" id="input1">
	 <br><br>

	 <p id="hello"></p>
	 <br>
	 <button id="send">Асинхронная отправка на сервер</button>
	 <script>
	 	$('#send').click(function () {
	 		var params = (
	 			text: $("#input1").val()
	 			)
	 		$.post("ajax.php", params, function (data) {
	 			$("#hello").html(data);
	 		});
	 	});
	 </script>
</body>
</html>