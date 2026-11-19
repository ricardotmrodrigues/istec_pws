<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Student;
class StudentsController extends Controller
{
    public function actionIndex()
    {
        $anoCurricular = Yii::$app->request->get('anoCurricular');
        if ($anoCurricular === null || $anoCurricular === '') {
            return $this->asJson(Student::$students);
        }
        $filtrados = array_filter(Student::$students, function ($student) use ($anoCurricular) {
            return strcasecmp($student['anoCurricular'], $anoCurricular) === 0;
        });
        return $this->asJson(array_values($filtrados));
    }

    public function actionView($id)
    {
        $key = array_search($id, array_column(Student::$students, 'id'));
        if ($key === false) {
            Yii::$app->response->statusCode = 404;
            return $this->asJson([
                'status' => 404,
                'erro' => 'Estudante não encontrado.',
                'id' => (int) $id,
            ]);
        }
        return $this->asJson(Student::$students[$key]);
    }
}
