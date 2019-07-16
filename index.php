<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IAI Cheat Sheet</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/styles/shCore.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/styles/shThemeRDark.min.css" />
    


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include 'navigation.php';?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    Font-size
                                </div>
                                <div class="card-body">
                                    <pre class="brush:css">
                                        @base_em: 14;
                                        @em: @base_em*1em;
                                        @rem: @base_em*1rem; 
                                        
                                        /* Używanie */
                                        font-size:20/@em;
                                        font-size:20/@rem;
                                    </pre>
                                </div>
                            </div>
                            
                             <div class="card mb-4">
                                <div class="card-header">
                                    Stylowanie scroll
                                </div>
                                <div class="card-body">
                                    <pre class="brush:css">
                                        .less_scrollbar(@color: @secondary_color, @bg_color: #fff) {
                                            scrollbar-color: @color @bg_color;
                                            scrollbar-width: thin;
                                            &::-webkit-scrollbar-track
                                            {
                                                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                                                background-color: @bg_color;
                                            }
                                            &::-webkit-scrollbar
                                            {
                                                width: 6px;
                                                background-color: @bg_color;
                                                height:6px;
                                            }
                                            &::-webkit-scrollbar-thumb
                                            {
                                                background-color: @color;
                                            }
                                        }
                                    </pre>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header">
                                    Media query css
                                </div>
                                <div class="card-body">
                                    <pre class="brush:css">
                                        @tablet: ~"only screen and (max-width: 979px)";
                                        @mobile: ~"only screen and (max-width: 757px)";
                                        @small_mobile: ~"only screen and (max-width: 500px)";
                                        @laptop: ~"only screen and (max-width: 1200px)";
                                        @desktop: ~"only screen and (max-width: 1500px)";
                                        
                                        /* nowy standard */
                                        @small-mobile: ~"only screen and (max-width: 500px)";
                                        @mobile: ~"only screen and (max-width: 757px)";
                                        @tablet: ~"only screen and (min-width: 757px)";
                                        @laptop: ~"only screen and (max-width: 979px)";
                                        @desktop: ~"only screen and (max-width: 1200px)";
                                    </pre>
                                </div>
                            </div>
                            
                            <div class="card mb-4">
                                <div class="card-header">
                                    Stylowanie IAI Accounts + cookies
                                </div>
                                <div class="card-body">
                                    <pre class="brush:css">
                                        #iai-accounts_toplayer p a {
                                            color: @less_primary_color !important; 
                                            text-decoration: underline !important; 
                                            &:hover {
                                                text-decoration: none !important; 
                                                color: @less_text_color !important;
                                            }
                                        }
                                        .iai-accounts_alter_button {
                                            color: @less_primary_color !important; 
                                            text-decoration: underline !important; 
                                            &:hover {
                                                text-decoration: none !important; 
                                                color: @less_text_color !important;
                                            }
                                        }
                                        #accept_button {
                                            .less_button_small_css3(); 
                                            font-size: 13px; 
                                            &:hover {
                                                .less_button_small_css3_hover(); 
                                                font-size: 13px}
                                            }
                                        /*Stylowanie Cookies z kolorowym tłem:*/
                                        #ck_dsclr {
                                            background: @less_primary_color !important;    
                                            border-bottom: 1px solid @less_primary_color !important;    
                                            border-top: 1px solid @less_primary_color !important;
                                        }
                                        #ck_dsclr #ck_dsclr_sub {
                                            color: #fff !important;
                                        }
                                        #ck_dsclr #ckdsclmrshtdwn {
                                            background: #fff !important; 
                                            font-weight: normal; 
                                            color: @less_primary_color !important;
                                        }
                                        div#ck_dsclr a {
                                            color: #fff !important;  
                                            font-weight: bold; 
                                            text-decoration: underline !important;   
                                            letter-spacing: 0.02em;
                                        }
                                    </pre>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    Nazewnictwo less
                                </div>
                                <div class="card-body">
                                    <pre class="brush:css">
                                    @primary_color: #000;                        //kolor głowny
                                    @secondary_color: #fff;                      //kolor poboczny
                                    @third_color: #000;                          //kolor dodatkowy
                                
                                    @text_color: #333                            //kolor tekstu
                                    @button_text_color: #333;                    //kolor tekstu na buttonie
                                    @button_text_color_hover: #333;              //kolor tekstu na buttonie po hover
                                    
                                    @border_color : #333;                        //kolor border'a
                                    @border_radius: 7px;                         //border radius
                                    </pre>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header">
                                    Przypisywanie kolorów
                                </div>
                                <div class="card-body">
                                    <pre class="brush:css">
                                        @less_info_color: @less_iaicolorscheme_info_color;
                                        @less_success_color: @less_iaicolorscheme_success_color;
                                        @less_danger_color: @less_iaicolorscheme_danger_color;
                                        @less_primary_color: @less_iaicolorscheme_primary_color;
                                        @less_gray_color: @less_iaicolorscheme_gray_color;
                                        @less_gray_lighter_color: @less_iaicolorscheme_gray_lighter_color;
                                        @less_gray_darker_color: @less_iaicolorscheme_gray_darker_color;
                                        @less_text_color: @less_iaicolorscheme_background_text_color;
                                        @less_link_color: @less_iaicolorscheme_background_link_color;
                                        @less_link_color_hover: @less_iaicolorscheme_background_link_color_hover;
                                        @less_warning_color: @less_iaicolorscheme_warning_color;
                                        @less_border_shadow: 0px 2px 0px 0px rgba(0, 0, 0, 0.05);
                                        @less_iaicolorscheme_background_color: #ffffff;
                                        @less_iaicolorscheme_background_link_color: @text_color;
                                        @less_iaicolorscheme_background_link_color_hover: @primary_color;
                                        @less_iaicolorscheme_background_text_color: @text_color;
                                        @less_iaicolorscheme_background_border_color: @border_color;
                                        @less_iaicolorscheme_background_active_color: @primary_color;
                                        @less_iaicolorscheme_background_alternative_color: @border_color;
                                        @less_iaicolorscheme_background_alternative_text_color: @text_color;
                                        @less_iaicolorscheme_background_alternative_link_color: @text_color;
                                        @less_iaicolorscheme_background_alternative_link_color_hover: @primary_color;
                                        @less_iaicolorscheme_background_alternative_border_color: @border_color;
                                        @less_iaicolorscheme_background_alternative_active_color: @primary_color;
                                        @less_iaicolorscheme_background_mask_color: #ffffff;
                                        @less_iaicolorscheme_background_mask_text_color: @text_color;
                                        @less_iaicolorscheme_background_mask_link_color: @text_color;
                                        @less_iaicolorscheme_background_mask_link_color_hover: @primary_color;
                                        @less_iaicolorscheme_background_mask_border_color: @border_color;
                                        @less_iaicolorscheme_background_mask_active_color: @primary_color;
                                        @less_iaicolorscheme_info_color: @text_color;
                                        @less_iaicolorscheme_info_color_text: #ffffff;
                                        @less_iaicolorscheme_success_color_text: #ffffff;
                                        @less_iaicolorscheme_danger_color_text: #ffffff;
                                        @less_iaicolorscheme_warning_color_text: #ffffff;
                                        @less_iaicolorscheme_primary_color_text: @text_color;
                                        @less_iaicolorscheme_success_color: @primary_color;
                                        @less_iaicolorscheme_danger_color: #e35c5c;
                                        @less_iaicolorscheme_warning_color: #f89406;
                                        @less_iaicolorscheme_primary_color: @text_color;
                                        @less_iaicolorscheme_gray_color: #999999;
                                        @less_iaicolorscheme_gray_lighter_color: @border_color;
                                        @less_iaicolorscheme_gray_darker_color: @text_color;
                                        @less_iaicolorscheme_button_small_color: @secondary_color;
                                        @less_iaicolorscheme_button_small_color_hover: @primary_color;
                                        @less_iaicolorscheme_button_small_text_color: @button_text_color;
                                        @less_iaicolorscheme_button_small_text_color_hover: @button_text_color_hover;
                                        @less_iaicolorscheme_button_medium_color: @secondary_color;
                                        @less_iaicolorscheme_button_medium_hover: @primary_color;
                                        @less_iaicolorscheme_button_medium_text_color: @button_text_color;
                                        @less_iaicolorscheme_button_medium_text_hover: @button_text_color_hover;
                                        @less_iaicolorscheme_button_large_color: @secondary_color;
                                        @less_iaicolorscheme_button_large_hover: @primary_color;
                                        @less_iaicolorscheme_button_large_text_color: @button_text_color;
                                        @less_iaicolorscheme_button_large_text_hover: @button_text_color_hover;
                                        
                                        @less_button_small: @secondary_color;
                                        @less_button_small_hover: @primary_color;
                                        @less_button_medium: @secondary_color;
                                        @less_button_medium_hover: @primary_color;
                                        @less_button_large: @secondary_color;
                                        @less_button_large_hover: @primary_color;
                                        @less_button_small_color: @secondary_color;
                                        @less_button_small_color_hover: @primary_color;
                                        @less_button_medium_color: @secondary_color;
                                        @less_button_medium_color_hover: @primary_color;
                                        @less_button_large_color: @secondary_color;
                                        @less_button_large_color_hover: @primary_color;
                                    </pre>
                                </div>
                            </div>
                            
                            <div class="card mb-4">
                                <div class="card-header">
                                    Stylowanie alertów
                                </div>
                                <div class="card-body">
                                    <pre class="brush:css">
                                        .less_info_template(@background, @color, @icon){
                                         border: 1px solid transparent;
                                         color: @color;
                                         font-size: 13px;
                                         padding: 22px 65px !important;
                                         margin-bottom: 10px !important;
                                         text-align: center;
                                         background-color: @background;
                                         position: relative;

                                         &::before{
                                             content: @icon;
                                             font-family: fontawesome;
                                             font-size: 2em;
                                             position: absolute;
                                             left: 23px;
                                             top: 50%;
                                             transform: translateY(-50%);
                                         }
                                         h3{
                                             color: inherit;
                                         }

                                         a{
                                             color: inherit;
                                             text-decoration: underline;
                                             &:hover{
                                                 text-decoration: none;
                                             }
                                         }
                                        }

                                        .less_info {
                                         .less_info_template(@less_info_color, #fff, '\F05A');
                                        }

                                        .less_warning {
                                         .less_info_template(@less_warning_color, #fff, '\F06A');
                                        }

                                        .less_error {
                                         .less_info_template(@less_danger_color, #fff, '\F057');
                                        }

                                        .less_success{
                                         .less_info_template(@less_success_color, #fff, '\F058');
                                        }
                                    </pre>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shCore.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushJScript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushCss.js"></script>
   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script type="text/javascript">
        SyntaxHighlighter.all()
    </script>

</body>

</html>