<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<style>
		* {
			font-family: dejavu sans;
			font-size: 24px;
			font-style: normal;
			font-weight: 400;
		}

		p {
			margin: 10px 0;
		}

		table,
		th,
		td {
			border: 1px solid black;
		}
	</style>
	<div style="display: flex; justify-content: center; margin-top: 20px;" class="wrapper">
		<div style="width: 608px; display: flex; justify-content: center; flex-direction: column;" class="max-width">
			<div style="display: flex; justify-content: center;" class="header">
				<img style="height: 80px; width: 160px;"
					src="https://shop.to.coffee/upload/CMax/2d9/2d96b47d8e60e6e16a729436bcbe7127.png" alt="">
			</div>
			<p style="display: flex; justify-content: center; font-size: 15px;">Интернет-магазин кофе shop.to.coffee
				<br> г. Владимир,
				ул. Производственная Зона,
				4
				<br> shop@to.coffee /
				8 800 302-26-54
			</p>
			<P style="font-family: dejavu sans; font-size: 24px; font-style: normal; font-weight: 400;">
				Чек №
				<?php
				session_start();
				echo $_SESSION['userid'];
				echo '<br>';
				echo date('d.m.Y Открыт: H:i:s', time());
				?>
			</P>
			<table>
				<tbody style="text-align: left;">
					<tr id="last">
						<th>Товар</th>
						<th>Кол-во</th>
						<th>Цена</th>
						<th>Сумма</th>
					</tr>

					<tr>
						<td style="border: none;"></td>
						<td style="border: none;"></td>
						<td>Всего</td>
						<td id="totalAll">123132</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript">
		let temp = '',
			all, totalKey = 0;
		totalCart = JSON.parse(window.localStorage.getItem("totalCart"));
		console.log(totalCart)
		totalCart.forEach(element => {
			all = Number(element.quantity) * Number(element.costCart);
			totalKey += all;
			console.log(totalKey)
			temp += `
			<tr>
				<td>${element.name} ${element.weight}</td>
				<td>${element.quantity}</td>
				<td>${element.costCart}₽</td>
				<td>${all}₽</td>
			</tr>`;
		});
		document.querySelector('#last').insertAdjacentHTML('afterend', temp);
		document.querySelector('#totalAll').innerHTML = Number(totalKey) + "₽";
	</script>
</body>

</html>