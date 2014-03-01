<?php

class Helper {

    public static function generateCheckboxList($model, $attribute, &$form, $data) {
        $i = 0;
        //$data = CHtml::listData(FsInteriorPropertyFeatur::model()->findAll(), 'id', 'title');
        $html = '<table cellpadding = "3">';
        $html .= '<tr>';

        foreach ($data as $key => $value) {
            if ($i != 0 && $i % 4 == 0) {
                $html .= '</tr>';
                $html .= '<tr>';
            }
            $html .= '<td>' . $form->checkBox($model, $attribute . '[' . $i . ']', array('value' => $key)) . '</td>';
            $html .= '<td class="checkbox-label">' . CHtml::label($value, '') . '</td>';
            $i++;
        }
        $html .= '</tr>';
        $html .= '</table>';
        return $html;
    }
    
    public static function arrayOfObjectToString($array){
        $output = array();
        
    }

}
