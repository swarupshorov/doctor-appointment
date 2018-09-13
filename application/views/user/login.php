<?php
/**
 * Created by PhpStorm.
 * User: Swarup Mohan
 * Date: 9/14/2018
 * Time: 2:53 AM
 */
?>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-header-wrapper">
                    <h2>Login</h2>
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
                    <?php echo  form_open('Welcome/CheckLogin', 'class="form-horizontal" id=""');?>

                    <input type="text" placeholder="User Name/E-mail" name="name"  required>
                     <input type="text" placeholder="Password*" name="password" required>


                    <button type="submit">Login</button>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>
