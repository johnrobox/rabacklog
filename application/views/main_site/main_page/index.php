        <h1 class="logo cursive">
            RA backlog
        </h1>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->

        <div class="content">
            <h4 class="motto-custom">Free Backlog Project Management.</h4>
            <?php echo $this->session->flashdata('success'); ?>
            <?php echo $this->session->flashdata('error');?>
            <div class="subscribe">
                <h5 class="info-text">
                    Join the waiting list for the beta. We keep you posted.
                </h5>
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

