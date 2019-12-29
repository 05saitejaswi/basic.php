<?php
/*
Interface:
1. All methods must be implemented in class
2. All methods must be public
3. Cannot contain Properties
4. Only Constant variables are allowed
5. Cannot define methods only declaration
6. Class can implement any number of interfaces - implements intf1, intf2, intf3,..
*/
interface intf1
{
	public function disp1();
	public function disp2();
	public function disp3();
}


class clsA implements intf1
{
	public function disp1(){echo "<br> Disp1 <br>";}
	public function disp2(){echo "<br> Disp2 <br>";}
	public function disp3(){echo "<br> Disp3 <br>";}	
}

$a1 = new clsA();
$a1->disp1();
$a1->disp2();
$a1->disp3();

?>