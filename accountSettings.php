<?php session_start();
?>
<!DOCTYPE html>
  
            <?php
            include ("header.php");
            ?>

    <div id="mainContent">
        <div id="sideBar">
             <?php
            include ("userNav.php");
             ?>
            
        </div><!-- end of sidebar -->

        <div id="content" class="stiched">
            <div class="contentHead">Account Settings</div> 
            <h2>Change Password</h2>
            <div class="success_box">All of the fields were successfully validated!</div>
    <div class="error_box"></div>
            <form name="change-password-form" action="php/changePassword.php" method="post">
                <input class="loginInput" type="password" name="oldPassword" class="mainSearch" placeholder="Current Password" required>
                <input class="loginInput" type="password" name="password" class="mainSearch" placeholder="New Password" required>
                <input class="loginInput" type="password" name="password_confirm" class="mainSearch" placeholder="Confirm Password" required>
                <input class="formInput" type="submit" name="submit" value="Change Password" >
            </form>
            <h2>Change Email</h2>
            <form name="change-email-form" action="?e=3" method="post">
                <input class="loginInput" type="text" name="oldEmail" class="mainSearch" placeholder="New Email Address" required>
                <input class="loginInput" type="password" name="newEmail" class="mainSearch" placeholder="Confirm Email Address" required>
                
                <input class="formInput" type="submit" name="submit" value="Change Email" >
            </form>
        </div><!-- end of content -->

        <div class="clearfix"></div>

    </div>

        <?php
            include ("footer.php");
        ?>

		</div>
		<!-- End site content -->
        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
                <script type="text/javascript" src="js/validate.min.js"></script>
<script>var validator = new FormValidator('change-password-form', [{
    name: 'req',
    display: 'required',    
    rules: 'required'
}, {
    name: 'userName',
    display: 'user name',
    rules: 'required|alpha_numeric|required|min_length[6]'
}, {
    name: 'password',
    display: 'password',
    rules: 'required|min_length[6]'
}, {
    name: 'password_confirm',
    display: 'password confirmation',
    rules: 'required|matches[password]'
}, {
    name: 'email',
    rules: 'required|valid_email'
}, {
    name: 'minlength',
    display: 'min length',
    rules: 'min_length[8]'
}], function(errors, evt) {var SELECTOR_ERRORS = $('.error_box'),
        SELECTOR_SUCCESS = $('.success_box');
        
    if (errors.length > 0) {
        SELECTOR_ERRORS.empty();
        
        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            SELECTOR_ERRORS.append(errors[i].message + '<br />');
        }
        
        SELECTOR_SUCCESS.css({ display: 'none' });
        SELECTOR_ERRORS.fadeIn(200);
    } else {
        SELECTOR_ERRORS.css({ display: 'none' });
        SELECTOR_SUCCESS.fadeIn(200);
        return true;


        

    }
    
    if (evt && evt.preventDefault) {
        evt.preventDefault();
    } else if (event) {
        event.returnValue = true;
    }

         

});



</script>
    </body>
</html>