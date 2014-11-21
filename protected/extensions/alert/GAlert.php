<?php
class GAlert extends CWidget
{
    public $mensaje="Oopss !!pinchaste jejeje";
    public function init()
    {
    
    echo CHtml::link('Pincha Aqui','#',array('onclick'=>'alert("'.$this->mensaje.'")'));
    }
    
    /*
    public function run()
    {
    
    }
    */
}