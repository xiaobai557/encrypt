<?php
// 调试检查DEMO
/**
 * @author zhorz
 */
class ProgramLanunchLogic
{
    public function __construct() 
    {
        $this->type  = $this->createType();
        $this->index = $this->createIndex();
    }

    public function action($name)
    {
        var_dump($this->type);
        var_dump($this->index);
    }

    protected function createType()
    {
        return new StdClass();
    }

    protected function createIndex()
    {
        return new StdClass();
    }
}


$logic = new ProgramLanunchLogic();
$logic->action(1);

// dev new 
$logic = new ProgramLanunchLogic();
$logic->action('somthing chnage');

// dev feature dev2 branch
$logic = new ProgramLanunchLogic();
$logic->action('conflict');