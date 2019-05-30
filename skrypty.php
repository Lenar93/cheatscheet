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
                                    Wyrównywanie wysokości elementów w zależności od kolumn
                                </div>
                                <div class="card-body">
                                    <pre class="brush:js">
                                        $.fn.setHeight = function (options) {
                                            function getNumCol(dataColumn){
                                                var regex = new RegExp(app_shop.vars.view + ':\\d');
                                                var currBreakpoint = dataColumn.match(regex)[0].split(':')[1];
                                                return parseInt(currBreakpoint)
                                            }
                                            var settings = $.extend({
                                                elementClass: '.product-name',
                                            }, options);
                                            return this.each(function () {
                                                $this = $(this);
                                                var numCol = 4, separate = false;
                                                var dataColumn = $this.attr('data-column');
                                                var $elements = $this.find('> *');

                                                //zwaracanie ilości w wierszu
                                                if (dataColumn || dataColumn != ''){
                                                    numCol = getNumCol(dataColumn);
                                                }

                                                if($this.find('.separator').length){
                                                    separate = true;
                                                }
                                                //w przypadku separatora dodanie 1
                                                if(separate){
                                                    numCol++;
                                                }
                                                $elements.find(settings.elementClass).height('auto');
                                                for (var i = 0, len = $elements.length; i < len; i += numCol) {
                                                    $elements.slice(i, i + numCol).find(settings.elementClass).maxHeight();
                                                }
                                            });
                                        }
                                        
                                        //wykorzystanie
                                        app_shop.run(function(){
                                            $('#search').setHeight({elementClass:'.product-name'});
                                        },'all','#search');
                                    </pre>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header">
                                    Wrapowanie big_label w span
                                </div>
                                <div class="card-body">
                                    <pre class="brush:js">
                                      $('.big_label').contents().filter(function () {
                                          return this.nodeType == 3 && $.trim(this.textContent) != '';
                                      }).wrap('<span></span>');
                                    </pre>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    Default Card Example
                                </div>
                                <div class="card-body">
                                    <pre class="brush:js">
                                    This card uses Bootstrap's default styling with
                                    no utility classes added. Global styles are the only
                                    things modifying the look and feel
                                    of this default card example.
                                    </pre>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header">
                                    Default Card Example
                                </div>
                                <div class="card-body">
                                    <pre class="brush:css">
                                    This card uses Bootstrap's default styling 
                                    with no utility classes added. Global 
                                    styles are the only things modifying the look 
                                    and feel of this default card example.
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