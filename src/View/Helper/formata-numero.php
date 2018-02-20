<?php
namespace App\View\Helper;
use Cake\View\Helper;

Class MoneyHelper extends Helper{
	public function format($number)
	{
		return "R$".number_format($number,2,""".");
	}
}


?>