<?php require_once "header.blade.php" ?>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form">
            <div class="card-body">
                <div class="form-group">
                    <label>Select Product</label>
                    <select class="form-control select2" style="width: 100%;" name="category">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" name="date">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">QTY</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="QTY" name="qty">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

<?php require_once "footer.blade.php"
?>