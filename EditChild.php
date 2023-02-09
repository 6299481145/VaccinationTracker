<?php
include 'VaccinationCommon.php';
include_once './Utility.php';

$child_id = null;
$child = null;
if (isset($_POST['search'])) {
    $child_id = $_POST['child_id'];
    $child = vaccination_common::fetch_child($child_id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Image/vac.png" type="image/x-icon">
    <title>VAT 1.0</title>
</head>

<body>
    <header>
        <?php include('Includes/Header.php'); ?>
    </header>
    <div class="header">
        <h3>Edit Child</h3>
    </div>
    <form action="" method="POST">
        <div class="main-row">
            <div class="main-column">
                <label for="child_id">Child Id </label>
            </div>
        </div>
        <input type="text" placeholder="Search.." name="child_id" id="child_id" value="<?php if ($child != null) { echo $child['child_id'];} ?>"><button name="search"><i class="fa fa-search"></i></button>
    </form>
    <form action="EditChildScript.php" method="POST">
        <input type="hidden" name="child_id" id="child_id" value="<?php if ($child != null) { echo $child['child_id'];} ?>">
        <div class="main-row">
            <div class="main-column">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" value="<?php if ($child != null) { echo $child['first_name'];} ?>">
           
                                                                            
            </div>
            <div class="main-column">
                <label for="middle_name">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name" value="<?php if ($child != null) { echo $child['middle_name'];} ?>">
            </div>
            <div class="main-column">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="<?php if ($child != null) { echo $child['last_name'];} ?>">
            </div>
        </div>

        <div class="main-row">
            <div class="main-column">
                <label for="famo_name">Parents Name</label>
                <input type="text" name="famo_name" id="famo_name" value="<?php if ($child != null) { echo $child['parents_name'];} ?>">
            </div>

            <div class="main-column">
                <label for="gender">Gender</label>
                <div>
                    <select name="gender" id="gender">
                        <option value="">Select</option>
                        <option value="M" <?php if ($child != null && $child['gender'] == 'M') {echo 'Selected';}?>>Male</option>
                        <option value="F" <?php if ($child != null && $child['gender'] == 'F') echo 'Selected';?>>Female</option>
                    </select>
                </div>
            </div> 
            <div class="main-column">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" value="<?php if ($child != null) { echo $child['dob'];} ?>">
            </div>
        </div>
        <div class="main-row">
            <div class="main-column">
                <label for="village">Village</label>
                <input type="text" name="village" id="village" value="<?php if ($child != null) { echo $child['village'];} ?>">
            </div>
            <div class="main-column">
                <label for="district">District</label>
                <div>
                    <select name="district" id="district">
                        <option value="">Select</option>
                        <option value="Muzaffarpur" <?php if ($child != null && $child['district'] == 'Muzaffarpur') echo 'Selected'; ?>>Muzaffarpur</option>
                        <option value="Vaishali" <?php if ($child != null && $child['district'] == 'Vaishali') echo 'Selected'; ?>>Vaishali</option>
                        <option value="Sitamarhi" <?php if ($child != null && $child['district'] == 'Sitamarhi') echo 'Selected'; ?>>Sitamarhi</option>
                        <option value="Saran" <?php if ($child != null && $child['district'] == 'Saran') echo 'Selected'; ?>>Saran</option>
                        <option value="Sivan" <?php if ($child != null && $child['district'] == 'Sivan') echo 'Selected'; ?>>Sivan</option>
                        <option value="West champaran" <?php if ($child != null && $child['district'] == 'West champaran') echo 'Selected'; ?>>West champaran</option>
                    </select>
                </div>
            </div>
            <div class="main-column">
                <label for="state">State</label>
                <div>
                    <?php fetch_existing_state($child != null && $child['state']); ?>
                </div>
            </div>
        </div>
        <div class="main-row">
            <div class="main-column">
                <label for="pincode">Pincode</label>
                <input type="text" name="pincode" id="pincode" value="<?php if ($child != null) { echo $child['pincode'];} ?>">
            </div>
            <div class="main-column">
                <label for="contact_no">Contact No</label>
                <input type="number" name="contact_no" id="contact_no" value="<?php if ($child != null) { echo $child['contact_no'];} ?>">
            </div>
            <div class="main-column">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php if ($child != null) { echo $child['email'];} ?>">
            </div>
        </div>
        <button type="submit" name="submit">Submit</button>
        <button name="delete">Delete</button>
    </form>
    <footer class="footer">
        <?php include('Includes/Footer.html'); ?>
    </footer>
</body>

</html>