<section id="contact">
  <div class="container">
    <div class="box last">
      <div class="row">
        <div class="col-sm-6">
          <h1>Contact Form</h1>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <div class="status alert alert-success" style="display: none"></div>
          <div class="success_div"></div>
          <form id="captcha-form" class="contact-form" name="captcha-form" method="post" action="#"  role="form" >
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" required="required" placeholder="Name" name="name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" required="required" placeholder="Email address" name="email" id="email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <label class="" for="captcha">*Please enter the verication code shown below.</label>
                <div id="captcha-wrap"> <img src="<?php echo base_url(); ?>images/img/refresh.jpg" alt="refresh captcha" id="refresh-captcha" /> <img src="<?php echo base_url(); ?>images/img/newCaptcha.php" alt="" id="captcha" /> </div>
                <input class="form-control" id="captcha" name="captcha" required="required" type="text" placeholder="Verification Code">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-danger btn-lg" id="btnsubmit" value="Send Message" onClick="return validateEmail()">
              </div>
            </div>
          </form>
        </div>
        <!--/.col-sm-6-->
        
        <div class="col-sm-6">
          <h1>Our Address</h1>
          <div class="row">
            <div class="col-md-6">
              <address>
              572 Amarone Court Mississauga ON<br>
              <br>
              </address>
            </div>
          </div>
        </div>
        <!--/.col-sm-6--> 
      </div>
      <!--/.row--> 
    </div>
    <!--/.box--> 
  </div>
  <!--/.container--> 
</section>
<!--/#contact-->