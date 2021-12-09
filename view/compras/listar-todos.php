<?php include __DIR__ . '/../inicio-html.php'; ?>


<?php
//var_dump($compras);

foreach ($compras as $compra){
echo $compra->getId();
echo $compra->getComprador();
echo $compra->getFornecedor();
}
?>

<?php include __DIR__ . '/../fim-html.php'; ?>


