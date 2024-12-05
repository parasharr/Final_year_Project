<?php
require 'config.php';

if(isset($_POST['update_changes'])){
    $update_fullname = $_POST['update_fullname'];
    $update_mobileno = $_POST['update_mobileno'];
    $update_address = $_POST['update_address'];
    $update_city = $_POST['update_city'];
    $update_pincode = $_POST['update_pincode'];

    $update_details = mysqli_query($conn, "Update `customer` set fullname='$update_fullname',mobileno='$update_mobileno',address='$update_address',city='$update_city',pincode='$update_pincode' where id=$update_details_id");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            padding-top: 50px;
        }
        .account-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 30px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #6a1b9a;
            border-color: #6a1b9a;
        }
        .btn-primary:hover {
            background-color: #4a148c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 account-container">
                <h2 class="text-center mb-4">Manage Account</h2>

                    <?php
                    $select_details = mysqli_query($conn, "Select * from `customer`");

                    if(mysqli_num_rows($select_details)>0){
                    while($fetch_details = mysqli_fetch_assoc($select_details)){
                    ?>

                <form method="post" id="accountForm">
                <input type="hidden" value="<?php echo $fetch_data['id']?>" name="update_details_id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" name="update_fullname" value="<?php echo $fetch_details['fullname'] ?>" class="form-control" id="fullName" required 
                                       pattern="^[A-Za-z\s]{2,50}$" 
                                       title="Full name (2-50 characters, letters only)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobileNumber" class="form-label">Mobile Number</label>
                                <input type="tel" name="update_mobileno" value="<?php echo $fetch_details['mobileno'] ?>" class="form-control" id="mobileNumber" required
                                       pattern="[6-9]\d{9}" 
                                       title="10-digit mobile number starting with 6-9">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="update_address" value="<?php echo $fetch_details['address'] ?>" class="form-control" id="address" required 
                               minlength="10" maxlength="200">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city" class="form-label">City</label>
                                <input type="text" name="update_city" value="<?php echo $fetch_details['city'] ?>" class="form-control" id="city" required 
                                       pattern="^[A-Za-z\s]{2,50}$" 
                                       title="City name (2-50 characters, letters only)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pincode" class="form-label">Pincode</label>
                                <input type="text" name="update_pincode" value="<?php echo $fetch_details['pincode'] ?>" class="form-control" id="pincode" required
                                       pattern="\d{6}" 
                                       title="6-digit pincode">
                            </div>
                        </div>
                    </div>
<?php
                    }
                }
?>
                    <h4 class="mt-4 mb-3">Change Password</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="currentPassword" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="currentPassword" 
                                       minlength="8">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPassword" 
                                       minlength="8" 
                                       pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$"
                                       title="At least 8 characters, must include letter, number, and special character">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" 
                                       minlength="8">
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <input type="submit" name="update_changes" class="btn btn-primary btn-lg" value="Save Changes"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('accountForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Password confirmation check
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (newPassword !== confirmPassword) {
                alert('New password and confirm password do not match!');
                return;
            }

            // Validation passed
            alert('Account details updated successfully!');
        });
    </script>
</body>
</html>