<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #fffaf0;;
        font-family: Arial, sans-serif;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        width: 300px;
    }
    button {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #ff7700;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
    }
    input {
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    label {
        margin-bottom: 5px;
        font-weight: bold;
    }   
    a {
        text-decoration: none;
        color: #fff;    
    }
</style>
<body>
    <form action="/home" method="POST">
        <h1>Cadastro</h1>        
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Email</label>
        <input type="text" name="email">
        <label>Senha</label>
        <input type="password" name="senha">
        <button type="submit"><a href="/home">Cadastrar</a></button>
    </form>     
</body>
</html>