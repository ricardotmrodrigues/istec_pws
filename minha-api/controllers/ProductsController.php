<?php
namespace app\controllers;
use yii\web\Controller;
class ProductsController extends Controller
{
public function actionIndex()
{
$produtos = [
[
'id' => 1,
'nome' => 'Teclado',
'preco' => 25.50
],
[

'id' => 2,
'nome' => 'Rato',
'preco' => 12.00
],
[
'id' => 3,
'nome' => 'Monitor',
'preco' => 150.00
],
];
return $this->asJson($produtos);
}
public function actionView($id)
{
$produtos = [
1 => [
'id' => 1,
'nome' => 'Teclado',
'preco' => 25.50
],
2 => [
'id' => 2,
'nome' => 'Rato',
'preco' => 12.00
],
3 => [
'id' => 3,
'nome' => 'Monitor',
'preco' => 150.00
],
];
if (!isset($produtos[$id])) {
throw new \yii\web\NotFoundHttpException(
'Produto não encontrado.'
);
}
return $this->asJson($produtos[$id]);
}
}