
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>
    <script>
      // $(".delete").click(function() {
      //   var item_id =$(this).attr("data-id");
      //   var table =$(this).attr("data-table");
      //   var field =$(this).attr("data-field");
      //   $.ajax({
      //     type:"GET",
      //     url:"<?php// echo BURLA."inc/delete.php"?>",
      //     data:{item_id:item_id,table:table, field:field,location},
      //     dataType:"JSON",
      //     complete:function(data){
      //       alert("Deleted Successfully");
      //     }
      //   })
      // })
      $(".delete").click(function(){
        var item_id =$(this).attr("data-id");
        var table =$(this).attr("data-table");
        var field =$(this).attr("data-field");
        if(confirm('Are you sure to remove this record ?'))
        {$.ajax({
                url: "<?php echo BURLA."inc/delete.php"?>",
                type: 'GET',
                data: {item_id:item_id,table:table, field:field},
                dataType:"JSON",
                complete: function (data) 
                  {
                    location.reload();
                  }
                });
        }
        else{
          alert ("Delete is cancelled.");
            }
    });
    </script>
  </body>
</html>