<?php
/*
private, public and protected are the access modifiers. 

public:
if you use public keyword with function/ variable then it will be able to use any where in the class.
// BaseClass
class pub {
    public $tag_line = "A Computer Science Portal for Geeks!";
    function display() {
        echo $this->tag_line."<br/>";
    }
}
 
// SubClass
class child extends pub {
    function show(){
        echo $this->tag_line;
    }
}


protected:
if you use protected keyword with function/variable then it can be used only within the class by itself and can be called in extend/inherit class.
// Base Class
class pro {
    protected $x = 500;
    protected $y = 500;
             
    // Subtraction Function
    function sub()
    {
        echo $sum=$this->x-$this->y . "<br/>";
    }    
}
 
// SubClass - Inherited Class
class child extends pro {
    function mul() //Multiply Function
    {
        echo $sub=$this->x*$this->y;
    }
}


private:
if you use private keyword with function/ variable then it can only be used with in the class. 

<?php
 
// Base Class
class demo {
    private $name="A Computer Science Portal for Geeks!";
     
    private function show()
    {
        echo "This is private method of base class";
    }
}
 
// Sub Class
class child extends demo {
    function display()
    {
        echo $this->name; (cannot use name in this because of private)
    }
}
*/