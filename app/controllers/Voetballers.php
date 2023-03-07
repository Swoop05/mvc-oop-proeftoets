<?php

class Voetballers extends BaseController
{
    private $VoetballersModel;

    public function __construct()
    {
        $this->VoetballersModel = $this->model('VoetballersModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Top 5 best betaalde voetballers ter wereld'
        ];

        $this->view('Voetballers/index', $data);
    }


    public function getVoetballers($id1=NULL, $id2=NULL) 
    {
        $Voetballers = $this->VoetballersModel->getVoetballers();

        $tableRows = "";
        foreach ($Voetballers as $value) {
            $tableRows .= "<tr>
                                <td>$value->Naam</td>
                                <td>$value->Club</td>
                                <td>$value->Leeftijd</td>
                                <td>$value->Nationaliteit</td>
                                <td>$value->Salaris</td>
                           </tr>";
        }

        $data = [
            'title' => 'Top 5 best betaalde voetballers ter wereld',
            'tableRows' => $tableRows
        ];

        $this->view('Voetballers/getVoetballers', $data);
    }
}