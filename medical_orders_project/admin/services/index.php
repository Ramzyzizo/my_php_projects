<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>


    <div class="col-sm-12">
    <div >
    <h3 class="text-center p-3 bg-primary text-white">View All Services</h3>
    <a href="<?php echo BURLA . "services/add.php"; ?>" class=" btn btn-dark btn-lg btn-block "> Add</a>
    </div>
            <table class="table table-dark table-bordered mt-2">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
       
                </tr>
            </thead>
            <tbody>
                
                <?php $data = getRows('services');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"> <?php echo $row['serv_name'] ?>  </td>
                    <td class="text-center">
                        <a href="<?php echo BURLA.'services/edit.php?id='.$row['serv_id']; ?>" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger delete" data-field="serv_id" data-id="<?php echo $row['serv_id']; ?>" data-table="services" >Delete</a>
                    </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    
    </div>


<?php require BLA.'inc/footer.php';  ?>




   

