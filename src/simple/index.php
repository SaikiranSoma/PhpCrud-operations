<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './components/connections.php';  ?>
</head>
<body>
<div class="container my-5">
                    <div class="form-group">

                    </div>
                    <form name="addmessage" method="post" onsubmit="return validateForm()">
                        <!-- <div class="form-group">
                            <label class="lab">Name</label>
                            <input type="text" name="Name" class="form-control" placeholder="Enter your name"required >
                        </div> -->

                        <div class="form-group">
                            <label class="lab">Email</label>
                            <input type="text" name="Email" class="form-control" placeholder="Enter your email"required >
                        </div>

                        <div class="form-group">
                            <label class="lab">phone</label>
                            <input type="text" name="Phone" class="form-control" placeholder="Enter your phone"required >
                        </div>

                        <div class="form-group">
                            <label class="lab">message</label>
                            <input type="text" name="Message" class="form-control" placeholder="Enter yourmessage"required >
                        </div>

                        <div class="form-group">
                            <button type="submit" class="descr_btn btn_save" name="submit">Send message</a> </button>
                        </div>
                 
                        <?php
    if (isset($_POST['submit'])) {
        // $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Message = $_POST['Message'];
        $sql = "INSERT INTO `Contact`(`Email`,`Phone`,`Message`)
    values ('$Email','$Phone','$Message')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo 'success';
            
        } else {
            die(mysqli_error($conn));
        }
    }
    ?>
       </form>


</body>
</html>