<?php

public function actionAjax(){
    $request=trim($_GET['term']);
    if($request!=''){
        $model=Libros::model()->findAll(array("titulo"=>"name like '$request%'"));
        $data=array();
        foreach($model as $get){
            $data[]=$get->name;
        }
        $this->layout='empty';
        echo json_encode($data);
    }
}

?>
