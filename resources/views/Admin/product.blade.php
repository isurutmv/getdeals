<?php require_once "header.blade.php" ?>
<?php    require_once ("../resources/config.php");
$sql = "SELECT * FROM category";
$result = $connection->query($sql);
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Product</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
                <label>Product Category</label>
                <select class="form-control select2" style="width: 100%;" name="category">
                    <option selected="selected">Select Product</option>
                    <?php if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc()) {
                        ?>
                    <option><?php echo $row["title"]; ?></option>

                    <?php} } else {
                        echo "0 results";
                    }?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Cost Price</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Cost" name="cost">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Sell Price</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="sell">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Discription" name="description">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Qty</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="qty" name="qty">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Upload Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<?php require_once("footer.blade.php"); ?>