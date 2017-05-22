    <div class="content" style="margin-top: 100px;">
        <div class="subscribe">
            <h5 class="info-text">
               REGISTRATION FORM
            </h5>
            <?php echo $this->session->flashdata('success');?>
            <?php echo $this->session->flashdata('error'); ?>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                    <form role="form" method="post" action="registerExec">
                        
                        <div class="form-group">
                            <!-- class="sr-only" -->
                            <span class="text-error"><?php echo form_error('firstname');?></span>
                            <input type="text" class="form-control transparent" name="firstname" id="firstname" placeholder="FIRSTNAME"/>
                        </div>
                        
                        <div class="form-group">
                            <span class="text-error"><?php echo form_error('lastname');?></span>
                            <input type="text" class="form-control transparent" name="lastname" id="lastname" placeholder="LASTNAME"/>
                        </div>
                        
                        <div class="form-group">
                            <span class="text-error"><?php echo form_error('email');?></span>
                            <input type="text" class="form-control transparent" name="email" id="email" placeholder="EMAIL ADDRESS"/>
                        </div>
                        
                        <div class="form-group">
                            <span class="text-error"><?php echo form_error('password');?></span>
                            <input type="password" class="form-control transparent" name="password" id="password" placeholder="PASSWORD"/>
                        </div>
                        
                        <div class="form-group">
                            <span class="text-error"><?php echo form_error('password_conf');?></span>
                            <input type="password" class="form-control transparent" name="password_conf" id="password_conf" placeholder="PASSWORD CONFIRM"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control transparent" name="contact" id="contact" placeholder="CONTACT #"/>
                        </div>
                        
                        <div class="form-group">
                            <span class="text-error"><?php echo form_error('gender');?></span>
                            <select class="form-control transparent" name="gender" id="gender">
                                <option value="">SELECT GENDER</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        
                      <button type="submit" class="btn btn-warning btn-fill center-block">SUBMIT</button>
                    </form>

                </div>
            </div>
        </div>
    </div>