<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Homepage" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="login">
        <div class="kotak">
        </div>
            <div class="WelcomeBack">Halo, <br/>Telutent!</div>
                <img class="Tel1" style="width: 509px; height: 147px; left: 807px; top: 138px; position: absolute;" src="TEL 1.png" />

                    <button type="Button" class="buttonlogin">
                    <div class="Buttontextlogin">Login</div>
                    </div>


                        <!-- <div class="OutlineDisable">
                        </div> -->

                         <!-- <div class="OutlineDisable2"></div> -->
                            <form>
                            <div class="OutlineDisable2">
                            <input type="password" id="pass" class="passwordinput" name="password" placeholder="Password" required>

                                </div>

                            </form>

                            <form>
                            <div class="OutlineDisable">
                            <input type="text" id="usernameinput" class="usernameinput" name="usernameinput" placeholder="Telutent@gmail.com">
                            <!-- <input type="email" class="username"  placeholder="Telutent@gmail.com"> -->
                                </div>
                            </div>
                            </form>


                            <!-- <div class="passwordtitik">********</div> -->
                        <div class="Buttontextlogin"></div>

                                <div class="Username" style="width: 88px; height: 27px; left: 884px; top: 391px; position: absolute; text-align: center"><span style="color: #BDBDBD; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 22.40px; word-wrap: break-word">U</span><span style="color: #BDBDBD; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 22.40px; word-wrap: break-word">sername</span></div>
                                <div class="WelcomeBackPleaseLoginToYourAccount">Welcome back! Please login to your account.</div>

                            <div class="Password">Password</div>
                            <div class="Rectangle2"></div>
                            <div class="IconCheck" style="width: 18px; height: 19px; left: 891px; top: 659px; position: absolute; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                            <div class="IconCheck">

                        <div class="Grid"></div>
                        <div class="Mask"></div>
                        <div class="Mask2"></div>

                    <div class="Color">
                    <div class="IconFillAccent"></div>
        </div>
        </div>
        </div>
                    <div class="RememberMe">Remember Me</div>
                    <button type="button"class="ForgotPassword" class="btn btn-outline-secondary">Forgot Password?</button>
        </div>


    <main>
        @yield("app")
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
