<!DOCTYPE html>
<html ng-app="numberApp">
<head>
	<title>Numbers-Online</title>
	<meta charset="utf-8"> 
	<link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="/css/style.css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="container border-container">
		<header>
			<div class="col-md-8">
				<h1>Numbers <span>ONLINE</span></h1>
				твой цифровой переводчик
			</div>
			<div class="col-md-4">
				<blockquote>Лень вручную записывать числа? Воспользуйся нашим сервисом!</blockquote>
			</div>
		</header>
	</div>
	<div class="row content" ng-controller="NumberForm">		
		<form class="form-horizontal">
			<fieldset>
				<div class="form-group">
					<label class="col-md-4 control-label">Число</label>
					<div class="col-md-4">
						<input ng-model="number" placeholder="Введите ваше число" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">Язык</label>
					<div class="col-md-4">
						<select ng-model="leng" class="form-control input-md" ng-change="translate()">
							<option value="ua">Українска</option>
							<option value="ru">Русский</option>
							<option value="en">English</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">Текст</label>
					<div class="col-md-4">
						<input ng-model="text" placeholder="Результат" class="form-control input-md">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4 col-md-offset-4">
						<button class="btn btn-primary" ng-click="translate($event)">Перевести</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
	<script src="/js/angular.min.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>