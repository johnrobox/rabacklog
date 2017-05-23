
<?php echo heading('RA backlog', 1, array('class' => 'logo cursive')); ?>
    <div class="content">
        <?php echo heading('Free Backlog Project Management.', 4, array('class' => 'motto-custom')); ?>
        <?php echo $this->session->flashdata('success'); ?>
        <?php echo $this->session->flashdata('error');?>
        <div class="subscribe">
            <?php echo heading('Join the waiting list for the beta. We keep you posted.', 5, array('class' => 'info-text')); ?>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm6-6 col-sm-offset-3 ">
                    <form class="form-inline" role="form">
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="email" class="form-control transparent" placeholder="Your email here...">
                      </div>
                      <button type="submit" class="btn btn-warning btn-fill">Notify Me</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

