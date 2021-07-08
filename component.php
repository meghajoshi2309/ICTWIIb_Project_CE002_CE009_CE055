<?php
function component($productname,$productprice,$productimg,$productid)
{
    $product_old_price=(int)$productprice+200;
    $element="
    <div class='col-md-4 col-sm-6 my-3 my-md-0'>
    <form action='#' method='post'>
                <div class='card shadow'>
                <div>
                <img src='$productimg' alt='image1' height='200'>
                </div>
                <div class='card-body'>
                <h5 class='card-title'>$productname</h5>
                <h6>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='far fa-star'></i>
                </h6>
                <p class='card-text'>GADA ELECTRONICS</p>
                <h5>
                <small><s class='text-secondary'>Rs.$product_old_price</s></small>
                <span class='price'>Rs.$productprice</span>
                </h5>
                <button type='submit' class='btn btn-warning my-3' name='add'>Add to cart<i class='fas fa-shopping-cart'></i></buttton>
                <input type='hidden' name='product_id' value=$productid>
                <input type='hidden' name='product_price' value=$productprice>
                
                </div>
                </div>
                </form>
                </div>";
                echo $element;
}


function cartElement($productimg,$productname,$productprice,$productid)
{
    $element="
    <form action='cart.php?action=remove&id=$productid' method='post' class='cart-items'>
    <div class='border rounded'>
        <div class='row bg-white'>
        <div class='col-md-3 pl-0'>
        <img src=$productimg alt='image1' class='img-fluid'>
        </div>
        <div class='col-md-6'>
        <h5 class='pt-2'>$productname</h5>
        <small class='text-secondary'>Seller: Gada Electronics</small>
        <h5 class='pt-2'>Rs.$productprice</h5>
        <button type='submit' class='btn btn-warning'>Save For Later</button>
        <button type='submit' class='btn btn-danger mx-2' name='remove'>Remove</button>
        </div>
        <div class='col-md-3 py-5'>
        <button type='button' class='btn bg-light border rounded-circle'><i class='fas fa-minus'></i></button>
        <input type='text' value='1' class='form-control w-25 d-inline'>
        <button type='button' class='btn bg-light border rounded-circle'><i class='fas fa-plus'></i></button>
        </div>
    </div>
    </div>
    </form>";
    echo $element;
}
function MyAccount($productimg,$productname,$productprice,$productid)
{
    $element="
    <form action='myaccount.php?action=remove&id=$productid' method='post' class='cart-items'>
    <div class='border rounded'>
        <div class='row bg-white'>
        <div class='col-md-3 pl-0'>
        <img src=$productimg alt='image1' class='img-fluid'>
        </div>
        <div class='col-md-6'>
        <h5 class='pt-2'>$productname</h5>
        <small class='text-secondary'>Seller: Gada Electronics</small>
        <h5 class='pt-2'>Rs.$productprice</h5>
        
       
    </div>
    </div>
    </form>";
    echo $element;
    
}
?>