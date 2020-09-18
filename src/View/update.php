<div id="container-book" class="container">
    <h3 id="book-h3">Chỉnh sửa mặt hàng  </h3>
    <form method="post" enctype="multipart/form-data" class="was-validated">
        <div class="form-group">
            <label for="uname">Tên hàng: </label>
            <input type="text" class="form-control" id="uname" placeholder="" value="<?php echo $product['name'] ?>" name="name" required>
            <div class="valid-feedback">Valid.</div>
<!--            <div class="invalid-feedback">Please fill out this field.</div>-->
        </div>
        <div class="form-group">
            <label for="uname">Loại hàng: </label>
            <input type="text" class="form-control" id="uname" placeholder="" value="<?php echo $product['category'] ?>" name="category" required>
            <div class="valid-feedback">Valid.</div>
            <!--            <div class="invalid-feedback">Please fill out this field.</div>-->
        </div>
        <!--        <div class="form-group">-->
        <!--            <label for="uname">Loai hang:</label>-->
        <!--            <input type="text" class="form-control" id="uname" placeholder="" name="category" required>-->
        <!--            <div class="valid-feedback">Valid.</div>-->
        <!--            <div class="invalid-feedback">Please fill out this field.</div>-->
        <!--        </div>-->
        <div class="form-group">
            <label for="uname">Giá: </label>
            <input type="text" class="form-control" id="uname" placeholder="" name="price" value="<?php echo $product['price'] ?>"required>
            <div class="valid-feedback">Valid.</div>
<!--            <div class="invalid-feedback">Please fill out this field.</div>-->
        </div>
        <div class="form-group">
            <label for="uname">Số lượng: </label>
            <input type="text" class="form-control" id="uname" placeholder="" name="quantity" value="<?php echo $product['quantity'] ?>" required>
            <div class="valid-feedback">Valid.</div>
<!--            <div class="invalid-feedback">Please fill out this field.</div>-->
        </div>
        <div class="form-group">
            <label for="uname">Mô tả: </label>
            <input type="text" class="form-control" id="uname" placeholder="" name="description" value="<?php echo $product['description'] ?>" required>
            <div class="valid-feedback">Valid.</div>
<!--            <div class="invalid-feedback">Please fill out this field.</div>-->
        </div>


        <button id="add-all" type="submit" class="btn btn-success">Sửa mặt hàng </button>
        <button id="back-add" class="btn btn-success " onclick="window.history.go(-1); return false;">Thoát </button>
    </form>
</div>