<div id="container-book" class="container">
    <h3 id="book-h3">Them mat hang</h3>
    <form method="post" enctype="multipart/form-data" class="was-validated">
        <div class="form-group">
            <label for="uname">Ten hang:</label>
            <input type="text" class="form-control" id="uname" placeholder="" name="name" required>
            <div class="valid-feedback">Valid.</div>
<!--            <div class="invalid-feedback">Please fill out this field.</div>-->
        </div>
        <div class="form-group">
            <label for="sel1">Loai hang:</label>
            <select name="category" class="form-control" id="sel1">
                <option value="Điện thoại ">Điện thoại</option>
                <option value="Tủ lạnh ">Tủ lạnh </option>
                <option value="Điều hòa">Điều hòa </option>
<!--                --><?php //foreach ($categorys as $category) : ?>
<!--                    <option value="--><?php //echo $category->getId(); ?><!--">--><?php //echo $category->getName(); ?><!--</option>-->
<!--                --><?php //endforeach; ?>
            </select>
        </div>
<!--        <div class="form-group">-->
<!--            <label for="uname">Loai hang:</label>-->
<!--            <input type="text" class="form-control" id="uname" placeholder="" name="category" required>-->
<!--            <div class="valid-feedback">Valid.</div>-->
<!--            <div class="invalid-feedback">Please fill out this field.</div>-->
<!--        </div>-->
        <div class="form-group">
            <label for="uname">Gia:</label>
            <input type="text" class="form-control" id="uname" placeholder="" name="price" required>
            <div class="valid-feedback">Valid.</div>
<!--            <div class="invalid-feedback">Please fill out this field.</div>-->
        </div>
        <div class="form-group">
            <label for="uname">So luong:</label>
            <input type="text" class="form-control" id="uname" placeholder="" name="quantity" required>
            <div class="valid-feedback">Valid.</div>
<!--            <div class="invalid-feedback">Please fill out this field.</div>-->
        </div>
        <div class="form-group">
            <label for="uname">Mo ta:</label>
            <input type="text" class="form-control" id="uname" placeholder="" name="description" required>
            <div class="valid-feedback">Valid.</div>
<!--            <div class="invalid-feedback">Please fill out this field.</div>-->
        </div>




        <button id="add-all" type="submit" class="btn btn-success">Nhập mặt hàng </button>
        <button id="back-add" class="btn btn-success" onclick="window.history.go(-1); return false;">Thoát </button>
    </form>
</div>