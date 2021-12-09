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

        <?php
        $montante = 0;
        foreach ($compras as $compra){
            ?>
            <tbody>
            <tr>
            <th><?=  $compra->getId() ?> </th>
            <td> <?= $compra->getComprador()?> </td>
            <td> <?= $compra->getDescricao()?> </td>
            <td> <?=$compra->getPrecoUnit()?> </td>
            <td> <?=$compra->getQuantidade()?> </td>
            <td> <?=$compra->getEndereco()?>  </td>
            <td> <?=$compra->getFornecedor() ?> </td>
                <?php $montante += $compra->getPrecoUnit() * $compra->getQuantidade() ?>
            </tr>
            </tbody>
            <?php } ?>
            <label class="lead pb-3">O valor total acumulado em compras é de: R$<?= number_format($montante, 2, ',', '.');?></label>
</table>


<?php include __DIR__ . '/../fim-html.php'; ?>


