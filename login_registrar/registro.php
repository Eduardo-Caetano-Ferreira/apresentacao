<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<center>
    <h1>Registre sua conta</h1>
    <form action="codigo_r.php" method="POST">
        <input required type="text" name="nome" placeholder="Nome">
<br><br>
        <input required type="number" name="celular" placeholder="celular">
<br><br>
        <input required type="text" name="codigo_v" placeholder="Código de Verificação">  <button> Enviar Código </button>
<br><br>    
        <input required type="text" name="email_r" placeholder="E-mail">
<br><br>
        <input required type="password" name="senha" placeholder="Senha">
<br><br>
        <input required type="password" name="c_senha" placeholder="Confirmar Senha">
<br><br>
        <button type="submit"> Confirmar </button>
<br><br>
        <a href="index.html"> Voltar </a>
    </form>
</center>
</body>
</html>