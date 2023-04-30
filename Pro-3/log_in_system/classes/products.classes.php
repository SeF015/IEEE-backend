<?php
class products extends Dbconnecttion{
    
    protected function addproduct($productName, $productPrice){
        $userid = $_SESSION["userid"];
        $stmt = $this->connect()->prepare('INSERT INTO products (product_name, product_price, user_id) VALUES (?,?,?);');

        if(!$stmt -> execute()){
            $stmt = null ;
            header("location:../products.php?do=add&error=stmt failed");
            exit();

        }
        else {
            $stmt= null;
            $msg = "none";
            header("Location: http://localhost/log%20in%20system/createProduct.php?error=" . 
            urlencode($msg));
            exit();
        }
    }

        protected function checkProduct($productName){
            $stmt = $this->connect()->prepare('SELECT * FROM products WHERE product_name = ?;');
    
            /*if(!$stmt->execute()){
                $stmt = null ;
                header("location:../app.php?do=add&error=stmt failed");
                exit();
    
            }*/
    
            $queryResult;
            if($stmt->rowCount() > 0){
                $queryResult = false;
             } else {
                 $queryResult = true;
             }
     
             return $queryResult;
         
        }

        protected function getProduct($productName){
            $uid = $_SESSION['userid'];
            $stmt = $this->connect()->prepare('SELECT * FROM products WHERE product_name = ? and user_id = ?;');
    
            if(!$stmt -> execute()){
                $stmt = null ;
                header("location:../products.php?do=get&error=stmt failed");
                exit();
            }
            if ($this->checkProduct($productName) == true) {
                $stmt = null;
                header("location:../products.php?do=get&error=product-doesn't-exist");
                exit();
            }
                              
            $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $name = $product[0]['product_name'];
            $price = $product[0]['product_price'];
            header("location:../products.php?do=get?name=" . 
                urlencode($name) ."&price=".urlencode($price)
                );
                exit();
  
        }

        protected function updateProduct($productName,$price){
            $userid = $_SESSION['userid'];
            if($this->checkProduct($productName) == true){
                // product doesn't exist!
                header("location:../products.php?do=edit&error=product doesn't exist!");
                exit();
           }
           $stmt = $this->connect()->prepare('UPDATE products SET product_price = ? WHERE product_name = ? AND user_id = ?;');
           if(!$stmt -> execute()){
            $stmt = null ;
            header("location:../products.php?do=update&error=stmt failed");
            exit();
            }
            header("Location:../products.php?do=edit&?msg=Product updated successfully");
            exit();
        }

}

    

  
