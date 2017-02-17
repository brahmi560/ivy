<%@ page title="" language="C#" masterpagefile="~/webmaster.master" autoeventwireup="true" inherits="endorsor, App_Web_npiis2vy" %>

<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="Server">
    <!--=== Interactive Slider ===-->
    <div class="breadcrumbs-v3 img-v1 ">
        <div class="container">
            <h1>Endorsor</h1>
            <p class="pull-right"><a href="index.aspx">Home </a>&nbsp/&nbsp <strong>Endorsor</strong> </p>
        </div>
    </div>
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="reg-page">
                    <label>Endorsor Type<span class="color-red">*</span></label>
                    <asp:DropDownList ID="ddlEndorsorType" runat="server" CssClass="form-control margin-bottom-20"  Required="">
                        <asp:ListItem Text="-- select --" Value=""></asp:ListItem>
                        <asp:ListItem Text="Author" Value="1"></asp:ListItem>
                        <asp:ListItem Text="Professor" Value="2"></asp:ListItem>
                        <asp:ListItem Text="Industry expert(Corporate)" Value="3"></asp:ListItem>
                    </asp:DropDownList>
                    <div class="row ">
                        <div class="col-md-4">
                            <label>First Name <span class="color-red">*</span></label>
                            <asp:TextBox ID="txtFirstName" runat="server" CssClass="form-control margin-bottom-20"  placeholder="Enter First Number" MaxLength="40" pattern="^[A-Za-z ]+$" title="Invalid Entry" Required=""></asp:TextBox>
                        </div>
                        <div class="col-md-4">
                            <label>Middle Name<span class="color-red">*</span></label>
                            <asp:TextBox ID="txtMiddleName" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Middle Number" MaxLength="40" pattern="^[A-Za-z ]+$" title="Invalid Entry" Required=""></asp:TextBox>
                        </div>
                        <div class="col-md-4">
                            <label>Last Name<span class="color-red">*</span></label>
                            <asp:TextBox ID="txtLastName" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Last Address" MaxLength="20" pattern="^[A-Za-z ]+$" title="Invalid Entry" Required=""></asp:TextBox>
                        </div>
                    </div>
                     <label>Contact Number<span class="color-red">*</span> &nbsp;&nbsp;&nbsp;&nbsp;ex : (888) 888-8888</label>
                    <asp:TextBox ID="txtPhone" runat="server" CssClass="form-control margin-bottom-20" placeholder="Please Contact Number" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" title="Invalid Entry" oninput="if(value.length>14)value=value.slice(0,14)" Required="" Type="tel"></asp:TextBox>
                    <label>Email Address<span class="color-red">*</span></label>
                    <asp:TextBox ID="txtEmail" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid Entry" Required="" Type="email"></asp:TextBox>
                    <label>Location<span class="color-red">*</span></label>
                    <asp:TextBox ID="txtLocation" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Location" pattern="^[a-zA-Z ]+$" title="Invalid Entry" Required=""></asp:TextBox>
                    <label>Specialization<span class="color-red">*</span></label>
                    <asp:TextBox ID="txtSpecialization" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Specialization" pattern="^[a-zA-Z ]+$" title="Invalid Entry" Required=""></asp:TextBox>
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
                    <p>Endorsor details reigstered successfully.</p>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn-u" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
</asp:Content>

