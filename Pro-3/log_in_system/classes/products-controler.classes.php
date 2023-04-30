<?php

class productsControler extends products{

    private $productName;
    private $productPrice;
    private $useID;

public function __construct($name, $price){
    $this->productName = $name;
    $this->productPrice = $price;
}

public function add_product(){
    if ($this->emptyInput() == false) {
        //throw empty input
        header("location: ../app.php?do=add&error=empty-input");
        exit();
    }

    if ($this->invalidName() == false) {
       //throw invalid name of product
       header("location: ../app.php?do=add&error=invalid-name");
        exit();
    }

    if ($this->checkProduct($this->productName) == false) {
        ///throw product exist
        header("location: ../app.php?do=add&error=product-already-exist");
        exit();
    }

    $this->addproduct($this->productName, $this->productPrice);

    }

    public function showProduct(){
        $this->getProduct($this->productName);
    }

    public function update_product(){
        $this->updateProduct($this->productName,$this->productPrice);
    }

    public function delete_product(){
        if ($this->checkProduct($this->productName) == true) {
            //throw this product doesn't exist
            header("location:../app.php?do=delete&error=product-doesn't-exist!");
            exit();
        }
        $this->deleteProduct($this->productName);
    }


    private function emptyInput(){
        $result;
        if (empty($this->productName || empty($this->productPrice))) {
            $result = false;
        }
        else
        $result = true;

        return $result;
    }

         private function invalidName(){
             $result;
             if(!preg_match("/^[a-zA-Z0-9]*$/",$this->productName)) {
            $result = false;
            } else {
              $result = true;
             }
            return $result;
        }
}
