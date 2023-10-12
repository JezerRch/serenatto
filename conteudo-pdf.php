<?php
require "src/bd.php";
require "src/Modelo/Produto.php";
require "src/Repositorio/ProdutoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtos = $produtoRepositorio->buscarTodos();

?>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #000;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    @page {
        size: A4;
        margin: 1cm;
    }

    @media print {
        body {
            margin: 0;
            padding: 0;
        }

        table {
            page-break-inside: auto;
        }

        th,
        td {
            page-break-inside: avoid;
        }
    }
</style>

<body>
    <h1>Relatório de Produtos</h1>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto) : ?>
                <tr>
                    <td><?= $produto->getNome() ?></td>
                    <td><?= $produto->getTipo() ?></td>
                    <td><?= $produto->getDescricao() ?></td>
                    <td><?= $produto->getPrecoFormatado() ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>