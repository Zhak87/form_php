<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>zhakenov</title>

</head>
<body>

	<B>Заявка на получение кредита в KaspiBank.</B>
			<FORM method="POST" action="loan.php">
			Имя:
			<INPUT name="FirstName" type="text">
			Фамилия:
			<INPUT name="LastName" type="text">
			Возраст:
			<INPUT name="Age" type="text" size="3">
			<BR>
			<BR>
			АДРЕС:
			<TEXTAREA name="Address" rows="4" cols="40">
			</TEXTAREA>
			<BR>
			<BR>
			Укажите размер Вашей текущей заработной платы:
			<SELECT NAME="Salary">
			<OPTION VALUE=0>ДО $10000</OPTION>
			<OPTION VALUE=10000>$10000 - $25000</OPTION>
			<OPTION VALUE=25000>$25000 - $50000</OPTION>
			<OPTION VALUE=50000>Свыше $50000</OPTION>
			</SELECT>
			<BR><BR>
			Выберите сумму необходимого кредита:<BR><BR>
			<INPUT name="Loan" type="radio" value="1000">$1000 под 8,0% годовых
			<br>
			<INPUT name="Loan" type="radio" value="5000">$5000 под 11,5% годовых
			<br>
			<INPUT name="Loan" type="radio" value="10000">$10000 под 15,0% годовых
			<BR>
			<BR>
			
			<a href="http://formphp/main.php"><INPUT type="submit" value="Подать заявку"></a>
			<INPUT type="reset" value="Очистить">
	</FORM>
	
</body>
</html>