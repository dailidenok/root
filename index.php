<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>vipnet</title>
	<meta name="keywords" content="vipnet" />
	<meta name="description" content="vipnet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
</head>
<body>

<div class="container-fluid">

	    <div class="jumbotron">
            <div class="container">
				<div class="row">
				    <div class="col-sm-2 offset1">
					<img src="images/logo.png" alt="logo" class="img-rounded">
					</div>
					<div class="col-sm-10">
					<h2>Государственное автономное учреждение Калининградской области "Калининградский государственный научно-исследовательский центр информационной и технической безопасности"</h2>
					<p><a class="btn btn-primary btn-xs" role="button">На главную <span class="glyphicon glyphicon-chevron-right"></span></a></p>
					</div>
				</div>
			</div>
		</div>


         

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
	<!--It is to create a button with three horizontal lines. This button is displayed when the screen width is small and the nav-bar collapses. When you click on it, the nav-bar expands.-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sm-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://www.kgnic.ru">О нас</a> <!--Add a header class .navbar-header to the div element. Include an <a> element with class navbar-brand. This will give the text a slightly larger size.-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="sm-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://www.infotecs.ru/">О Vipnet</a></li>
        <li><a href="images/ing.jpg">Наш инженер</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
	
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
 <div class="row">
    <div class="col-sm-1"></div>
	<div class="col-sm-10">
	<h3>Для заказа заполните форму</h3>
		<form class="form-horizontal" role="form" id="mainform" action="form_processing.php" method="post">
		  <div class="form-group">
			<label class="col-sm-2 control-label" for="FIO">Ваше имя</label>
			<div class="col-sm-10">
			  <input class="form-control" type="text" id="FIO" name="FIO" placeholder="Фамилия Имя Отчество" pattern="^([а-яА-ЯёЁ]{1,50}\s{0,1}){1,3}$">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label" for="Organization">Организация</label>
			<div class="col-sm-10">
			  <input class="form-control" type="text" id="Organization" name="Organization" placeholder="ООО &quot;Компания&quot;" pattern="^.{3,512}$">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label" for="BIK">БИК</label>
			<div class="col-sm-10">
			  <input class="form-control" type="text" id="BIK" name="BIK" placeholder="000000000" pattern="^[0-9]{9}$">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label" for="INN">ИНН</label>
			<div class="col-sm-10">
			  <input class="form-control" type="text" id="INN" name="INN" placeholder="000000000000" pattern="^[0-9]{10,12}$">
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-2 control-label" for="Schet">Р/С</label>
			<div class="col-sm-10">
			  <input class="form-control" type="text" id="Schet" name="Schet" placeholder="00000000000000000000" pattern="^\d{20}$">
			</div>
		  </div>
		  <div class="form-group" >
			<label class="col-sm-2 control-label" for="Comment">Комментарий</label>
			<div class="col-sm-10">
			  <textarea class="form-control" rows="3" name="Comment" pettertn="^.{0,512}$"></textarea> 
			</div>
		  </div>
		  
		  
		 		  
		  
		  <div id="cont">
		  <div class="prod">
			  <div class="form-group ">
				<label class="col-sm-2 control-label" for="Product">Продукт</label>
				<div class="col-sm-5">
					<select class="form-control" name="Product">
					  <option>Vipnet client</option>
					  <option>Другие продукты Vipnet</option>
					</select>
				</div>
				<label class="col-sm-2 control-label" for="Quantity">Количество</label>
				<div class="col-sm-2">
					<input class="form-control Quantity" type="text"  name="Quantity" placeholder="1" pattern="^\d{1,3}$">
				</div>
				<div class="col-sm-1">
					<button type="button" class="btn btn-default addbtn btn-block">
						<span class="glyphicon glyphicon-plus"></span>
					</button>
				</div>
			  </div>
		  </div>
		  </div>
		  
		  
		   <div class="row"><div class="col-sm-offset-2" id='output'></div></div>
		   <div class="row"><div class="col-sm-offset-2">
		  	  <button type="submit" class="btn btn-primary btn-lg btn-block">Отправить</button>
		  </div></div>
		  
		  
		  
		  
		  		  
		</form>
	
    
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/js_script.js"></script>
<script src="js/bootstrap.min.js"></script>	
</body>
</html>