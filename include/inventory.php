<?php
$query = "SELECT * FROM product";
$result = mysqli_query($db,$query);
$data=array();
echo'<table class="table table-hover">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Product</th>
    <th scope="col">Brand</th>
    <th scope="col">Package Size</th>
    <th scope="col">Price</th>
    <th scope="col">Stock</th>
    <th scope="col">Populariy</th>

  </tr>
</thead><tbody>';

while($product = mysqli_fetch_assoc($result)){
    $data[$product['prod_id']] = array(
        $product['prod_id'],
        $product['prod_name'],
        $product['brand'],
        $product['weight'],
        $product['price'],
        $product['reseller'],
        $product['prod_media'],
        $product['prod_text'],
    );


    echo '<tr><th scope="row">'.$product['prod_id'].'</th>';
    echo '<td >'.$product['prod_name'].'</td>';
    echo '<td >'.$product['brand'].'</td>';
    echo '<td >'.$product['weight'].' GRAMS</td>';
    echo '<td >'.$product['price'].' LKR</td>';
    // Calculate stock and popularity for the following
    echo '<td >'.$product['price'].' </td>';
    echo '<td >'.$product['price'].' </td>';
  
   
    echo'</tr>';
}
echo '</tbody></table><hr>'
?>

<form>
    <h5>Accept Goods</h5>
    <!--Optimize this part later-->
    <label>Select Brand</label>
    <select class="form-control" style="width:50%;margin-bottom:10px;": name = 'prod_id'>
        <?php  
        foreach ($data as $prod){
            echo '<option value='.$prod[0].'>'.$prod[2].'</option>';
        }?>
    </select>

    <label>Select Product</label>
    <select class="form-control" style="width:50%;margin-bottom:10px": name = 'prod_id'>
        <?php  
        foreach ($data as $prod){
            echo '<option value='.$prod[0].'>'.$prod[1].'</option>';
        }?>
    </select>
    
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Quanity</span>
        </div>
        <input name ="stock" type="text" class="form-control" aria-describedby="basic-addon1">
    </div>
    <button class="btn btn-primary" name="acceptgoods" type="submit">Accept</button>
    <button class="btn btn-success" style="display:inline">Add Product </button>
</form>

