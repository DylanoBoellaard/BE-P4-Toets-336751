<?php

class Examinator extends BaseController
{
    private $examinatorModel;

    public function __construct()
    {
        $this->examinatorModel = $this->model('ExaminatorModel');
    }

    public function index()
    {
        $result = $this->examinatorModel->getExamens();

        $rows = "";
        foreach ($result as $rijlespakket) {
            $rows .= "<tr>
                        <td>$rijlespakket->Voornaam $rijlespakket->Tussenvoegsel $rijlespakket->Achternaam</td>
                        <td>$rijlespakket->Datum</td>
                        <td>$rijlespakket->Rijbewijscategorie</td>
                        <td>$rijlespakket->Rijschool</td>
                        <td>$rijlespakket->Stad</td>
                        <td>$rijlespakket->Uitslag</td>
                    </tr>";
        }

        $data = [
            'title' => 'Overzicht afgenomen examens examinatoren',
            'tableRows' => $rows
        ];

        $this->view('examinator/index', $data);
    }
}
