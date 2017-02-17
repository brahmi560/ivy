<%@ page title="" language="C#" masterpagefile="~/webmaster.master" autoeventwireup="true" inherits="login, App_Web_npiis2vy" %>

<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <div class="breadcrumbs-v3 img-v1">
        <div class="container">
            <h1>Login</h1>
            <p class="pull-right"><a href="index.aspx">Home </a>&nbsp/&nbsp <strong>Login</strong>  </p>
        </div>
    </div>
    <!--=== Content Part ===-->
    <div class="contaner-fluid">
        <div class="body-bg">
            <div class="container content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-2 col-md-8 col-md-offset-2">
                        <div class="col-md-6  col-sm-6  col-xs-12">
                            <div class="reg-page">
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" placeholder="Username" class="form-control" required="">
                                </div>
                                <div class="input-group margin-bottom-20">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" placeholder="Password" class="form-control" required="">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="color-green" href="forgotpassword.html">Forget your Password</a>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn-u pull-right" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="reg-page">
                                <div class="social-login " style="padding: 0px 0;">
                                    <ul class="list-unstyled">
                                        <li>
                                            <button class="btn rounded btn-bg1 btn-block btn-lg  margin-bottom-20">
                                                <i class="fa fa-facebook"></i>Facebook
                                            </button>

                                            <button class="btn rounded btn-block btn-bg2 btn-block btn-lg  margin-bottom-20">
                                                <i class="fa fa-google-plus"></i>Google
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </div>

    <!--=== End Content Part ===-->
    </div>
</asp:Content>
