<%@ page title="" language="C#" masterpagefile="~/webmaster.master" autoeventwireup="true" inherits="contact, App_Web_npiis2vy" %>

<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <!--=== Content Part ===-->
    <div class="breadcrumbs-v3 img-v1 ">
        <div class="container">
            <h1>Contact Us</h1>
            <p class="pull-right"><a href="index.aspx">Home </a>&nbsp/&nbsp <strong> Contact</strong> </p>
        </div>
    </div>
    <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30 ">
                <div class="">
                    <div class="row margin-bottom-10 ">
                        <div class="col-md-3">
                            <label>I am <span class="color-red">*</span></label>
                        </div>
                        <div class="col-md-7 col-md-offset-0">
                            <select name="gender" class="form-control">
                                <option value="0" selected="" disabled="">-- Select --</option>
                                <option value="1">Trainer</option>
                                <option value="2">Independent Partner</option>
                                <option value="3">Franchise Partner</option>
                                <option value="4">Endorsor</option>
                                <option value="5">Learner</option>
                            </select>
                        </div>
                    </div>
                    <div class="row  margin-bottom-10">
                        <div class="col-md-3">
                            <label>Full Name <span class="color-red">*</span></label>
                        </div>
                        <div class="col-md-7 col-md-offset-0">
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row  margin-bottom-10">
                        <div class="col-md-3">
                            <label>Email <span class="color-red">*</span></label>
                        </div>
                        <div class="col-md-7 col-md-offset-0">
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row  margin-bottom-10">
                        <div class="col-md-3">
                            <label>Contact Number<span class="color-red">*</span></label>
                        </div>
                        <div class="col-md-7 col-md-offset-0">
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="row  margin-bottom-10">
                        <div class="col-md-3">
                            <label>Message <span class="color-red">*</span></label>

                        </div>
                        <div class="col-md-7 col-md-offset-0">
                            <textarea rows="8" name="message" id="message" class="form-control margin-bottom-10"></textarea>
                        </div>
                    </div>
                    <div class="row  margin-bottom-10">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-7 col-md-offset-0">
                            <button type="submit" class="btn-u">Send Message</button>
                            <button type="submit" class="btn-u">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/col-md-9-->
            <div class="col-md-3">
                <!-- Contacts -->
                <div class="headline">
                    <h2>Contact Us</h2>
                </div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="mailto:support@ivyga.org"><i class="fa fa-envelope"></i>support@ivyga.org</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>+91 12345 12345</a></li>
                    <li><a href="http://www.ivyga.org" target="_blank"><i class="fa fa-globe"></i>www.ivyga.org</a></li>
                </ul>

                <!-- Business Hours -->
                <div class="headline">
                    <h2>Business Hours</h2>
                </div>
                <ul class="list-unstyled margin-bottom-30">
                    <li><strong>Monday-saturday:</strong> 8 am to 7 pm</li>
                    <li><strong>Sunday:</strong> Closed</li>
                </ul>
            </div>
            <!--/col-md-3-->
        </div>
        <!--/row-->
        <!--=== End Content Part ===-->
    </div>
    <!--/container-->
    <!--=== Footer Version 1 ===-->
</asp:Content>
