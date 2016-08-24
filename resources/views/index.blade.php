<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
          <div class="row">
            <div class="large-12 columns space">
            </div>
          </div>
          <div class="row">
            <div class="large-6 large-centered columns">
              <div class="row">
                <div class="large-9 columns">
                    <div class="tabs-content" data-tabs-content="loginTabs">
                      <div class="tabs-panel is-active" id="panelCan">
                        <!-- Login Form Group -->
                        <form action="/" method="post">
                          <div class="row">
                            <div class="large-12 large-centered columns">

                              <div class="row">
                                <div class="large-11 large-centered columns">
                                  <h2 id="mainLogo"><img src="/assets/img/loginBackground/icon-clear-thinkers.jpg" style="color: #D72323" alt="lightBulb" height="60" width="60"> Tech Aptitude</h2>
                                </div>
                              </div>
                            
                              <div class="form-group">
                                <label></label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                              </div>
                            </div>
                          </div>  
                          <div class="row">
                            <div class="large-12 columns">
                              <div class="form-group">
                                <label></label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="large-12 columns">
                              <div class="form-group">
                                  <label>Remember Me</label>
                                  <input type="checkbox" class="form-control" name="remember" value="yes">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="large-12 large-centered columns">
                                <input type="submit" class="button" value="Sign In"/>
                                <a href="/signup" class="button">Create Account</a>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- end of tabs content -->
                  
                </div>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>
