<?php

class ExaminatorModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getExamens()
    {
        $sql = "SELECT exam.Datum, exam.Rijbewijscategorie, exam.Rijschool, exam.Stad, exam.Uitslag
                        ,extor.Voornaam
                 FROM Examen AS exam
                 
                 INNER JOIN ExamenPerExaminator AS epe
                 ON epe.ExamenId = exam.Id

                 INNER JOIN Examinator AS extor
                 ON epe.ExaminatorId = extor.Id

                 GROUP BY epe.ExaminatorId
                 ORDER BY COUNT(exam.Uitslag) DESC";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
