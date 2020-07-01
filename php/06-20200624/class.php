<?php 
class ConNguoi
{
    public $name;
    public function setName($name)
    {
        $this->name =$name;
    }
    public function getName()
    {
        return $this->name;
    }
}
$thanh = new ConNguoi();
echo "Nguyen". "<br>";
echo "Tan". "<br>";
$thanh->setName('Thanh');
echo $thanh->getName();
?>





