<?php


namespace App\classes;


class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data = [];

    public function index()
    {
//        $this->firstName = 'Rohim';
//        $this->lastName  = 'khan';
//        echo "Full name is ".$this->firstName." ".$this->lastName;

        /*
         * Arithmetic operator
         * binary operator (+,*,-,/,%)
         * unary operator(++,--,(-) )
         * Assignment( =,+=,*=,-=,/=,%=,.=)
         * condition( >,>=,<,<=,==,!=,===,!==)
         * logical( &&,||,!)
         */
//        $this->x = 10; //statement
//        $this->y = 20;
//        $this->z = 30;

//        binary operator (+,*,-,/,%)
//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;


//        unary operator(++,--,(-) )
//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo $this->x;
//        echo '<br/>';
//        echo --$this->x;
//        echo '<br/>';
//        echo -$this->x;

//        Assignment( =,+=,*=,-=,/=,%=,.=)
//        echo $this->x += $this->y; //$this->x = $this->x +$this->y 30
//        echo '<br/>';
//        echo $this->x -= $this->y;
//        echo '<br/>';
//        echo $this->x *= $this->y;
//        echo '<br/>';
//        echo $this->x /= $this->y;
//        echo '<br/>';
//        echo $this->x %= $this->y;
//        echo '<br/>';
//        echo $this->x .= $this->y;
//        echo '<br/>';
//        condition( >,>=,<,<=,==,!=,===,!==)
//        echo $this->x > $this->y; //black mane false
//        echo $this->x < $this->y; //true mane 1
//        echo $this->x <= $this->y;
//        echo $this->x =< $this->y;
//        echo $this->x == $this->y;
//        echo $this->x !== $this->y;
//        echo $this->x == $this->y;
//        echo $this->x != $this->y;
//        echo $this->x === $this->y;//man or variable check kore


//        logical( &&,||,!)
//        echo ($this->x > $this->y) && ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) && ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) && ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);
//        echo '<br/>....<br/>';

//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';


//
//        $this->x =10;
//        for ($this->y= 99; $this->y >= 76; $this->y--)
//        {
//            echo $this->y .' ';
//        }


//        $this->x = 100;
//        do{
//            echo 'hello world <br/>';
//            $this->x++;
//
//        }
//        while ($this->x < 110);

//    $this->x =100;
//    while ($this->x < 110)
//    {
//        echo 'hello world<br/>';
//        $this->x++;
//    }


//        switch ($this->x)
//        {
//            case 10:
//                echo 'hello world';
//                break;
//            case 20:
//                echo 'hello bangladesh';
//                break;
//            case 30:
//                echo 'hello dhaka';
//                break;
//            default:
//                echo 'hello BITM';
//        }
//        {
//            echo 'hello world';
//
//        }
//        elseif ($this->x <100){
//            echo $this->'100';
//        }


//        {
//            echo $this->x;
//        }
//        else
//        {
//            echo 'hello world';
//        }

        $this->data = [10,30,30, 'BITM',100.200, true];
//        echo $this->data[9];
        foreach ($this->data as $item)
        {
            echo $item
        }


    }
}