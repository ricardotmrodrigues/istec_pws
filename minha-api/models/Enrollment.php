<?php
namespace app\models;
class Enrollment
{
    // estudanteId -> Student::$students | cursoId -> Course::$courses
    public static $enrollments = [
            [
                'id' => 1,
                'estudanteId' => 101,
                'cursoId' => 1,
                'anoLetivo' => '2026/2027',
                'estado' => 'Ativa'
            ],
            [
                'id' => 2,
                'estudanteId' => 102,
                'cursoId' => 2,
                'anoLetivo' => '2026/2027',
                'estado' => 'Ativa'
            ],
            [
                'id' => 3,
                'estudanteId' => 103,
                'cursoId' => 3,
                'anoLetivo' => '2026/2027',
                'estado' => 'Ativa'
            ],
            [
                'id' => 4,
                'estudanteId' => 104,
                'cursoId' => 4,
                'anoLetivo' => '2025/2026',
                'estado' => 'Concluída'
            ],
            [
                'id' => 5,
                'estudanteId' => 101,
                'cursoId' => 4,
                'anoLetivo' => '2025/2026',
                'estado' => 'Anulada'
            ],
            [
                'id' => 6,
                'estudanteId' => 102,
                'cursoId' => 1,
                'anoLetivo' => '2025/2026',
                'estado' => 'Concluída'
            ],
        ];
}
