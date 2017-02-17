<%@ page title="" language="C#" masterpagefile="~/webmaster.master" autoeventwireup="true" inherits="learner, App_Web_npiis2vy" enableeventvalidation="false" %>

<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="Server">
    <!--=== Interactive Slider ===-->
    <div class="breadcrumbs-v3 img-v1 ">
        <div class="container">
            <h1>Learner Registration</h1>
            <p class="pull-right"><a href="index.aspx">Home </a>&nbsp/&nbsp <strong>Learner Registration</strong>  </p>
        </div>
    </div>
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="reg-page">
                    <div class="row ">
                        <div class="col-md-4">
                            <label>First Name <span class="color-red">*</span></label>
                            <asp:TextBox ID="txtFirstName" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter First Name" MaxLength="40" Required="" pattern="^[A-Za-z ]+$" title="Invalid Entry"></asp:TextBox>
                        </div>
                        <div class="col-md-4">
                            <label>Middle Name</label>
                            <asp:TextBox ID="txtMiddleName" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Middle Name" MaxLength="40" pattern="^[A-Za-z ]+$" title="Invalid Entry"></asp:TextBox>
                        </div>
                        <div class="col-md-4">
                            <label>Last Name<span class="color-red">*</span></label>
                            <asp:TextBox ID="txtLastName" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Last Name" Required="" MaxLength="20" pattern="^[A-Za-z ]+$" title="Invalid Entry"></asp:TextBox>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <label>Date of Birth (MM-DD-YYYY) <span class="color-red">*</span></label>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-4">
                            <asp:DropDownList ID="ddlMonth" runat="server" CssClass="form-control margin-bottom-20" Required="">
                                <asp:ListItem Text="-- Month --" Value=""></asp:ListItem>
                                <asp:ListItem Text="Jan" Value="1"></asp:ListItem>
                                <asp:ListItem Text="Feb" Value="2"></asp:ListItem>
                                <asp:ListItem Text="Mar" Value="3"></asp:ListItem>
                                <asp:ListItem Text="Apr" Value="4"></asp:ListItem>
                                <asp:ListItem Text="May" Value="5"></asp:ListItem>
                                <asp:ListItem Text="June" Value="6"></asp:ListItem>
                                <asp:ListItem Text="July" Value="7"></asp:ListItem>
                                <asp:ListItem Text="Aug" Value="8"></asp:ListItem>
                                <asp:ListItem Text="Sep" Value="9"></asp:ListItem>
                                <asp:ListItem Text="Oct" Value="10"></asp:ListItem>
                                <asp:ListItem Text="Nov" Value="11"></asp:ListItem>
                                <asp:ListItem Text="Dec" Value="12"></asp:ListItem>
                            </asp:DropDownList>

                        </div>
                        <div class="col-md-4">
                            <asp:DropDownList ID="ddlDay" runat="server" CssClass="form-control margin-bottom-20" Required="">
                                <asp:ListItem Text="-- Day --" Value=""></asp:ListItem>
                                <asp:ListItem Text="1" Value="1"></asp:ListItem>
                                <asp:ListItem Text="2" Value="2"></asp:ListItem>
                                <asp:ListItem Text="3" Value="3"></asp:ListItem>
                                <asp:ListItem Text="4" Value="4"></asp:ListItem>
                                <asp:ListItem Text="5" Value="5"></asp:ListItem>
                                <asp:ListItem Text="6" Value="6"></asp:ListItem>
                                <asp:ListItem Text="7" Value="7"></asp:ListItem>
                                <asp:ListItem Text="8" Value="8"></asp:ListItem>
                                <asp:ListItem Text="9" Value="9"></asp:ListItem>
                                <asp:ListItem Text="10" Value="10"></asp:ListItem>
                                <asp:ListItem Text="11" Value="11"></asp:ListItem>
                                <asp:ListItem Text="12" Value="12"></asp:ListItem>
                                <asp:ListItem Text="13" Value="13"></asp:ListItem>
                                <asp:ListItem Text="14" Value="14"></asp:ListItem>
                                <asp:ListItem Text="15" Value="15"></asp:ListItem>
                                <asp:ListItem Text="16" Value="16"></asp:ListItem>
                                <asp:ListItem Text="17" Value="17"></asp:ListItem>
                                <asp:ListItem Text="18" Value="18"></asp:ListItem>
                                <asp:ListItem Text="19" Value="19"></asp:ListItem>
                                <asp:ListItem Text="20" Value="20"></asp:ListItem>
                                <asp:ListItem Text="21" Value="21"></asp:ListItem>
                                <asp:ListItem Text="22" Value="22"></asp:ListItem>
                                <asp:ListItem Text="23" Value="23"></asp:ListItem>
                                <asp:ListItem Text="24" Value="24"></asp:ListItem>
                                <asp:ListItem Text="25" Value="25"></asp:ListItem>
                                <asp:ListItem Text="26" Value="26"></asp:ListItem>
                                <asp:ListItem Text="27" Value="27"></asp:ListItem>
                                <asp:ListItem Text="28" Value="28"></asp:ListItem>
                                <asp:ListItem Text="29" Value="29"></asp:ListItem>
                                <asp:ListItem Text="30" Value="30"></asp:ListItem>
                                <asp:ListItem Text="31" Value="31"></asp:ListItem>
                            </asp:DropDownList>
                        </div>
                        <div class="col-md-4">
                            <asp:DropDownList ID="ddlYear" runat="server" CssClass="form-control margin-bottom-20" Required="">
                            </asp:DropDownList>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6">
                            <label>Contact Number <span class="color-red">*</span> ex : (888) 888-8888</label>
                            <asp:TextBox ID="txtPhone" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Contact Number" Required="" Type="tel" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" oninput="if(value.length>14)value=value.slice(0,14)" title="Invalid Entry"></asp:TextBox>
                        </div>
                        <div class="col-md-6">
                            <label>Email Address <span class="color-red">*</span></label>
                            <asp:TextBox ID="txtEmail" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Email Address"  MaxLength="150"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid Entry" Required=""  ></asp:TextBox>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-md-6">
                            <label>Education Qualification<span class="color-red">*</span></label>
                            <asp:TextBox ID="txtQualification" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Qualification" Required=""></asp:TextBox>
                        </div>
                        <div class="col-md-6">
                            <label>Work Experience</label>
                            <asp:TextBox ID="txtExperience" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Experience" pattern="^[0-9]{1,2}$" title="Invalid Entry"></asp:TextBox>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6">
                            <label>Employer Name</label>
                            <asp:TextBox ID="txtEmployer" runat="server" CssClass="form-control margin-bottom-20" MaxLength="60" placeholder="Enter Employer Name"></asp:TextBox>
                        </div>
                        <div class="col-md-6">
                            <label>Geography<span class="color-red">*</span></label>
                            <asp:TextBox ID="txtGeography" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Geography Location" pattern="^[A-Za-z ]+$" Required="" title="Invalid Entry" ></asp:TextBox>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6">
                            <label>Upload Photo</label>
                            <asp:FileUpload ID="flUpload" runat="server" CssClass="form-control margin-bottom-20" placeholder="Upload Photo" accept=".gif, .jpeg,.png,.jpg" />
                        </div>
                        <div class="col-md-6">
                            <label>Upload ID Proof</label>
                            <asp:FileUpload ID="flProofUpload" runat="server" CssClass="form-control margin-bottom-20" placeholder="Upload Photo" accept=".gif, .jpeg,.png,.jpg" />
                        </div>
                    </div>
                    <%--   <label>Refered Name</label>
                    <asp:TextBox ID="txtReferedName" runat="server" CssClass="form-control margin-bottom-20" placeholder="Enter Refered Name"></asp:TextBox>--%>
                    <div class="row">
                        <div class="col-lg-6">
                            <asp:Button ID="btnSubmit" runat="server" CssClass="btn-u" Text="Register Now" OnClick="btnSubmit_Click" />
                            <input type="button" id="btnClearAll" class="btn-u" value="Clear All" />
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
                    <p>Learner details reigstered successfully.</p>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn-u" type="button" id="btnClose">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        jQuery(document).ready(function () {

            $("#btnClose, #btnClearAll").click(function () {
                $('[id*=txtFirstName]').val('');
                $('[id*=txtMiddleName]').val('');
                $('[id*=txtLastName]').val('');
                $('[id*=txtEmail]').val('');
                $('[id*=txtPhone]').val('');
                $('[id*=txtQualification]').val('');
                $('[id*=txtExperience]').val('');
                $('[id*=txtEmployer]').val('');
                $('[id*=txtGeography]').val('');
                $('[id*=flUpload]').val('');
                $('[id*=flProofUpload]').val('');
                $('select[id$=ddlDay] option:first-child').attr("selected", "selected");
                $('select[id$=ddlMonth] option:first-child').attr("selected", "selected");
                $('select[id$=ddlYear] option:first-child').attr("selected", "selected");
            });
        });


    </script>
</asp:Content>

