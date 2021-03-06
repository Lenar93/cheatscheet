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
                                    User snippets
                                </div>
                                <div class="card-body">
                                    <pre class="brush:js">
                                        "IAI_VARIABLE": {
                                            "prefix": "iaivar",
                                            "scope": "html, xml",
                                            "body": [
                                                "<iai:variable vid='$1' description='$2'><![CDATA[$2]]></iai:variable>"
                                            ],
                                            "description": "IAI Variable"
                                        },
                                        "IAI_ATRIBUTE": {
                                            "prefix": "iaiattr",
                                            "scope": "html, xml",
                                            "body": [
                                                "<iaixsl:attribute name='$1'>$2</iaixsl:attribute>"
                                            ],
                                            "description": "IAI Attribute"
                                        },
                                        "IAI_FOREACH": {
                                            "prefix": "iaifor",
                                            "scope": "html, xml",
                                            "body": [
                                                "<iaixsl:for-each select='$1'>",
                                                "\t$2",
                                                "</iaixsl:for-each>"
                                            ],
                                            "description": "IAI For-Each"
                                        },
                                        "IAI_CHOOSE": {
                                            "prefix": "iaichoose",
                                            "scope": "html, xml",
                                            "body": [
                                                "<iaixsl:choose>",
                                                "<iaixsl:when test='$1'>",
                                                "\t\t$2",
                                                "\t</iaixsl:when>",
                                                "\t<iaixsl:otherwise>",
                                                "\t\t$3",
                                                "\t</iaixsl:otherwise>",
                                                "</iaixsl:choose>"
                                            ],
                                            "description": "IAI Choose"
                                        },
                                        "IAI_VALUEOF": {
                                            "prefix": "iaivalue",
                                            "scope": "html, xml",
                                            "body": [
                                                "<iaixsl:value-of select='$1'/>"
                                            ],
                                            "description": "IAI Value-Of"
                                        },
                                        "IAI_IF": {
                                            "prefix": "iaiif",
                                            "scope": "html, xml",
                                            "body": [
                                                "<iaixsl:if test='$1'>",
                                                "\t$2",
                                                "</iaixsl:if>"
                                            ],
                                            "description": "IAI If"
                                        },
                                        "MOBILEMAXLESS": {
                                            "prefix": "mobile-max",
                                            "scope": "css,less",
                                            "body": [
                                            "@media only screen and (max-width: 757px) {",
                                            "\t$0",
                                            "}"
                                            ],
                                            "description": "Query dla mobilki"
                                        },
                                        "TABLETLESS":{
                                            "prefix": "tablet",
                                            "scope": "css,less",
                                            "body":[
                                                "@media (min-width: 979px) {",
                                                "\t$0",
                                                "}"
                                            ],
                                            "description": "Query dla tabletu wzwyż V3"
                                        },
                                        "MOBILELESS":{
                                            "prefix": "mobile",
                                            "scope": "css,less",
                                            "body":[
                                                "@media (min-width: 757px) {",
                                                "\t$0",
                                                "}"
                                            ],
                                            "description": "Query dla tabletu wzwyż V3"
                                        }
                                    }
                                    </pre>
                                </div>
                            </div>
                            
                           

                        </div>
                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <!-- <div class="card mb-4">
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
                            </div> -->

                           

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