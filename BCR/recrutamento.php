<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="appa.css">
    <link rel="icon" href="BrasilCidadeReal.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recrutamento</title>
</head>
<body>

<form action="processar_formulario.php" method="post">
    <p>Qual seu nome ?</p>
    <input name="nome" type="text" style="width: 350px" class="input w-full border mt-2" placeholder="Ex: Pedro">

    <p>Qual seu nick no Discord ?</p>
    <input name="nome" type="text" style="width: 350px" class="input w-full border mt-2" placeholder="Ex: ERICK#1789">

    <p>Por que quer entrar na Navy Seals / Cartel de Medellin ?</p>
    <input name="nome" type="text" style="width: 350px" class="input w-full border mt-2" placeholder="Ex: Por que quero fazer RP na melhor facção do BCR">

    <p>Você tem alguma experiência prévia em roleplay?</p>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">Sim</label><br>
    <input type="radio" id="feminino" name="genero" value="feminino">
    <label for="feminino">Não</label><br>
    
    <p>Qual é a sua disponibilidade de tempo para jogar?</p>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">Manha</label><br>
    <input type="radio" id="feminino" name="genero" value="feminino">
    <label for="feminino">Tarde</label><br>
    <input type="radio" id="outro" name="genero" value="outro">
    <label for="outro">Noite</label><br><br>

    <p>Você está disposto a seguir as regras do servidor e da facção / Corporação ?</p>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">Sim</label><br>
    <input type="radio" id="feminino" name="genero" value="feminino">
    <label for="feminino">Nao</label><br>
    
    <p>Matar um jogador sem motivo é considerado:</p>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">RDM</label><br>
    <input type="radio" id="feminino" name="genero" value="feminino">
    <label for="feminino">TK</label><br>
    <input type="radio" id="outro" name="genero" value="outro">
    <label for="outro">CL</label><br><br>

    <p>Deslogar no meio de uma ação é considerado:</p>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">PG</label><br>
    <input type="radio" id="feminino" name="genero" value="feminino">
    <label for="feminino">CL</label><br>
    <input type="radio" id="outro" name="genero" value="outro">
    <label for="outro">VDM</label><br><br>

    <p>Rampar escadas com um carro baixo é considerado:</p>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">PG</label><br>
    <input type="radio" id="feminino" name="genero" value="feminino">
    <label for="feminino">CL</label><br>
    <input type="radio" id="outro" name="genero" value="outro">
    <label for="outro">Dark RP</label><br><br>

    <p>Ficar batendo em uma Viatura sem motivo é considerado:</p>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">RDM</label><br>
    <input type="radio" id="feminino" name="genero" value="feminino">
    <label for="feminino">CL</label><br>
    <input type="radio" id="outro" name="genero" value="outro">
    <label for="outro">Forçar Ação</label><br><br>

    <p>Tu esta em uma perseguicao e voce acaba capotando, o que voce faria asseguir ?</p>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label for="masculino">Mato o cara e dou bala perdida</label><br>
    <input type="radio" id="feminino" name="genero" value="feminino">
    <label for="feminino">Continuo a perseguicao</label><br>
    <input type="radio" id="outro" name="genero" value="outro">
    <label for="outro">Dou QTA da ação</label><br><br>


    <input type="submit" value="Enviar">
</form>

</body>
</html>
