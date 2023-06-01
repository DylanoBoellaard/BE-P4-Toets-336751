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
                        ,extor.Voornaam, extor.Tussenvoegsel, extor.Achternaam,
                 
                 (SELECT COUNT(*) FROM Examen AS countExam
                    INNER JOIN ExamenPerExaminator AS epe
                    ON epe.ExamenId = countExam.Id

                    WHERE epe.ExaminatorId = extor.Id AND countExam.Uitslag = 'Geslaagd') AS GeslaagdCount
                 
                FROM Examen AS exam

                 INNER JOIN ExamenPerExaminator AS epe
                 ON epe.ExamenId = exam.Id

                 INNER JOIN Examinator AS extor
                 ON epe.ExaminatorId = extor.Id

                 ORDER BY GeslaagdCount DESC, exam.Datum";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
