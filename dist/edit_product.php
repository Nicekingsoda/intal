<?php
$pro_id = $_GET['pro_id'];
require '../conect.php';
$sql = "SELECT * FROM products WHERE pro_id='$pro_id'";
$result = $con->query($sql);
$row = mysqli_fetch_array($result);

if (isset($_POST['submit'])) {
    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
    $pro_amount = $_POST['pro_amount'];
    $pro_status = $_POST['pro_status'];
    $sql2 = "UPDATE products SET pro_name='$pro_name', pro_price='$pro_price', pro_amount='$pro_amount', pro_status='$pro_status' WHERE pro_id='$pro_id'";
    $result2 = $con->query($sql2);
    if(!$result2){
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');history.back();</script>";
  }else{
    echo"<script>window.location.href='index.php?page=product'</script>";
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
                <h3 class="mb-0">Product Edit</h3>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Edit</li>
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
                <h3 class="mb-0">Product Edit</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="index.php/page=dashboard">Product Edit</a></li>
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
                        <div class="card-title">Product Edit</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">รหัสสินค้า</label>
                                <input type="text" class="form-control" name="pro_id" id="exampleInputUsername" aria-describedby="emailHelp" value="<?php echo $row['pro_id'] ?>" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">ชื่อสินค้า</label>
                                <input type="text" class="form-control" name="pro_name" id="exampleInputPassword1" value="<?php echo $row['pro_name'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">ราคาสินค้า</label>
                                <input type="text" class="form-control" name="pro_price" id="exampleInputPassword1" value="<?php echo $row['pro_price'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">จำนวนสินค้า</label>
                                <input type="text" class="form-control" name="pro_amount" id="exampleInputPassword1" value="<?php echo $row['pro_amount'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">สถานะสินค้า</label>
                                <input type="text" class="form-control" name="pro_status" id="exampleInputPassword1" value="<?php echo $row['pro_status'] ?>" />
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