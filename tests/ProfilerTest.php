<?php 

class ProfilerTest extends PHPUnit_Framework_TestCase{
	
  public function testIsThereAnySyntaxError(){
	$var = new arashrasoulzadeh\phprofiler\Profiler;
	$this->assertTrue(is_object($var));
	unset($var);
  }
 
  
}