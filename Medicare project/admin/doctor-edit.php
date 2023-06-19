<?php
session_start();
include ('includes/header.php')


?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Doctor Data Edit</h6>
        </div>
    </div>
    <div class="card-body">
        <?php
        if(isset($_POST['edit_data_btn'])){
            $id=$_POST['edit_id'];
            $name=$_POST['edit_name'];
            @$db =new mysqli('localhost', 'root', '', 'clinic');
            $query="SELECT * FROM doctor WHERE ID='$id'";
            $res=$db->query($query);
            $query1="SELECT * FROM regestration WHERE username='$name'";
            $res1=$db->query($query1);
            foreach($res as $row){
                foreach($res1 as $row1){
                ?>
                <form action="code.php" method="post" enctype="multipart/form-data">

                   <input type="hidden" name="edit_id" value="<?php echo $row['ID'] ?>" >
                    <input type="hidden" name="edit_name" value="<?php echo $row['Name'] ?>" >
                    <div class="mb-3">
                        <label >Name</label>
                        <input type="text" name="edittt_name" value="<?php echo $row['Name'] ?>" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label >Email</label>
                        <input type="text" name="d_edit_email" value="<?php echo $row1['email'] ?>" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label >Password</label>
                        <input type="text" name="d_edit_pass" value="<?php echo $row1['password'] ?>" class="form-control" >
                    </div>


                    <div class="mb-3">
                        <label >Specialty</label>
                        <input type="text" name="edit_Specialty" value="<?php echo $row['Specialty'] ?>"  class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label >Department Name</label>
                        <input type="text" name="edit_Department" value="<?php echo $row['DepartmentName'] ?>"  class="form-control">
                    </div>

                    <div class="mb-3">
                        <label >Working Hours</label>
                        <input type="time" name="edit_startTime" value="<?php echo $row['startTime'] ?>"  class="form-control" >
                        <input type="time"  name="edit_endTime" value="<?php echo $row['endTime'] ?>"  class="form-control"  >
                    </div>

                    <div class="mb-3">
                        <label >Upload Img</label>
                        <input type="file" name="Doctor_image" value="<?php echo $row['image'] ?>"  id="Doctor_image" class="form-control">
                    </div>



                        <a href="view-doctors.php" class="btn btn-danger">CANCEL</a>
                        <button type="submit" name="doctor_update_btn" class="btn btn-primary">Update</button>


                </form>
        <?php
                }
            }
        }
        ?>

    </div>
</div>




















<?php
include ('includes/footer.php')
?>
<?php
include ('includes/scripts.php')
?>




























<?php
include ('includes/footer.php')
?>
<?php
include ('includes/scripts.php')
?>
