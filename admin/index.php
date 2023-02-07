<?php 
    require("inc/essentials.php");
    require("inc/db_config.php");

    session_start();
        if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
            redirect('dashboard.php');
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoration Ranch</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css"/>
</head>

<style>
    div.login-form{
        position:absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width:400px;
    }
</style>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-lg sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Restoration Ranch</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
</nav>

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control text-center" placeholder="Admin Name">
                </div>
                <div class="mb-3">
                    <input name="admin_pass" required type="password" class="form-control text-center" placeholder="Password">
                </div>
                <button  name="login" type="submit" class="btn text-white custom-bg text-align-center">Login</button>
            </div>
        </form>
    </div>
    
    <?php 
        if(isset($_POST['login']))
        {
            $frm_data=filteration($_POST);
            
            $querey = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";

            $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

            $res = select($querey,$values,"ss");
            if($res->num_rows==1){
                $row = my_sqli_fetch_assoc($res);
                $_SESSION['adminLogin']=true;
                $_SESSION['adminId']=$row['sr_no'];
                redirect('dashboard.php');

            }
            else{
               alert('error','Login Failed - Onvalid Credentials!');
            }
            
        }
    ?>

</body>

 
</body>
</html>