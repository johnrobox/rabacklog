    <div class="content" style="margin-top: 100px;">
        <div class="subscribe">
            <?php echo heading("LOGIN", 5, array('class'=>'info-text')); ?>
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
                        <?php 
                        echo form_error('email');
                        $email_field_attr = array(
                            'class' => 'form-control transparent',
                            'name' => 'email',
                            'id' => 'email',
                            'placeholder' => 'EMAIL ADDRESS',
                            'value' => set_value('email')
                        );
                        echo form_input($email_field_attr);
                        ?>
                    </div>
                        
                    <div class="form-group">
                        <?php 
                        echo form_error('password');
                        $password_field_attr = array(
                            'type' => 'password',
                            'class' => 'form-control transparent',
                            'name' => 'password',
                            'id' => 'password',
                            'placeholder' => 'PASSWORD'
                        );
                        echo form_input($password_field_attr);
                        ?>
                    </div>
                        <?php
                        $login_button_attr = array(
                            'type' => 'submit',
                            'class' => 'btn btn-warning btn-fill center-block',
                            'content' => 'LOGIN'
                        );
                        echo form_button($login_button_attr);
                        ?>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>