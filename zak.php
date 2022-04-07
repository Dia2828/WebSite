<?php
	//Устанавливаем доступы к базе данных:
		$host = 'db'; //имя хоста
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = 'Pav123'; //пароль, по умолчанию пустой
		$db_name = 'Tax'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
		$link = mysqli_connect($host, $user, $password, $db_name);

	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");

	//Формируем тестовый запрос:
		$query = "REPLACE Inspectorate SET Name = '".$_POST['first-name']."',
		Surname = '".$_POST['lastname']."',
		Phone = '".$_POST['phonenumber']."',
		Code = '".$_POST['postalcode']."',
		St = '".$_POST['state']."',
		Ar = '".$_POST['area']."',
		Email = '".$_POST['emailid']."',
		Ed = '".$_POST['education']."',
		Coun = '".$_POST['country']."',
		Reg = '".$_POST['region']."'";

	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		var_dump($result);
?>
<div><center>
<head>
  <title>Список профилей</title>
  <meta charset="utf-8" />
</head>
<body>
<h1>Таблица в базе данных</h1>
<table class='tabl'>
        <thead>
            <tr>
				<td>Номер</td>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Номер телефона</td>
                <td>Почтовый индекс</td>
				<td>Государство</td>
                <td>Область</td>
				<td>Электронной почты</td>
				<td>Образование</td>
				<td>Страна</td>
				<td>Штат/Регион</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $result = mysqli_query($link,"SELECT * FROM Inspectorate");
            while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Surname']?></td>
                    <td><?php echo $row['Phone']?></td>
                    <td><?php echo $row['Code']?></td>
					<td><?php echo $row['St']?></td>
					<td><?php echo $row['Ar']?></td>
					<td><?php echo $row['Email']?></td>
					<td><?php echo $row['Ed']?></td>
					<td><?php echo $row['Coun']?></td>
					<td><?php echo $row['Reg']?></td>
                </tr>

            <?php
            }
            ?>
        </tbody>
</table>
</div>	
</body>
</html>	