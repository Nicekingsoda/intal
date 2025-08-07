<?php

require '../conect.php';
if (isset($_POST['submit'])) {
    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
    $pro_amount = $_POST['pro_amount'];
    $pro_status = $_POST['pro_status'];
    if (empty($pro_name) || empty($pro_price) || empty($pro_amount) || empty($pro_status)) {
        echo "<script>alert('กรุณากรอกข้อมูลให้ครบ');history.back()</script>";
    } else { {
            $old_data = $con->query("SELECT * FROM products where pro_name='$pro_name'");
            $old_num = mysqli_num_rows($old_data);
            if ($old_num == 1) {
                echo  "<script>alert('สินค้านี้มีอยู่แล้ว');history.back()</script>";
            } else {
                $sql = "INSERT INTO products(pro_name,pro_price,pro_amount,pro_status) VALUE('$pro_name',$pro_price,$pro_amount,'$pro_status')";
                $result = $con->query(query: $sql);
                if (!$result) {
                    echo "<script>alert('บันทึกข้อมูลผิดพลาด');history.back()</script>";
                } else {
                    echo "<script>window.location.href = 'index.php?page=product' </script>";
                }
            }
        }
    }
}
?>
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <!--begin::Col-->
            <div class="col-sm-6">
                <h3 class="mb-0">Add Product</h3>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                </ol>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--begin::App Content Header-->
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Add Product</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="index.php/page=dashboard">Add Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">General Form</li>
                </ol>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content Header-->
<!--begin::App Content-->
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row g-4">
            <!--begin::Col-->
            <div class="col-md-12">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                    <!--begin::Header-->
                    <div class="card-header">
                        <div class="card-title">Add Product</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">ชื่อสินค้า</label>
                                <input type="text" class="form-control" name="pro_name" id="exampleInputPassword1" value="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">ราคาสินค้า</label>
                                <input type="text" class="form-control" name="pro_price" id="exampleInputPassword1" value="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">จำนวนสินค้า</label>
                                <input type="text" class="form-control" name="pro_amount" id="exampleInputPassword1" value="" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">สถานะสินค้า</label>
                                <input type="text" class="form-control" name="pro_status" id="exampleInputPassword1" value="" />
                            </div>
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="submit">บันทึกข้อมูล</button>
                        </div>
                        <!--end::Footer-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Quick Example-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content-->