<%@ page title="" language="C#" masterpagefile="~/webmaster.master" autoeventwireup="true" inherits="trainer, App_Web_npiis2vy" %>

<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="Server">

    <!--=== Interactive Slider ===-->
    <div class="breadcrumbs-v3 img-v1 ">
        <div class="container">
            <h1>Trainer Registration</h1>
            <p class="pull-right"><a href="index.aspx">Home </a>&nbsp/&nbsp; <strong>Trainer Registration</strong>  </p>
        </div>
    </div>
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="reg-page">
                    <label>Trainer Name<span class="color-red">*</span></label>
                    <asp:TextBox ID="txtPartner" runat="server" CssClass="form-control margin-bottom-20" MaxLength="40" pattern="^[a-zA-Z ]+$" title="Invalid Entry" placeholder="Enter Trainer Name" Required=""></asp:TextBox>
                    <label>Contact Person Name</label>
                    <asp:TextBox ID="txtContact" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Contact Person Name" pattern="^[a-zA-Z ]+$" MaxLength="40" title="Invalid Entry"></asp:TextBox>
                    <label>Contact Number<span class="color-red">*</span> &nbsp;&nbsp;&nbsp;&nbsp;ex : (888) 888-8888</label>
                    <asp:TextBox ID="txtPhone" runat="server" CssClass="form-control margin-bottom-20" placeholder="Please Contact Number" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" title="Invalid Entry" oninput="if(value.length>14)value=value.slice(0,14)" Required="" Type="tel"></asp:TextBox>
                    <label>Email Address<span class="color-red">*</span></label>
                    <asp:TextBox ID="txtEmail" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid Entry" Required="" Type="email"></asp:TextBox>
                    <label>Location<span class="color-red">*</span></label>
                    <asp:TextBox ID="txtLocation" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Location" pattern="^[a-zA-Z ]+$" title="Invalid Entry" Required=""></asp:TextBox>
                    <div class="row">
                        <div class="col-lg-6">
                            <asp:Button ID="btnSubmit" runat="server" CssClass="btn-u" Text="Register Now" OnClick="btnSubmit_Click" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="mdlSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel1" class="modal-title">Success Message</h4>
                </div>
                <div class="modal-body">
                    <p>Trainer details reigstered successfully.</p>
                </div>
                <div class="modal-footer">
                    <button id="btnClose" data-dismiss="modal" class="btn-u" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

</asp:Content>

