    <div class="content" style="margin-top: 100px;">
        <div class="subscribe">
            <?php echo heading("REGISTRATION FORM", 5, array('class'=>'info-text')); ?>
            <?php echo $this->session->flashdata('success');?>
            <?php echo $this->session->flashdata('error'); ?>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                    <?php 
                    $login_form_attr = array(
                        'role' => 'form',
                        'id' => 'registerForm'
                    ); 
                    echo form_open('Register/registerExec', $login_form_attr);
                    ?>    
                        <div class="form-group">
                           <?php 
                           echo form_error('firstname');
                           $firstname_field_attr = array(
                               'type' => 'text',
                               'class' => 'form-control transparent',
                               'name' => 'firstname',
                               'id' => 'firstname',
                               'placeholder' => 'FIRSTNAME',
                               'value' => set_value('firstname')
                           );
                           echo form_input($firstname_field_attr);
                           ?>
                        </div>
                        
                        <div class="form-group">
                            <?php 
                            echo form_error('lastname');
                            $lastname_field_attr = array(
                                'type' => 'text',
                                'class' => 'form-control transparent',
                                'name' => 'lastname',
                                'id' => 'lastname',
                                'placeholder' => 'LASTNAME',
                                'value' => set_value('lastname')
                            );
                            echo form_input($lastname_field_attr);
                            ?>
                        </div>
                        
                        <div class="form-group">
                            <?php 
                            echo form_error('email');
                            $email_field_attr = array(
                                'type' => 'email',
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
                        
                        <div class="form-group">
                            <?php 
                            echo form_error('password_conf');
                            $password_conf_field_attr = array(
                                'type' => 'password',
                                'class' => 'form-control transparent',
                                'name' => 'password_conf',
                                'id' => 'password_conf',
                                'placeholder' => 'PASSWORD CONFIRM'
                            );
                            echo form_input($password_conf_field_attr);
                            ?>
                        </div>
                        
                        <div class="form-group">
                            <?php
                            $contact_field_attr = array(
                                'type' => 'text',
                                'class' => 'form-control transparent',
                                'name' => 'contact',
                                'id' => 'contact',
                                'placeholder' => 'CONTACT',
                                'value' => set_value('contact')
                            );
                            echo form_input($contact_field_attr);
                            ?>
                        </div>
                        
                        <div class="form-group">
                            <?php 
                            echo form_error('gender');
                            $gender_field_attr = array(
                                    ''  => 'SELECT GENDER',
                                    '1' => 'Male',
                                    '2' => 'Female',
                            );
                            echo form_dropdown('gender', $gender_field_attr, '', array('class'=>'form-control transparent'));
                            ?>
                        </div>
                        <?php
                        $register_button_attr = array(
                            'type' => 'submit',
                            'class' => 'btn btn-warning btn-fill center-block',
                            'content' => 'SUBMIT'
                        );
                        echo form_button($register_button_attr);
                       ?>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>