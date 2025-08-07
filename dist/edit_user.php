<?php
$username = $_GET['username'];
require '../conect.php';
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $con->query($sql);
$row = mysqli_fetch_array($result);

if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['emil'];
    $sql2 = "UPDATE users SET password='$password', fullname='$fullname', phone='$phone', emil='$email' WHERE username='$username'";
    $result2 = $con->query($sql2);
    if(!$result2){
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');history.back();</script>";
  }else{
    echo"<script>window.location.href='index.php?page=users'</script>";
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
                <h3 class="mb-0">Theme Customize</h3>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Theme Customize</li>
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
                <h3 class="mb-0">General Form</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                        <div class="card-title">Edit user</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">ชื่อผู้ใช้งาน</label>
                                <input type="text" class="form-control" name="username" id="exampleInputUsername" aria-describedby="emailHelp" value="<?php echo $row['username'] ?>" readonly />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">รหัสผ่าน</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="<?php echo $row['password'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">ชื่อ-นามสกุล</label>
                                <input type="text" class="form-control" name="fullname" id="exampleInputPassword1" value="<?php echo $row['fullname'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">เบอร์โทร</label>
                                <input type="text" class="form-control" name="phone" id="exampleInputPassword1" value="<?php echo $row['phone'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" class="form-control" name="emil" id="exampleInputPassword1" value="<?php echo $row['emil'] ?>" />
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