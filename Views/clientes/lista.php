<html>
<head>
	<title>Primeira Página </title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Endereço</td>
        </tr>
<?php foreach($clientes as $cliente){ ?>
        <tr>
            <td><?php echo $cliente["id"]; ?></td>
            <td><?php echo $cliente["nome"]; ?></td>
            <td><?php echo $cliente["endereco"]; ?></td>
        </tr>
<?php }?>
    </table>
</body>
</html>
