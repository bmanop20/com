<?php

namespace app\components;
 
 
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use frontend\models\Pttype;

class GetValue extends Component
{
 
    public function GetPttype($id){
            
        $model = Pttype::find()->where(['pttype'=>$id])->one();
        $pttype = $model->name;
        
        return $pttype;
    }
}
?>
