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
<link rel="stylesheet" href="css/generator.css">

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
                <h1>Generator instrukcji <span>[beta version] (zapisuje 5 ostatnich instrukcji)</span></h1>
                <div class="instructions" data-element="instructions"></div>
                <div class="content_wrapper">
                    <div class="maincont_left">
                        <small>01</small>
                        <label>Dodaj nową sekcję</label>
                        <button class="main_btn opis2">Dodaj sekcję</button>
                        <button class="main_btn save-instruction">Zapisz instrukcję</button>
                        <button class="btn gen main_btn" data-clipboard-action="copy"
                            data-clipboard-target="#copycat">Generuj instrukcję</button>
                        <textarea class="global_code" id="copycat"></textarea>
                    </div>
                    <div class="maincont">
                        <small>02</small>
                        <label>Sekcje (dane do uzupełnienia):</label>
                        <div class="contener"></div>

                    </div>
                    <div class="settings_wrapper">
                        <button class="open_settings"><i class="fa fa-fw fa-cog"></i></button>
                        <h3>Domyślne instrukcje</h3>
                        <div class="settings_wrapper_sub">
                            <h4>Strona głowna</h4>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck1" class="custom-control-input"><label for="customCheck1" class="custom-control-label">Logo</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck2" class="custom-control-input"><label for="customCheck2" class="custom-control-label">Favicon</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck3" class="custom-control-input"><label for="customCheck3" class="custom-control-label">Wyszukiwarka</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck4" class="custom-control-input"><label for="customCheck4" class="custom-control-label">Menu</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck5" class="custom-control-input"><label for="customCheck5" class="custom-control-label">Banner1</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck6" class="custom-control-input"><label for="customCheck6" class="custom-control-label">Button2</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck7" class="custom-control-input"><label for="customCheck7" class="custom-control-label">Hotspoty</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck8" class="custom-control-input"><label for="customCheck8" class="custom-control-label">Blog</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck9" class="custom-control-input"><label for="customCheck9" class="custom-control-label">Aktualności</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck10" class="custom-control-input"><label for="customCheck10" class="custom-control-label">Cms</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck11" class="custom-control-input"><label for="customCheck11" class="custom-control-label">Cms2</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck14" class="custom-control-input"><label for="customCheck14" class="custom-control-label">Banner3</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck12" class="custom-control-input"><label for="customCheck12" class="custom-control-label">Stopka menu4</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck13" class="custom-control-input"><label for="customCheck13" class="custom-control-label">Dane kontaktowe</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck15" class="custom-control-input"><label for="customCheck15" class="custom-control-label">Banner2</label>
                            </div>
                            <h4>Search</h4>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck16" class="custom-control-input"><label for="customCheck16" class="custom-control-label">Filtry</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck17" class="custom-control-input"><label for="customCheck17" class="custom-control-label">Buttony search</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck18" class="custom-control-input"><label for="customCheck18" class="custom-control-label">Konfiguracja widoku</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck19" class="custom-control-input"><label for="customCheck19" class="custom-control-label">Hotspot search</label>
                            </div>
                            <h4>Projector</h4>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck20" class="custom-control-input"><label for="customCheck20" class="custom-control-label">Opis</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck21" class="custom-control-input"><label for="customCheck21" class="custom-control-label">Parametry</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck22" class="custom-control-input"><label for="customCheck22" class="custom-control-label">Parametry wyróżnione</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck23" class="custom-control-input"><label for="customCheck23" class="custom-control-label">Opinie</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck24" class="custom-control-input"><label for="customCheck24" class="custom-control-label">Hotspoty projector</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck25" class="custom-control-input"><label for="customCheck25" class="custom-control-label">Bookmarklety</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck26" class="custom-control-input"><label for="customCheck26" class="custom-control-label">Blog podpięte produkty</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="" id="customCheck27" class="custom-control-input"><label for="customCheck27" class="custom-control-label">Dostępność towaru</label>
                            </div>
                        </div>
                        <div class="settings_button_wrapper">
                            <button class="select_all btn btn-danger" data-text="Odznacz wszystkie">Zaznacz wszystkie</button>
                            <button class="generate_default btn btn-danger">Generuj instrukcje</button>
                        </div>
                    </div>
                    <!-- <div class="maincont_right">
<div class="maincont_right_sub">
<small>03</small>
<label>Generuj instrukcje w postaci html</label>

<div class="status2 status_layout"></div>

<br>
</div>
</div> -->
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




