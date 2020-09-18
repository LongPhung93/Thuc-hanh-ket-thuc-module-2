<div class="container">
    <div class="row mt-4" >
        <!--        <div class="col-12 col-md-6">-->
        <!--            <a  class="add-button btn btn-primary" href="index.php?page=add-product"><i class="fas fa-user-plus"></i> &nbsp;Add Product</a>-->
        <!--        </div>-->
        <div class="col-12 col-md-6">
            <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=search-product">
                Nhập tên hàng: <input aria-label="Search" class="form-control mr-sm-2" type="text" name="keyword"
                       placeholder="Search Book">
                <button id="search-category" class="btn btn-success" type="submit">Tìm kiếm</button>

<!--                <button class="btn btn-success ml-2" onclick="window.history.go(-1); return false;">Back</button>-->
            </form>
        </div>
        <div >
        <a  class="add-button btn btn-success" href="index.php?page=add-product"><i class="fas fa-user-plus"></i> &nbsp;Thêm mặt hàng </a>
        </div>
    </div>
    <!--    <div class="col-12 col-md-6">-->

    <!--    </div>-->
    <br>
</div>
<br>


<div class="container">
    <h3>List Products</h3>
    <table class="table table-striped">
        <thead class="thead-success" >
        <tr>
            <th>STT</th>
            <th>Tên hàng</th>
            <th>Loại hàng</th>
            <th colspan="2" class="action">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (empty($products)) : ?>
            <tr>
                <td>No data</td>
            </tr>
        <?php else : ?>
            <?php foreach ($products as $key => $product) : ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $product->getName() ?></td>
                    <td><?php echo $product->getCategory() ?></td>
                    <td class="td-update"><a  href="index.php?page=update-product&id=<?php echo $product->getId() ?>"><i class="fas fa-user-edit"></i>&nbsp;Chỉnh sửa</a></td>
                    <td class="td-delete"><a onclick="return confirm('Are you sure delete ?')" href="index.php?page=delete-product&id=<?php echo $product->getId() ?>"><i class="fas fa-calendar-times"></i>Xóa </a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>

