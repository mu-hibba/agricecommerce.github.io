<?php
      ob_start();
      include ('header.php');
?>


<div class="container animated fadeIn">

  <div class="row">
    <h1 class="header-title"> Contact Us</h1>
    <hr>
    <div class="col-sm-12" id="parent">
    	<div class="col-sm-6">
    		<form action="index.php" class="contact-form" method="post">
	
		        <div class="form-group">
		          <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required="" autofocus="">
		        </div>
		    
		    
		        <div class="form-group form_left">
		          <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
		        </div>
		    
		      <div class="form-group">
		      <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Type Your Message/Feedback here..." required=""></textarea>
		      <br>
	      	  <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send </button>
		      </div>
     		</form>
    	</div>
    </div>
  </div>

	</div>
</div>

</div>
<?php 
    include ('footer.php');
?>