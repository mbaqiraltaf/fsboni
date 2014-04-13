<?php

class Helper {

    public static function generateCheckboxList($model, $attribute, &$form, $data, $fsboni_prop_id) {
        $criteria = new CDbCriteria;
        $criteria->select = 'id'; 
        $criteria->condition = "fsboni_property_id = '" . $fsboni_prop_id . "'";
        $selectedValues = array();

        $propertyData = FsProperty::model()->find($criteria);
        $selectedResult = $model->findAll('prop_id = ' . $propertyData->id);
        foreach($selectedResult as $value)
        {
            $selectedValues[] = $value->$attribute;
        }
        
        $i = 0;
        //$data = CHtml::listData(FsInteriorPropertyFeatur::model()->findAll(), 'id', 'title');
        $html = '<table cellpadding = "3">';
        $html .= '<tr>';

        foreach ($data as $key => $value) {
            if ($i != 0 && $i % 4 == 0) {
                $html .= '</tr>';
                $html .= '<tr>';
            }
            $html .= '<td>' . $form->checkBox($model, $attribute . '[' . $i . ']', array('value' => $key, 'checked' => (in_array($key, $selectedValues)) ? 'checked' : '')) . '</td>';
            $html .= '<td class="checkbox-label">' . CHtml::label($value, '') . '</td>';
            $i++;
        }
        $html .= '</tr>';
        $html .= '</table>';
        return $html;
    }

    public static function arrayOfObjectToString($array) {
        $output = array();
        foreach ($array as $object) {
            
        }
    }

    public static function showDropDownValues($itemObject, $label, $attributeName, $relationalColumnName = '') {
        $html = '';
        $value = '';
        if (is_array($itemObject)) {
            $values = array();
            if (count($itemObject)) {
                foreach ($itemObject as $object) {
                    $values[] = $object->$relationalColumnName->$attributeName;
                }
            }
            $value = implode(',', $values);
        } else {
            if ($itemObject->$attributeName) {
                $value = $itemObject->$attributeName;
            }
        }
        if ($value) {
            $html .= '<span>';
            $html .= '<span>';
            $html .= '<b>';
            $html .= $label . ': ';
            $html .= '</b>';
            $html .= '<span>';
            $html .= $value;
            $html .= '</span>';
            $html .= '</span><br>';
            $html .= '</span>';
        }
        return $html;
    }

}
