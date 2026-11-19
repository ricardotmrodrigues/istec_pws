<?php
namespace app\models;
class Course
{
    public static $courses = [
            [
                'id' => 1,
                'nome' => 'Gestão de sentimentos',
                'grau' => 'Licenciatura',
                'duracao' => 3,
                'area' => 'Gestão'
            ],
            [
                'id' => 2,
                'nome' => 'Engenharia Informática',
                'grau' => 'Licenciatura',
                'duracao' => 3,
                'area' => 'Tecnologia'
            ],
            [
                'id' => 3,
                'nome' => 'Ciências da AI',
                'grau' => 'Mestrado',
                'duracao' => 1,
                'area' => 'Tecnologia'
            ],
            [
                'id' => 4,
                'nome' => 'DS',
                'grau' => 'CTESP',
                'duracao' => 2,
                'area' => 'Tecnologia'
            ],
        ];
}
