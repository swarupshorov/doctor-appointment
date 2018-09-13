<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/14/2018
 * Time: 1:46 AM
 */
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo base_url().'assets/js/new/jquery.min.js';?>"></script>
<script src="<?php echo base_url().'assets/js/popper.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/new/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/view-custom.js';?>"></script>
<script>
    $(document).ready(function(){
        load_data();
        function load_data(query)
        {
            $.ajax({
                url:"<?php echo base_url(); ?>ajaxsearch/fetch",
                method:"POST",
                data:{query:query},
                success:function(data){
                    $('#result').html(data);
                }
            })
        }

        $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();
            }
        });
    });
</script>
</body>
</html>
