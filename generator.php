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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


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
                    <h1>Generator instrukcji</h1>
                    <div class="instructions" data-element="instructions"></div>
                    <div class="content_wrapper">
                        <div class="maincont_left">
                            <small>01</small>
                            <label>Dodaj nową sekcję</label>
                            <button class="main_btn opis2">Dodaj sekcję</button>
                        </div>
                        <div class="maincont">
                            <small>02</small>
                            <label>Sekcje (dane do uzupełnienia):</label>
                            <div class="contener"></div>

                        </div>
                        <div class="maincont_right">
                            <div class="maincont_right_sub">
                                <small>03</small>
                                <button class="btn gen main_btn" data-clipboard-action="copy" data-clipboard-target="#copycat">Generuj instrukcję</button>
                                <div class="status2 status_layout"></div>
                                <textarea class="global_code" id="copycat"></textarea>
                                <br>
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

    <style>
         a, button {
            transition: all 0.25s;
            -webkit-transition: all 0.25s;
        }
        .src1 {
            display: none;
        }

        .target {
            display: block;
            width: 100% !important;
            height: 200px !important;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            border: 2px solid #eee;
        }

        .target.active {
            box-shadow: 0 0 5px 5px #eee;
        }

        small {
            display: inline-block;
            font-weight: bold;
            font-size: 28px;
            margin: 15px 0;
            background: #d2d2d2;
            border-radius: 50%;
            width: 60px;
            text-align: center;
            height: 60px;
            line-height: 60px;
            color: #fff;
        }

        div,
        input,
        textarea,
        h4 {
            display: block;
        }

        input,
        textarea {    
            min-height: 40px;
            font-size: 12px;
            padding: 5px 10px;
            background: #eee;
            border-radius: 5px;
            border: 1px solid #d2d2d2;
        }

        .global_code {
            width: 100%;
            height: 300px;
            display: none;
        }

        .content_wrapper {
            display: flex;

        }

        .maincont_left {
            display: inline-block;
            vertical-align: top;
            width: 300px;
            height: 100%;
        }

        .maincont {
            display: inline-block;
            vertical-align: top;
            flex-grow: 1;
            display: none;
        }
        .main_section:hover small {
            box-shadow: 0 5px 10px #355ccc21;
        }
        .maincont_right {
            padding-left: 50px;
            display: inline-block;
            vertical-align: top;
            flex-grow: 1;
            height: 100%;
            display: none;
        }

        .maincont_right_sub {
            overflow: auto;
        }

        label {
            margin: 0 0 5px;
            display: block;
            font-size: 11px;
        }

        .btn img {
            width: 250px;
        }

        .btn {
            margin-bottom: 10px;
        }

        .main_btn {
            color: #fff;
            background: #355ccc;
            border: 1px solid #355ccc;
            border-radius: 10px;
            padding: .5em 4em;
            font-size: 18px;
            display: block;
            margin-top: 50px;
        }
        .main_btn:hover {
            color: #355ccc;
            background: none;
        }
        h4 {
            margin: 15px 0 5px;
        }

        section {
            border: 2px solid #eee;
            padding: 20px;
            margin-bottom: 10px;
            position: relative;
            border-radius: 10px;
        }

        .del_section {
            background: #e44f4f;
            color: #fff;
            border: 1px solid #e44f4f;
            font-weight: bold;
            font-size: 14px;
            padding: 5px 15px;
            position: absolute;
            top: 0;
            right: 0;
            border-radius: 3px;
        }
        .del_section:hover {
            background: none;
            color: #e44f4f;
        }

        .btn_small {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 10px;
            text-transform: uppercase;
            background: #ff0000;
            color: #fff;
        }

        .dir {
            margin-bottom: 30px;
            width: 260px;
        }

        section input,
        section textarea {
            width: 100%;
        }

        section textarea {
            height: 200px;
        }

        section img {
            max-width: 100%;
            margin: 10px 0;
        }

        .dirlink {
            display: none;
        }

        .status_layout {
            background: #3ba009;
            color: #fff;
            text-transform: uppercase;
            padding: 5px;
            margin-right: 10px;
            float: left;
            display: none;
        }

        .status2 {
            display: none !important;
            float: none;
            width: 90%;
            text-align: center;
        }

        .new {
            color: #ff0000;
        }
        .instruction{
            display: block;
        }
        .instruction.active{
            color: red;
        }
    </style>

    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        
     
        var objects = new Object();



        $(function() {

            var global_cont = 0;
            var global_array = [];


            global_array['opis2'] = '<div class="product_desc_item product_desc_w2 product_desc_right" id="section_[index]">\
                                        <h3>[label]</h3>\
                                        <div class="product_desc_item_img">\
                                            <img src="[src1]"/>\
                                        </div>\
                                        <div class="product_desc_item_txt">\
                                            <div class="product_desc_txt">[opis]</div>\
                                            <div class="product_btn"><a class="btn" target="_blank" href="[link]">Konfiguruj</a></div>\
                                        </div>\
                                    </div>';
            global_array['opis2_section'] = '<label>Nagłówek:</label><input type="text" class="label" placeholder="Nagłówek"></input><label>Ścieżka do pliku oraz nazwa:</label><div class="span4 target contain" style="z-index: 10;"></div><textarea type="text" class="src1"></textarea></input><label>Opis:</label><textarea type="text" class="opis" placeholder="Opis"></textarea><label>Link do strefy:</label><input type="text" class="link" placeholder="Link do strefy"></input>';

            





            $('.opis2').click(function() {
                if (check()) {
                    $('.contener').append("<section class='section_desc' data-name='opis2' data-elements='src1,label,opis,link' data-num='" + global_cont + "'>" + global_array['opis2_section'] + "<button class='del_section btn_small' data-num='" + global_cont + "'>X</button></section");

                    $('section[data-num="' + global_cont + '"').find('.btn_small').on('click', function() {
                        var num = $(this).data('num');
                        $('section[data-num="' + num + '"').remove();
                    });

                    //                    var dirname = '/data/include/cms/instrukcja/';
                    //                    $('section[data-num="' + global_cont + '"').find('.src1').val(dirname);


                    global_cont++;
                    mustbe();
                }

            });



            /////

            var css = '<style>body {margin: 0;font-size: 14px;font-family: Arial;font-weight: 400;color: #333;max-width: 1000px;margin: 0 auto;}aside {width: 20%;position: fixed;left: 0;top: 0;}aside.instruction_wrapper label {display: block;font-size: 16px;text-transform: uppercase;font-weight: bold;margin-bottom: 10px;}.instruction_links a:hover {padding-left: 10px;}.instruction_links a {color: #333;display: block;text-decoration: none;padding: 5px 0;transition: all .3s;}.product_desc {width: 80%;float: right;text-align: center;}.product_desc_item {margin-bottom: 50px;padding-bottom: 50px;border-bottom: 2px solid #333;}img {max-width: 100%;}.product_desc_item {margin: 0 0 50px;}.product_desc_item label {display: block;padding: 20px 0 0;font-size: 16px;text-transform: uppercase;}.product_desc_txt {margin: 15px 0 50px;font-style: italic;font-size: 15px;}.btn:hover {background: #fff;border: 1px solid #333333;color: #000;}.number {border-radius: 100%;color: #fff;background: #ff9432;width: 30px;height: 30px;line-height: 30px;display: inline-block;margin-right: 10px;}.btn {display: block;width: 300px;text-align: center;margin: 20px auto;color: #fff;background: #000;border: 1px solid #000;text-decoration: none;padding: 12px 0;font-size: 1.15em;border-radius: 22px;transition: all .2s;}.product_desc_item h3 {text-transform: uppercase;padding: 25px 0;display: block;font-weight: 600;font-size: 24px;} .product_desc_item .label{padding: 40px 0 0px;display: block;font-weight: 600;}[href=""]{display:none;}.instruction_wrapper{padding-left:15px; padding-right:15px;}</style>';

            $('.gen').on('click', function() {
                $('.global_code').val('');
                var result;
                var name;
                var sectionNameTab = [];
                $('section').each(function(index) {
                    var sectionName = new Object();
                    var obj = $(this);
                    name = obj.data('name');
                    var elem = obj.data('elements');
                    elem = elem.split(',');

                    result = global_array[name];

                    for (n in elem) {
                        var val = obj.find('.' + elem[n]).val();
                        if (elem[n] == 'src1') {
                            val = val.replace('\"', '');
                        }
                        result = result.replace('[' + elem[n] + ']', val);
                        result = result.replace(/\n/g, '<br />');
                    }
                    sectionName.name = obj.find('.label').val();
                    sectionName.index = index;
                    sectionNameTab.push(sectionName);
                    result = result.replace('[index]', index);

                    //result = '<div class="product_desc"><div class="product_desc_items">' + result + '</div></div>';
                    $('.global_code').val($('.global_code').val() + result);
                });
                var menu = returnMenu(sectionNameTab);
                $('.global_code').val('<body>' + menu + '<div class="product_desc description_bottom"><div class="product_desc_items">' + $('.global_code').val() + '</div></div>' + css + '</body>');

                saveTextAsFile();


                $('.status2').show().html('Skopiowano do schowka');
            });

            function saveTextAsFile() {
                var textToSave = $('.global_code').val();
                var textToSaveAsBlob = new Blob([textToSave], {
                    type: "text/html"
                });
                var textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
                var fileNameToSaveAs = 'instrukcja.html';

                var downloadLink = document.createElement("a");
                downloadLink.download = fileNameToSaveAs;
                downloadLink.innerHTML = "Download File";
                downloadLink.href = textToSaveAsURL;
                downloadLink.onclick = destroyClickedElement;
                downloadLink.style.display = "none";
                document.body.appendChild(downloadLink);

                downloadLink.click();
            }

            function destroyClickedElement(event) {
                document.body.removeChild(event.target);
            }

            setInterval(function() {
                saveData();
            }, 10000);
            $('.adddir').on('click', function() {
                if (!check()) {
                    return false;
                }
                $(this).css('opacity', 0.3);
                createDir($('.dircreate').val());
            });

            function returnMenu(sectionNameTab) {
                var menuArray = [];
                sectionNameTab.map(function(sectionName) {
                    menuArray.push('<a href="#section_' + sectionName.index + '">' + sectionName.name + '</a>');
                    console.log(menuArray);
                    //menu = $(menu).find('.instruction_links').append('<a href="#section_'+sectionName.index+'">'+sectionName.name+'</a>').html();
                });
                menuArray = menuArray.join('');
                var menu = '<aside class="instruction_wrapper"><label>Szybka nawigacja</label><div class="instruction_links">' + menuArray + '</div></aside>';
                return menu;
            }

            function check(obj) {
                return true;
            }

            function mustbe() {
                $('.maincont, .maincont_right').css('display', 'inline-block');
            }

            function saveData() {
                if ($('section').length) {
                    objects.tab = [];
                    $('.section_desc').each(function (index) {
                        var object = new Object();
                        object = [];
                        $(this).find('input,textarea').each(function (index) {
                            object.push($(this).val());
                        })
                        //console.log(object);
                        objects.tab.push(object);

                    })
                    if (objects.name == null) {
                        objects.name = prompt("Podaj nazwę instrukcji", "");
                        objects.index = getLastIndex(objects.name);
                    }
                    if (objects.name != null) {
                        objects.date = new Date().getTime();
                        localStorage.setItem(objects.index, JSON.stringify(objects));
                    }
                }
            }
            
             
            function getLastIndex(name){
                var historySize = 5; //rozmiar historii przy 5 będzie 6
                var i = 0;
                var item = [];
                while(true){
                    item.push(JSON.parse(localStorage.getItem(i)));
                    if (item[i] == null || item[i].name == name){return i}
                    if (i==historySize && item[i] != null){
                        var min = new Date().getTime();
                        var element;
                        item.forEach(item => {
                          if (item.date < min) {
                            min = item.date;
                            element = item;
                          }
                        });
                        return element.index;
                    }
                    i++;
                    
                }
            }
            
            function returnInstructions(){
                var i = 0;
                var item = [];
                while(true){
                    item.push(JSON.parse(localStorage.getItem(i)));
                    if (item[i] == null){return i}
                    $('[data-element="instructions"]').append('<a class="instruction" href="##" data-index='+item[i].index+'>'+item[i].name+'</a>');
                    i++;
                    
                }
            };
            returnInstructions();


            function loadData(json, index) {
                $('section').remove();
                global_cont=0;
                if(json != null){
                    console.log(this);
                }
                if(index != null){
                    json = JSON.parse(localStorage.getItem(index));
                }
                if (json == null) return false;
                i=0;
                
                objects.name = json.name;
                objects.index = json.index;
                
                json.tab.map(function(element){ 
                    $('.opis2').click();
                    $('[data-num="' + i++ + '"]').each(function() {
                        $(this).find('input,textarea').each(function(index) {
                            
                            $(this).val(element[index]);
                            if (index == 1) {
                                $(this).parents('.section_desc').find('.target').css({
                                    backgroundImage: "url(" + element[index].replace('\"', '') + ")"
                                })
                            }
                        })
                    })
                })
                
            }
            
//             for (var i = 0; i < 100; i++) {
//                    var item = JSON.parse(localStorage.getItem(i));
//                    if (item == null) return false;
//                    $('.opis2').click();
//                    $('[data-num="' + i + '"]').each(function() {
//                        $(this).find('input,textarea').each(function(index) {
//
//                            $(this).val(item.elements[index]);
//                            if (index == 1) {
//                                $(this).parents('.section_desc').find('.target').css({
//                                    backgroundImage: "url(" + item.elements[index].replace('\"', '') + ")"
//                                })
//                            }
//                        })
//                    })
//
//                }

            $(document).on('click', '.instruction', function(e) {
                $('.instruction').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
                loadData(null, $(this).data('index'));
                return false;
            })
           


            function createDir(name) {
                var fd = new FormData();
                fd.append('path', 'cms/grafiki_opis_produktow');
                fd.append('name', name);
                fd.append('type', '0');

                $.ajax({
                    url: '/panel/ajax/cms-files.php?action=addDir',
                    data: fd,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function(data) {
                        var json = $.parseJSON(data);
                        if (json.status == 'ok') {
                            $('.status').html(json.status);
                            $('.dirlink').show();
                            $('.adddir').css('opacity', 1);
                            ////  OK
                        }
                    }
                });
            }

        });

        (function($) {
            var defaults;
            $.event.fix = (function(originalFix) {
                return function(event) {
                    event = originalFix.apply(this, arguments);
                    if (event.type.indexOf("copy") === 0 || event.type.indexOf("paste") === 0) {
                        event.clipboardData = event.originalEvent.clipboardData;
                    }
                    return event;
                };
            })($.event.fix);
            defaults = {
                callback: $.noop,
                matchType: /image.*/
            };
            return ($.fn.pasteImageReader = function(options) {
                if (typeof options === "function") {
                    options = {
                        callback: options
                    };
                }
                options = $.extend({}, defaults, options);
                return this.each(function() {
                    var $this, element;
                    element = this;
                    $this = $(this);
                    return $this.bind("paste", function(event) {
                        var clipboardData, found;
                        found = false;
                        clipboardData = event.clipboardData;
                        return Array.prototype.forEach.call(clipboardData.types, function(type, i) {
                            var file, reader;
                            if (found) {
                                return;
                            }
                            if (
                                type.match(options.matchType) ||
                                clipboardData.items[i].type.match(options.matchType)
                            ) {
                                file = clipboardData.items[i].getAsFile();
                                reader = new FileReader();
                                reader.onload = function(evt) {
                                    return options.callback.call(element, {
                                        dataURL: evt.target.result,
                                        event: evt,
                                        file: file,
                                        name: file.name
                                    });
                                };
                                reader.readAsDataURL(file);

                                return (found = true);
                            }
                        });
                    });
                });
            });
        })(jQuery);

        var dataURL, filename;
        $("html").pasteImageReader(function(results) {
            filename = results.filename, dataURL = results.dataURL;
            console.log(dataURL);
            console.log('testowe');
            $data = $('.target.active').parents('.section_desc').find('.src1');
            $data.val(dataURL);
            $size.val(results.file.size);
            $type.val(results.file.type);
            var img = document.createElement("img");
            img.src = dataURL;
            var w = img.width;
            var h = img.height;
            $width.val(w);
            $height.val(h);
            return $(".active")
                .css({
                    backgroundImage: "url(" + dataURL + ")"
                })
                .data({
                    width: w,
                    height: h
                });
        });

        var $data, $size, $type, $width, $height;
        $(function() {
            
             
            $( ".contener" ).sortable({
              placeholder: "ui-state-highlight"
            });
            $( ".contener" ).disableSelection();
              
            
            $data = $('.target.active').parents('.section_desc');
            $size = $(".size");
            $type = $(".type");
            $width = $("#width");
            $height = $("#height");
            $(document).on("click", ".target", function() {
                var $this = $(this);
                var bi = $this.css("background-image");
                if (bi != "none") {
                    $data.text(bi.substr(4, bi.length - 6));
                }

                $(".active").removeClass("active");
                $this.addClass("active");

                $this.toggleClass("contain");

                $width.val($this.data("width"));
                $height.val($this.data("height"));
                if ($this.hasClass("contain")) {
                    $this.css({
                        width: $this.data("width"),
                        height: $this.data("height"),
                        "z-index": "10"
                    });
                } else {
                    $this.css({
                        width: "",
                        height: "",
                        "z-index": ""
                    });
                }
            });
            
        });

        function copy(text) {
            var t = document.getElementById("base64");
            t.select();
            try {
                var successful = document.execCommand("copy");
                var msg = successful ? "successfully" : "unsuccessfully";
                alert("Base64 data coppied " + msg + " to clipboard");
            } catch (err) {
                alert("Unable to copy text");
            }
        }
    </script>

    <!-- Bootstrap core JavaScript-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shCore.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushJScript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushCss.js"></script>

<!--    <script src="vendor/jquery/jquery.min.js"></script>-->
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