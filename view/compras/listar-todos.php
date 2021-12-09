<?php include __DIR__ . '/../inicio-html.php'; ?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Comprador</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço Unitário</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Endereço</th>
        <th scope="col">Fornecedor</th>
    </tr>
    </thead>

        <?php foreach ($compras as $compra){?>
            <tbody>
            <tr>
            <th><?=  $compra->getId() ?> </th>
            <td> <?= $compra->getComprador()?> </td>
            <td> <?= $compra->getDescricao()?> </td>
            <td> <?=$compra->getPrecoUnit()?> </td>
            <td> <?=$compra->getQuantidade()?> </td>
            <td> <?=$compra->getEndereco()?>  </td>
            <td> <?=$compra->getFornecedor() ?> </td>
            </tr>
            </tbody>
            <?php } ?>
</table>


<?php include __DIR__ . '/../fim-html.php'; ?>


