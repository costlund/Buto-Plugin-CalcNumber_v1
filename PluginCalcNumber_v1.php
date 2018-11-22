<?php
/**
<p>
 Number calculator.
</p>
 */
class PluginCalcNumber_v1{
  public $number = null;
  public $numbers = array();
  function __construct($number = null, $numbers = array()) {
    $this->number = $number;
    $this->numbers = $numbers;
  }
  public function isEven(){
    if(is_null($this->number)){
      return null;
    }elseif($this->number % 2){
      return false;
    }else{
      return true;
    }
  }
  public function getMedian(){
    $numbers = $this->numbers;
    if(sizeof($numbers)==0){
      return null;
    }
    /**
     * Sort.
     */
    asort($numbers);
    /**
     * Keys fix after asort() from 0-....
     */
    $temp = array();
    $i=0;
    foreach ($numbers as $key => $value) {
      $temp[$i] = $value;
      $i++;
    }
    $numbers = $temp;
    /**
     * 
     */
    $this->number = sizeof($numbers);
    if($this->isEven()){
      $key1 = (sizeof($numbers)/2)-1;
      $key2 = (sizeof($numbers)/2)-0;
      return ($numbers[$key1] + $numbers[$key2]) / 2;
    }else{
      $key = floor((sizeof($numbers)) / 2);
      return $numbers[$key];
    }
  }
}
