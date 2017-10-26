<html>
<head>
<title>CRM</title>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" class="ui" href="semantic/semantic.min.css"></link>

<h1 class="ui blue header" align="center">Acceso Usuario</h1>
<hr>
</head>
<body>
<div class="column">
    <div class="ui center aligned container">
        <div class="ui blue inverted segment">
            <form action="login.php" method="post" class="ui form">
                <input type="text" name="email" placeholder="Ingrese email"><br>
                <input type="password" name="clave" placeholder="Ingrese clave"><br>
                <input type="submit" value="Ingresar">
                </form>
        </div>
    </div>
</div>
</body>
</html>