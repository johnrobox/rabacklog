    <div class="content" style="margin-top: 100px;">
        <div class="subscribe">
            <h5 class="info-text">
               LOGIN
            </h5>
            <?php echo $this->session->flashdata('success');?>
            <?php echo $this->session->flashdata('error'); ?>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                    <?php 
                    $login_form_attr = array(
                        'role' => 'form',
                        'id' => 'loginForm'
                    ); 
                    echo form_open('loginExec', $login_form_attr);
                    ?>
                    <div class="form-group">
                        <span class="text-error"><?php echo form_error('email');?></span>
                        <?php 
                        $email_field_attr = array(
                            'class' => 'form-control transparent',
                            'name' => 'email',
                            'id' => 'email',
                            'placeholder' => 'EMAIL ADDRESS'
                        );
                        echo form_input($email_field_attr);
                        ?>
                    </div>
                        
                        <div class="form-group">
                            <span class="text-error"><?php echo form_error('password');?></span>
                            <input type="password" class="form-control transparent" name="password" id="password" placeholder="PASSWORD"/>
                        </div>
                        
                      <button type="submit" class="btn btn-warning btn-fill center-block">LOGIN</button>
                    </form>

                </div>
            </div>
        </div>
    </div>