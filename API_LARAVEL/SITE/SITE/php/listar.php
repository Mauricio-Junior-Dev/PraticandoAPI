<?php
$url = ('http://127.0.0.1:8000/api/produtos');

$response = file_get_contents($url);

if ($response !== false) {
    $data = json_decode($response, true);
} else {
    echo "Erro ao acessar a API";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando</title>
</head>

<body>

    <section class="container">
        <h2>Produtos</h2>
        <table>
            <tr>
                <th>Preço</th>
                <th>Nome</th>
            </tr>
            <?php foreach ($data as $produtos) : ?>
                <tr>
                    <td><?php echo $produtos['price']; ?></td>
                    <td><?php echo $produtos['name']; ?></td>

                    <td>
                        <a href="editar_administrador.php?id=<?php echo $produtos['price']; ?>" class="action-btn">Editar</a>
                        <a href="excluir_administrador.php?id=<?php echo $produtos['name']; ?>" class="action-btn delete-btn">Excluir</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
        <p></p>
        <a href="painel_admin.php">Voltar ao Painel do Administrador</a>

    </section>




    <script src="script2.js"></script>
</body>

</html>