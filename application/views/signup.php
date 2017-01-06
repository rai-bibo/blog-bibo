    <!-- Main Content -->
    <div class="container">
        <div class="row">


<?php echo validation_errors(); ?>

<form method="post" action="/signup" class="form-control text-center">
		Username: <input type="text" name="username" /> <br />
		Password: <input type="password" name="password" /><br />
                Email:   <input type="text" name="email"> <br /> 
                <input type="submit" name="submit" value="submit" />
                <br /><br />
                Already registered? <a href="/welcome">Sign-in here</a> </form>
                    </div>

                
    </div>

    <hr>

<br style="clear: both" />
