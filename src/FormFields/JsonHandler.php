<?php
namespace TCG\Voyager\FormFields;

class JsonHandler extends AbstractHandler
{
    protected $codename = 'json';
    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('voyager::formfields.json', [
            'row'             => $row,
            'options'         => $options,
            'dataType'        => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
