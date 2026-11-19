<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Enrollment;
class EnrollmentsController extends Controller
{
    public function actionIndex()
    {
        $estado = Yii::$app->request->get('estado');
        if ($estado === null || $estado === '') {
            return $this->asJson(Enrollment::$enrollments);
        }
        $filtrados = array_filter(Enrollment::$enrollments, function ($enr) use ($estado) {
            return strcasecmp($enr['estado'], $estado) === 0;
        });
        return $this->asJson(array_values($filtrados));
    }

    public function actionView($id)
    {
        $key = array_search($id, array_column(Enrollment::$enrollments, 'id'));
        if ($key === false) {
            Yii::$app->response->statusCode = 404;
            return $this->asJson([
                'status' => 404,
                'erro' => 'Inscrição não encontrada.',
                'id' => (int) $id,
            ]);
        }
        return $this->asJson(Enrollment::$enrollments[$key]);
    }
}
