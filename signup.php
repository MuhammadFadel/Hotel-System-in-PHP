<?php include 'header.php'; ?>
<link href="style/css/signUpStyle.css" rel="stylesheet" type="text/css" media="all"/>
<?php
$pageName = $_SERVER['SCRIPT_NAME'];
?>

<!-- login -->
<div class="login-section">
    <h1>User Login | Sign Up</h1>
    <div class="login w3l">	
        <div class="modal-content modal-info">
            <div class="modal-header">
                <h2>Login form</h2>	
                <div class="lo-im w3agile">							
                    <img src="media/images/john.png" title="john" alt="john" />	
                </div>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-form">			
                    <form action="#" method="post">
                        <input type="text" class="user" name="username" placeholder="Mobile or Email" required="" />
                        <input type="password" class="lock" name="password" placeholder="Password" required="" />
                        <div class="signin-rit">
                            <span class="checkbox1">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Remember me</label>
                            </span>
                            <a class="forgot" href="forgetPassword.php">Forgot Password?</a>
                            <div class="clear"> </div>
                        </div>
                        <input type="submit" value="Login">
                    </form>	
<!--							<p><a href="#">Create a New Account</a></p>
<h5 class="or">(or)</h5>--> <br>
                    <div class="social-icons agile">
                        <ul>
                            <li><a href="#" class="facebook"><img src="media/images/fb.png" title="facebook" alt="facebook" /></a></li>
                            <li><a href="#" class="twitter"><img src="media/images/tw.png" title="twitter" alt="twitter" /></a></li>
                            <li><a href="#" class="googleplus"><img src="media/images/gp.png" title="googleplus" alt="googleplus" /></a></li>
                        </ul>	
                    </div>
                </div>								
            </div>
        </div>
        <!-- //login -->
        <div class="clear"></div>
    </div> 
    <div class="signup">
        <div class="modal-content modal-info">
            <div class="modal-header">				
                <h3>Sign up form</h3>						
            </div>
            <div class="modal-body modal-spa">
                <div class="login-form">			
                    <form action="do_register_guest.php" method="post" id="signup">
                        <ol>
                            <li>
                                <input type="text" id="name" name="fname" placeholder="Full Name" title="Name" required />

                            </li>
                            <li>
                                <input type="text" id="name" name="lname" placeholder="Last name" title="Name" required />

                            </li>
                            <li>
                                <input type="email" id="email" name="email" placeholder="Mail@example.com" title="Please enter a valid email" required />
                                <p class="validation01">
                                    <span class="invalid">Please enter a valid email address e.g. 
                                        <a class="__cf_email__" href="/cdn-cgi/l/email-protection" 
                                           data-cfemail="17656e767957726f767a677b723974787a">[email&#160;protected]</a>
                                        <script data-cfhash='f9e31' type="text/javascript">
                                            /* <![CDATA[ */!function (t, e, r, n, c, a, p) {
                                                try {
                                                    t = document.currentScript || function () {
                                                        for (t = document.getElementsByTagName('script'), e = t.length; e--; )
                                                            if (t[e].getAttribute('data-cfhash'))
                                                                return t[e]
                                                    }();
                                                    if (t && (c = t.previousSibling)) {
                                                        p = t.parentNode;
                                                        if (a = c.getAttribute('data-cfemail')) {
                                                            for (e = '', r = '0x' + a.substr(0, 2) | 0, n = 2; a.length - n; n += 2)
                                                                e += '%' + ('0' + ('0x' + a.substr(n, 2) ^ r).toString(16)).slice(-2);
                                                            p.replaceChild(document.createTextNode(decodeURIComponent(e)), c)
                                                        }
                                                        p.removeChild(t)
                                                    }
                                                } catch (u) {
                                                }
                                            }()/* ]]> */</script></span>
                                    <span class="valid">Thank you for entering a valid email</span>
                                </p>
                            </li>
                            <li>
                                <input type="tel" id="tel" name="tel" pattern="\d{10}" placeholder="Please enter a phone number" required />
                                <p class="validation01">
                                    <span class="invalid">No spaces or brackets e.g. 0534907286</span>
                                    <span class="valid">That's what we wanted!</span>
                                </p>
                            </li>
                            <li>
                                <input type="password" class="lock" name="password" 
                                       title="Minimum 8 characters, one number, one uppercase and one lowercase letter" 
                                       pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" 
                                       placeholder="Password" id="password1" required />

                                <p class="validation01">
                                    <span class="invalid">Minimum 8 characters, one number, one uppercase letter and one lowercase letter</span>
                                    <span class="valid">Your password meets our requirements, thank you.</span>
                                </p>
                            </li>
                            <li>
                                <input type="password" class="lock" name="password" 
                                       title="Minimum 8 characters, one number, one uppercase and one lowercase letter" 
                                       pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" 
                                       placeholder="Confirm Password" id="password2" required />

                                <p class="validation01">
                                    <span class="invalid">Minimum 8 characters, one number, one uppercase letter and one lowercase letter</span>
                                    <span class="valid">Your password meets our requirements, thank you.</span>
                                </p>
                            </li>
                            <li>

                                <input type="radio"  name="gender" value="male" checked> <span style="color:#f3f3f3;" >Male</span><br>
                                <input type="radio" name="gender" value="female"> <span style="color:#f3f3f3;" >Female</span><br>
                                <input type="radio" name="gender" value="other"> <span style="color:#f3f3f3;" > Other</span>

                            </li>
                        </ol>
                        <!--							<div class="signin-rit">
                                                                                        <span class="checkbox1">
                                                                                                 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">I agree to <a class="pp" href="#"> Terms</a> and <a class="pp" href="#"> Privacy Policy</a></label>
                                                                                        </span>
                                                                                        <div class="clear"> </div>
                        </div>--><br>
                        <input type="submit" value="Sign Up">
                    </form>	
                    <!-- script for password confirmation -->
                    <script type="text/javascript">
                        window.onload = function () {
                            document.getElementById("password1").onchange = validatePassword;
                            document.getElementById("password2").onchange = validatePassword;
                        }
                        function validatePassword() {
                            var pass2 = document.getElementById("password2").value;
                            var pass1 = document.getElementById("password1").value;
                            if (pass1 != pass2)
                                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                            else
                                document.getElementById("password2").setCustomValidity('');
                            //empty string means no validation error
                        }
                    </script>
                    <!-- //script for password confirmation -->

                </div>									
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div><br><br></div>

<?php include 'footer.php'; ?>