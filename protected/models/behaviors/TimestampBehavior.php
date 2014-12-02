<?php
class TimestampBehavior extends CActiveRecordBehavior {
  public function beforeSave($event) {
    if ($this -> owner -> isNewRecord) {
      $this -> owner -> create_time = new CDbExpression('NOW()');
      $this -> owner -> update_time = new CDbExpression('NOW()');
      $this -> owner -> usuario_crea_mod = Yii::app()->user->id;
    } else {
      $this -> owner -> update_time = new CDbExpression('NOW()');
      $this -> owner -> usuario_crea_mod = Yii::app()->user->id;
    }
  }
}
?>
