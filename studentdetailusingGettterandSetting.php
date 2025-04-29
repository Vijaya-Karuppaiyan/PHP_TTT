<?php
class Student
{
    private $sid;
    private $sname;
    private $smarks;
    function setter($sid,$sname, $smarks)
    {
        $this->sid=$sid;
        $this->sname = $sname;
        $this->smarks = $smarks;
    }

    function getter()
    {
        return  $this->sid ."\t".$this->sname ."\t".$this->smarks;
    }
}
$s = new Student();
$s->setter(23,"Tom",78);
echo $s->getter();
?>
