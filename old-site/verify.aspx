<%@ page title="" language="C#" masterpagefile="~/webmaster.master" autoeventwireup="true" inherits="verify, App_Web_npiis2vy" %>

<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="Server">
    <div class="breadcrumbs-v3 img-v1">
        <div class="container">
            <h1>Verify Certification</h1>
            <p class="pull-right"><a href="index.aspx">Home </a>&nbsp/&nbsp <strong>Verify Certification</strong> </p>
        </div>
    </div>

    <div class="container content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="reg-page">
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" placeholder="your Email" class="form-control">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
                        <input type="password" placeholder="Reference No" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-6 checkbox">
                        </div>
                        <div class="col-md-6">
                            <button class="btn-u pull-right" type="submit">Verify</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--/container-->
</asp:Content>

