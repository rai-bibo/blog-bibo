    <!-- Main Content -->
    <div class="container">
        <div class="row">


<?php echo validation_errors(); ?>

<form method="post" action="/welcome" class="form-control text-center">
		Username: <input type="text" name="username" /> <br />
		Password: <input type="password" name="password" /><br /> 
                <input type="submit" name="submit" value="submit" />
                <br /><br />
                Not Registered? <a href="/signup">Sign-up here</a> </form>
                    </div>

                
    </div>

    <hr>

<br style="clear: both" />
