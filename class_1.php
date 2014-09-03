<?php
require_once('class_item.php');
class Order
{
public $Schet;
public $Comment;
public $Product;
public $Quantity;

public $FIO;
public $organization;
public $BIK;
public $INN;
public $items;

function __construct() {
       
   }
  
    public function add()
    {
        /**
        Put your database code here to extract from database.
        **/
		include("dbs.php");
		foreach ($this->items as $key => $val)
		{
	$query="INSERT INTO order_table (fio, organization, bik, inn, account, comment, product, quantity) VALUES ('$this->FIO', '$this->organization', '$this->BIK', '$this->INN', '$this->Schet', '$this->Comment', '$val->Product', '$val->Quantity')";
	echo $query;
		mysqli_query($dbcnx, $query);
		}
		

        return("<p>Ваша заявка принята, с вами свяжется ответственный исполнитель</p>");
    }
    /**public function enterName($TName)
    {
        this->$name = $TName;
        
        Put your database code here.
       
    } **/
}
?>