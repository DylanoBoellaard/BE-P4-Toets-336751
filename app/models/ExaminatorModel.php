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
        $sql = "SELECT extor.Voornaam
                        ,exam.Datum, exam.Rijbewijscategorie, exam.Rijschool, exam.Stad, exam.Uitslag
                 FROM Examinator AS extor
                 
                 INNER JOIN Examen AS exam
                 ON lpp.ExamenId = exam.Id

                 INNER JOIN ExamenPerExaminator AS epe
                 ON epe.ExaminatorId = epe.Id
                 
                 ORDER BY count(exam.Geslaagd) ASC";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
