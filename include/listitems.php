<div class ="row">
<?php
    $query="SELECT * FROM product";
    $result = mysqli_query($db,$query);

    while($product = mysqli_fetch_assoc($result)){

        echo '<div class="col-lg-4 ">
        <div class="card" style="color:black;overflow:hidden;display:inline-block">   
            <a href="#"><img style="max-width:100%; height:auto;opacity: 0.5;" class="card-img" src="';
            
            echo($product['prod_media']);

        echo'"></a><div class="card-img-overlay">
                <h4 class="card-title">';
        echo($product['prod_name']);
        echo '</h4> 
        <div class="card-text">';
        echo($product['prod_text']);
        echo'</div>
        <a href="product.php?id=';
        echo($product['prod_id']);
        echo'" class="btn btn-primary">View Product </a>  
            <button onclick="additem(this.id)" id="';
            echo($product['prod_id']); 
            echo'"class="btn btn-warning"> <span><i class="fas fa-shopping-cart"></i></span>Add to Cart</button>
            </div>
            <div class="card-footer">  
            <small class="text-muted">
            &#9733; &#9733; &#9733; &#9733; &#9734;
            <br>Uploaded by: $uploader<br>Last Update: $update <span style="float:right">
            <a href="#">Report</a>
            </span>
            </small>
        </div>
        </div>
    </div>';
        ($product['prod_name']);
    }
?>


<script>
var cart = [] ;   
function additem(item){
    cart.push(item);
    alert('Added 1 (Nos) of Item ID:'+ item);
    document.getElementById("cartlabel").innerHTML =cart.length;
    document.reload();
    // alert(cart.toString());
}
</script>
</div>