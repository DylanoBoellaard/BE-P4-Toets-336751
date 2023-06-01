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
        $result = $this->examinatorModel->getRijlesPakketen();

        $rows = "";
        foreach ($result as $rijlespakket) {
            $rows .= "<tr>
                        <td>$rijlespakket->Voornaam</td>
                        <td>$rijlespakket->Datum</td>
                        <td>$rijlespakket->Rijbewijscategorie</td>
                        <td>$rijlespakket->Rijschool</td>
                        <td>$rijlespakket->Stad</td>
                        <td>$rijlespakket->Uitslag</td>
                    </tr>";
        }

        $data = [
            'title' => 'Overzicht rijlespakketen leerlingen',
            'tableRows' => $rows
        ];

        $this->view('rijlespakket/index', $data);
    }
}
