<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Course;
class CoursesController extends Controller
{
    public function actionIndex()
    {
        $grau = Yii::$app->request->get('grau');
        if ($grau === null || $grau === '') {
            return $this->asJson(Course::$courses);
        }
        $filtrados = array_filter(Course::$courses, function ($curso) use ($grau) {
            return strcasecmp($curso['grau'], $grau) === 0;
        });
        return $this->asJson(array_values($filtrados));
    }

    public function actionView($id)
    {
        $key = array_search($id, array_column(Course::$courses, 'id'));
        if ($key === false) {
            throw new \yii\web\NotFoundHttpException(
            'Curso não encontrado.'
            );
        }
        return $this->asJson(Course::$courses[$key]);
    }
}
