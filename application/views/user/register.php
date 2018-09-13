
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-header-wrapper">
                    <h2>Registration</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="registration-wrapper">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="registration-form">
              <?php echo  form_open('Welcome/saveData', 'class="form-horizontal" id=""');?>

              <input type="text" placeholder="Name*" name="name" value="<?php echo set_value('name',$user['name']);?>" required>
              <input type="text" placeholder="User Name*" name="user_name" value="<?php echo set_value('user_name',$user['user_name']);?>"required>
              <input type="text" placeholder="Cell No*" name="cell_no" value="<?php echo set_value('cell_no',$user['cell_no']);?>"required>
              <input type="text" placeholder="Password*" name="password" value="<?php echo set_value('password',$user['password']);?>"required>
              <input type="email" placeholder="Email" name="email" value="<?php echo set_value('email',$user['email']);?>">


              <button type="submit">SignUp</button>
              <?php echo form_close();?>
          </div>
        </div>
      </div>
    </div>
  </div>