<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_cart extends CI_Controller {
 
 function index()
 {
  $this->load->model("shopping_cart_model");
  $data["product"] = $this->shopping_cart_model->fetch_all();
  $this->load->view("shopping_cart", $data);
 }
 
 function add()
 {


  $this->load->library("cart");
  $data = array( 
   "id"  => $_POST["product_id"],
   "name"  => $_POST["product_name"],
   "qty"  => $_POST["quantity"],
   "price"  => $_POST["product_price"]
  );
  $this->cart->insert($data); //return rowid 
  echo $this->view();


 }



 function increase()
 {
  $this->load->library("cart");
  $data = array(
      'rowid' => $_POST["row_id"],
      'qty'   => $_POST["qnty"]+1
            );
$this->cart->update($data); 
  echo $this->view();
 }

 function decrease()
 {
  $this->load->library("cart");
  $data = array(
      'rowid' => $_POST["row_id"],
      'qty'   => $_POST["qnty"]-1
            );
$this->cart->update($data); 
  echo $this->view();

 }

 function load()
 {
  echo $this->view();
 }

 function remove()
 {
  $this->load->library("cart");
  $row_id = $_POST["row_id"];
  $data = array(
   'rowid'  => $row_id,
   'qty'  => 0
  );
  $this->cart->update($data);
  echo $this->view();
 }

 function clear()
 {
  $this->load->library("cart");
  $this->cart->destroy();
  echo $this->view();

 }
 
 function view()
 {
  $this->load->library("cart");

$total_rows = count($this->cart->contents());

  $output = '';
  $output .= '<div class="cartbox__items">';


    $count = 0;

      foreach($this->cart->contents() as $items){
     $count++;
     $single_item_price =$items["price"]*$items["qty"];
     $output .='<div class="cartbox__item">
                    <div class="cartbox__item__content">
                        <h5><a href="product-details.html" class="product-name">'.$items["name"].'</a></h5>
                        <p>Qty: <span>'.$items["qty"].'</span></p>
                        <span class="price">'.$items["price"]." x ".$items["qty"]." = ".$single_item_price."TK".'</span>
                    </div>
                    <button class="cartbox__item__remove"> 
                        <i class="fa fa-plus increase" id="'.$items["rowid"].'" ><span style="display:none;">'.$items["qty"].'</span>  </i>
                      
                    </button>&nbsp;

                    <button class="cartbox__item__remove"> 
                        <i class="fa fa-minus decrease" id="'.$items["rowid"].'"><span style="display:none;">'.$items["qty"].'</span> </i>
                   
                    </button>&nbsp;

                    <button class="cartbox__item__remove"> 
                        <i class="fa fa-trash remove_inventory" id="'.$items["rowid"].'"> </i>
                    </button>

                 </div>';
    }

            $output .='</div>
            <div class="cartbox__total">
                <ul>
                    <li class="grandtotal">Total<span class="price">'.$this->cart->total()." Tk".'</span></li>
                </ul>
            </div>
            <div class="cartbox__buttons">
                <a class="food__btn" href="'.base_url().'Order/payment_method"><span>Checkout</span></a>
            </div>   
            <input id="cart_to_rows" type="hidden" value="'.$total_rows.'">';
 

  if($count == 0)
  {
   $output = '<h3 align="center">Cart is Empty</h3>';
   $output .= '<input id="cart_to_rows" type="hidden" value="'.$total_rows.'">';
  }
  return $output;
 }
}