<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-notify@3.1.3/bootstrap-notify.min.js"></script>
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
    <div class="product_btn">\
        <a class="btn" target="_blank" href="[link]">Konfiguruj</a>\
        <div class="button_disclaimer">Aby skonfigurować tę sekcję, wystarczy kliknąć w przycisk poniżej.</div>\
    </div>\
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
            global_cont++;
            mustbe();
        }
    });
    
    
    
    /////

    var css = '<style>body {margin: 0;font-size: 14px;font-family: Arial;font-weight: 400;color: #333;max-width: 1000px;margin: 0 auto;}aside {width: 20%;position: fixed;left: 0;top: 0;}aside.instruction_wrapper label {display: block;font-size: 16px;text-transform: uppercase;font-weight: bold;margin-bottom: 10px;}.instruction_links a:hover {padding-left: 10px;}.instruction_links a {color: #333;display: block;text-decoration: none;padding: 5px 0;transition: all .3s;}.product_desc {width: 80%;float: right;text-align: center;}.product_desc_item {margin-bottom: 50px;padding-bottom: 50px;border-bottom: 2px solid #333;}img {max-width: 100%;}.product_desc_item {margin: 0 0 50px;}.product_desc_item label {display: block;padding: 20px 0 0;font-size: 16px;text-transform: uppercase;}.product_desc_txt {margin: 15px 0 50px;font-style: italic;font-size: 15px;}.btn:hover {background: #fff;border: 1px solid #333333;color: #000;}.number {border-radius: 100%;color: #fff;background: #ff9432;width: 30px;height: 30px;line-height: 30px;display: inline-block;margin-right: 10px;}.btn {display: block;width: 300px;text-align: center;margin: 20px auto;color: #fff;background: #000;border: 1px solid #000;text-decoration: none;padding: 12px 0;font-size: 1.15em;border-radius: 22px;transition: all .2s;}.product_desc_item h3 {text-transform: uppercase;padding: 25px 0;display: block;font-weight: 600;font-size: 24px;} .product_desc_item .label{padding: 40px 0 0px;display: block;font-weight: 600;}[href=""]{display:none;}.instruction_wrapper{padding-left:15px; padding-right:15px;}.button_disclaimer{font-size: 11px;color: #717171;}.product_btn {display: flex;flex-direction: column-reverse;}[href=""] + div {display: none;}</style>';
    
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
        $('.global_code').val('<body>' + css + menu + '<div class="product_desc description_bottom"><div class="product_desc_items">' + $('.global_code').val() + '</div></div></body>');
        
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
    
    $(document).on('click', '.save-instruction', function(){
        saveData();
    })



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
        $('.contener .section_desc').last().find('.span4.target.contain').click();
    }
    
    function saveData() {
        if ($('section').length) {
            //console.log(objects);
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
                objects.createDate = new Date().toJSON().slice(0,10).replace(/-/g,'-');
            }
            if (objects.name != null) {
                objects.date = new Date().getTime();
                objects.modyficationDate = new Date().toJSON().slice(0,10).replace(/-/g,'-');
                localStorage.setItem(objects.index, JSON.stringify(objects));
            }
            $.notify({
                // options
                message: 'Zapisano instrukcję' 
            },{
                // settings
                type: 'success',
                delay: 3000,
                placement: {
                    from: "bottom",
                    align: "left"
                    
                },
            });
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
            $('[data-element="instructions"]').append('<div class="instruction_wrapper"><a class="instruction" href="##" data-index='+item[i].index+'>'+item[i].name+'</a><div><span class="create_date">Data utworzenia: '+item[i].createDate+'</span><span class="modyfication_date">Data modyfikacji: '+item[i].modyficationDate+'</span></div></div>');
            i++;
            
        }
    };
    returnInstructions();
    
    
    function loadData(json, index, noRemove) {
        if(!noRemove){
            $('section').remove();
            global_cont=0;
        }
        
        if(json != null){
            console.log(this);
        }
        if(index != null){
            json = JSON.parse(localStorage.getItem(index));
        }
        if (json == null) return false;
        if(!$('.section_desc[data-num]').length){
            i=0;
        }else{
            i = $('.section_desc[data-num]').last().data('num')+1;
        }
        
        
        
        objects.name = json.name;
        objects.index = json.index;
        objects.createDate = json.createDate;
        
        json.tab.map(function(element){ 
            $('.opis2').click();
            $('[data-num="' + i++ + '"]').each(function() {
                $(this).find('input,textarea').each(function(index) {
                    
                    $(this).val(element[index]);
                    if (index == 1 && element[index] != '') {
                        $(this).parents('.section_desc').find('.target').css({
                            backgroundImage: "url(" + element[index].replace('\"', '') + ")"
                        }).addClass('pasted');
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
                        $(document).on('click', '.generate_default', function(){
                            $('section').remove();
                            global_cont=0;
                            $('.settings_wrapper_sub input:checked').each(function(index){
                                var name = $(this).next().html();
                                //console.log(name);
                                $.ajax({
                                    url: 'instrukcje/'+name+'.txt',
                                    async: false,
                                    success: function(json){
                                        var json = $.parseJSON(json);
                                        json.name = null;
                                        loadData(json, null, true);
                                    },
                                    error: function(){
                                        $.notify({
                                        // options
                                        message: 'Nie załadowano elementu: '+name  
                                    },{
                                        // settings
                                        type: 'danger',
                                        delay: 3000,
                                        placement: {
                                            from: "bottom",
                                            align: "left"
                                            
                                        },
                                    });
                                    }
                                });
                            })
                        })

                        $(document).on('click', '.instruction', function(e) {
                            $('.instruction').removeClass('active');
                            $(this).addClass('active');
                            e.preventDefault();
                            loadData(null, $(this).data('index'));
                            return false;
                        })
                        
                        $(document).on('click', '.open_settings', function(){
                            $(this).parent().toggleClass('open');
                        })

                        $(document).on('click', '.select_all', function(){
                            var text = $(this).data('text');
                            var html = $(this).html();
                            $(this).html(text);
                            $(this).data('text', html);
                            if($(this).hasClass('active')){
                                $('.settings_wrapper_sub input').each(function(){
                                    $(this)[0].checked = false;
                                })
                            }else{
                                $('.settings_wrapper_sub input').each(function(){
                                    $(this)[0].checked = true;
                                })
                            }
                            $(this).toggleClass('active');
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
                                })
                                .addClass('pasted');
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