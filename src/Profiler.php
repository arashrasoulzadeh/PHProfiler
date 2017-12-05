<?php namespace arashrasoulzadeh\phprofiler;

/**
*  php profiler
*
*  Use this class to profile your php code
*
*  @author Arash Rasoulzadeh
*/
class Profiler{
    var $task = 0;
	var $time_decimals = 3;
    public  function startProfiler()
    {
    	$this->task = microtime(true);
    }
    public  function endProfiler()
    {
    	$time_elapsed_secs = microtime(true) - $this->task;
    	return round($time_elapsed_secs,$this->time_decimals);
    }
}