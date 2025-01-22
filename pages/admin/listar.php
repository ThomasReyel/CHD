<?php
$admin = new Admin();
$listasOng = $admin->listarOng();
$listasDoador = $admin->listarDoador();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listador</title>
</head>
<body>
    <style>
        /* Estilizando a tabela e as bordas das células */
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    <h1>Listador de Ong</h1>
    <?php if (is_array($listasOng) && count($listasOng) > 0): ?>
        <table style="border: 2px solid black;">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPNJ</th>
                <th>EMAIL</th>
                <th>OPÇÃO</th>
            </tr>
            <?php foreach ($listasOng as $lista => $value): ?>
                <tr>
                    <td><?= $value['ong_id'] ?></td>
                    <td><?= $value['ong_nome'] ?></td>
                    <td><?= $value['ong_cnpj'] ?></td>
                    <td><?= $value['ong_email'] ?></td>
                    <td>
                    <form action="/editarOng" method="post">
                    <button name="id" value="<?= $value['ong_id'] ?>">Editar</button>
                    </form>
                    <form action="/excluirOng" method="post">
                    <button name="id" value="<?= $value['ong_id'] ?>">Excluir</button>
                    </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhuma ONG encontrada.</p>
    <?php endif; ?>

    <h1>Listador de doador</h1>
    <?php if (is_array($listasDoador) && count($listasDoador) > 0): ?>
        <table style="border: 2px solid black;">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>EMAIL</th>
                <th>OPÇÕES</th>
            </tr>
            <?php foreach ($listasDoador as $atributos => $value): ?>
                <tr>
                    
                    <td><?= $value['doa_id'] ?></td>
                    <td><?= $value['doa_nome'] ?></td>
                    <td><?= $value['doa_cpf'] ?></td>
                    <td><?= $value['doa_email'] ?></td>
                    <td>
                    <form action="/editarDoador" method="post">
                    <button name="id" value="<?= $value['doa_id'] ?>">Editar</button>
                    </form>
                    <form action="/excluirDoador" method="post">
                    <button name="id" value="<?= $value['doa_id'] ?>">Excluir</button>
                    </form>
                    </td>
                    
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum doador encontrado.</p>
    <?php endif; ?>

    <a href="/">Retornar para a tela inicial</a>
</body>
</html>
