$(document).on('click', '.chldmodal-lbl-btn-remitm', function(event) {
    $(this).parents('.col-lg-12:first').css( 'background-color', '#FF6C6C' );
    $(this).parents('.col-lg-12:first').fadeOut("slow", function() {
        $(this).remove();
    });
    return false;
});

$(document).on('click', '.chldmodal-lbl-btn-edit-drp', function(event) {
    
    var elems=$(this);
    var remopt=$(this).attr('data-delitmops');
    if(remopt=="no"){
        $('select[name="img-lst"]').find('option[data-itm="'+$(this).attr('data-remitms')+'"]').remove();
        $(this).parents('.def_val-edit-drpp').css( 'background-color', '#FF6C6C' );
        $(this).parents('.def_val-edit-drpp').fadeOut("slow", function() {
            $(this).remove();
        });
        return false; 
    }else{
        // $.getJSON("lib/functions.php?action=remoCatopts",{val:remopt}, function(data){
        //     if(data==1){
        //         $('#def-list select[name="lst"]').find('option[data-itm="'+$(this).attr('data-remitms')+'"]').remove();
        //         elems.parents('.set-drpmar').css( 'background-color', '#FF6C6C' );
        //         elems.parents('.set-drpmar').fadeOut("slow", function() {
        //             elems.remove();
        //         });
        //         return false; 
        //     }
        // });
    }
    // $(this).parents('.col-lg-12:first').css( 'background-color', '#FF6C6C' );
    // $(this).parents('.col-lg-12:first').fadeOut("slow", function() {
    //     $(this).remove();
    // });
    // return false;
});

$(document).on('click', '#prop-chlddbmodel-btn', function(event) {
    $('#prop-paredbmodel').css('z-index', '-1');
});

$(document).on('click', '.prop-chlddbmodel-edit-close-listitm,.prop-chlddbmodel-close,.prop-chlddbmodel-edit-close,.prop-chlddbmodel-edit-close-icodrp,.prop-chlddbmodel-edit-close-icochk', function(event) {
    $('#prop-paredbmodel').css('z-index', '');
});

$(document).on('click', '.prop-chlddbmodel-btn-edit', function(event) {
    $('#prop-paredbmodel').css('z-index', '-1');
    var section_val=$(this).attr('data-btnedit');
    var drp_html=$(this).parents('.appen-div').find('.datadrp').html();
    var typn=$(this).attr('data-gettyp');
        
        if(typn=='imglist'){
            $('.app-lst-are-drp').empty();
            $('.chldmodal-lbl-input-edit-icodrp-select').empty();
            //var lmt=0;
            $opt="";
            $.getJSON("lib/functions.php?action=getCatDataEditlstitm",{val:section_val}, function(data){
                
                $.each(data.datas, function () {
                    $modal=$('#prop-chlddbmodel-edit-icodrp');
                    $modal.find('h4.modal-title').html('Editing Property : '+this['proplbl']);
                    $modal.find('.pcatmodal-lbl-input-edit-add-icodrp').val(this['proplbl']);
                    $(".drp-clddb-add-edit-icodrp option").each(function(index, el) {
                        $(this).removeAttr('selected');
                    });
                    $(".drp-clddb-add-edit-icodrp").val('list');
                    $modal.find('.prop-chlddbmodel-icodrp-hid').val(this['catproid']);
                    $modal.find('.prop-type-hid-icodrp').val(this['type']);
                    
                    if(this['spids']==this['defv']){
                        $modal.find('.chldmodal-lbl-input-edit-icodrp-select').append('<option data-itm="'+this['spids']+'" selected="selected" value="'+this['spids']+'">'+this['splbl']+'</option>');                    
                    }else{
                        $modal.find('.chldmodal-lbl-input-edit-icodrp-select').append('<option data-itm="'+this['spids']+'" value="'+this['spids']+'">'+this['splbl']+'</option>');                    
                    }
                    
                    var ls='<div class="col-lg-12 def_val-edit-drp"><div class="col-lg-5"><div class="send-full" style="padding: 0;"><input class="form-control input-lg chldmodal-lbl-input-edit-icodrp edit-txt-icodrpim" data-itm="'+this['spids']+'" type="text" required="" name=drp-txtbx['+this['spids']+'] value="'+this['splbl']+'"></div></div><div class="col-lg-7"><div class="col-lg-2"><button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Upload"><i class="fa fa-camera"></i><input type="file" class="ico-drpclsn" name="icodrp-file['+this['spids']+']"/></button></div><div class="col-lg-2"><a class="img-lnk-temp-drplst" data-img-temps="'+this['imgpath']+'" data-toggle="modal" data-target="#myModal-imgprev"><button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Preview"><i class="fa fa-image"></i></button></a></div><div class="col-lg-2"><button class="btn btn-primary del-drpimg" data-delidsdrp="'+this['spids']+'" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button></div><div class="col-lg-4" style="text-align: center;"><img class="img-responsive drpdwn-img" src="upload_images/icon_drp_images/'+this['imgpath']+'" /></div><div class="col-lg-2"><button class="btn btn-primary chldmodal-lbl-btn-edit-drp-del" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button></div></div></div>';
                        
                    $('.app-lst-are-drp').append($(ls));
                                  
                });
            });
            return false;

        }else if(typn=='imgbool'){
            
            $.getJSON("lib/functions.php?action=getCatDataEditProp",{val:section_val}, function(data){
                $modal=$('#prop-chlddbmodel-edit-icochk');
                $modal.find('h4.modal-title').html('Editing Property : '+data['label']);
                $modal.find('.pcatmodal-lbl-input-edit-add-icochk').val(data['label']);
                $modal.find(".drp-clddb-add-edit-icochk option").each(function(index, el) {
                    $(this).removeAttr('selected');
                });
                $modal.find(".drp-clddb-add-edit-icochk").val('imgbool');
                $modal.find('.prop-chlddbmodel-icochk-hid').val(data['id']);
                $modal.find('.prop-type-hid-icochk').val(data['type']);
                $modal.find('.grab-chkimg').attr('src', 'upload_images/icon_chk_box/'+data['defaultt']);
                $modal.find('.img-lnk-icochkEd').attr('data-img-temps', data['defaultt']);
            });

        }else{

            $.getJSON("lib/functions.php?action=getCatDataEditProp",{val:section_val}, function(data){
                $modal=$('#prop-chlddbmodel-edit');
                $modal.find('h4.modal-title').html('Editing Property : '+data['label']);
                $modal.find('.pcatmodal-lbl-input-edit-add').val(data['label']);
                $modal.find(".drp-clddb-add-edit option").each(function(index, el) {
                    $(this).removeAttr('selected');
                });
                //$modal.find(".drp-clddb-add-edit option[value="+data['type']+"]").attr( 'selected' , 'selected' );
                $modal.find('.prop-chlddbmodel-edit-hid').val(data['id']);
                $modal.find('.prop-type-hid').val(data['type']);

                if(typn=='img'){
                    $modal.find('.def_val-edit,#def-bool-ch').css('display', 'none');
                    $modal.find('#def-img-p').css('display', 'block');
                    $modal.find(".drp-clddb-add-edit").val('img');
                    $modal.find(".img-lnk-icochkImpreEd").removeClass('newImg').attr('data-img-temps',data['defaultt']);
                }else if(typn=='bool'){
                    $modal.find('.def_val-edit,#def-img-p').css('display', 'none');
                    $modal.find('#def-bool-ch').css('display', 'block');
                    $modal.find(".drp-clddb-add-edit").val('bool');
                    if(data['defaultt']==1){
                        $modal.find("input[name='bool-chk']").prop('checked', true);
                    }else if(data['defaultt']==0){
                        $modal.find("input[name='bool-chk']").prop('checked', false);
                    }
                }else if(typn=='imgbool'){
                    $modal.find('.send-full').removeClass('col-lg-10').addClass('col-lg-12');
                    $modal.find('.rem-full,.def_val-edit,#def-img-p,#def-bool-ch').css('display', 'none');
                    $modal.find(".drp-clddb-add-edit").val('imgbool');
                }else if(typn=='text'|| typn=='number'){
                    $modal.find('.send-full').removeClass('col-lg-10').addClass('col-lg-12');
                    $modal.find('.rem-full,#def-img-p,#def-bool-ch').css('display', 'none');
                    $modal.find('.def_val-edit').css('display', 'block');
                    $modal.find('.chldmodal-lbl-input-edit').val(data['defaultt']);
                    if(typn=='text'){
                        $modal.find(".drp-clddb-add-edit").val('text');
                    }else if(typn=='number'){
                        $modal.find(".drp-clddb-add-edit").val('number');
                    }            
                }
            });
             
        }
        
});

$(document).on('click', '.btn-listdat', function(event) {
    $('#prop-paredbmodel').css('z-index', '-1');
    var section_val=$(this).attr('data-btnedit');
    var drp_html=$(this).parents('.appen-div').find('.datadrp').html(); 

    $.getJSON("lib/functions.php?action=getCatDataEditProp",{val:section_val}, function(data){
        
        $('select[name="opt-edit-lst"]').empty();
        $('#prop-chlddbmodel-edit-listitm .app-lst-are').empty();

        $.each(data.datas, function () {
            $modal=$('#prop-chlddbmodel-edit-listitm');
            $modal.find('h4.modal-title').html('Editing Property : '+this['proplbl']);
            $modal.find('.pcatmodal-lbl-input-edit-add-listitm').val(this['proplbl']);
            $("#prop-chlddbmodel-edit-listitmid option").each(function(index, el) {
                $(this).removeAttr('selected');
            });
            $("#prop-chlddbmodel-edit-listitmid").val('list');
            $modal.find('.prop-chlddbmodel-listitm-hid').val(this['catproid']);
            $modal.find('.prop-type-hid-listitm').val(this['type']);

            if(this['defa']==this['spids']){
                $('select[name="opt-edit-lst"]').append('<option selected="selected" value="'+this['spids']+'" data-itm="'+this['spids']+'">'+this['splbl']+'</option>');
            }else{
                $('select[name="opt-edit-lst"]').append('<option value="'+this['spids']+'" data-itm="'+this['spids']+'">'+this['splbl']+'</option>');
            }
            //console.log(this['defa']);
            //if(lmt==0){
                //var ls='<div class="col-lg-12 def_val-edit set-drpmar"><div class="col-lg-4">Default Value</div><div class="col-lg-8"><div class="col-lg-11 send-full" style="padding: 0;"><input value="'+this['splbl']+'" class="form-control input-lg chldmodal-lbl-input-edit-listitm" name="list-data-exis['+this['spids']+']" type="text" required=""  style="width: 96% !important;"></div><div class="col-lg-1" style="padding: 0;"><button class="btn btn-primary chldmodal-lbl-btn-additm-listitm" data-toggle="tooltip" title="" type="button" style="float: right;" data-original-title="Add More"><i class="fa fa-plus"></i></button></div></div></div>';
                //$('#prop-chlddbmodel-edit-listitm .app-lst-are').empty().append($(ls));
                //lmt+=1;
            //}else{
                var ls='<div class="col-lg-12 def_val-edit set-drpmar"><div class="col-lg-4"></div><div class="col-lg-8"><div class="col-lg-11 send-full" style="padding: 0;"><input value="'+this['splbl']+'" class="form-control input-lg chldmodal-lbl-input-edit-listitm" name="list-data-exis['+this['spids']+']" data-itms="'+this['spids']+'" type="text" required=""  style="width: 96% !important;"></div><div class="col-lg-1" style="padding: 0;"><button class="btn btn-primary chldmodal-lbl-btn-remitm-listitm" data-toggle="tooltip" data-delitmop="'+this['spids']+'" title="" type="button" style="float: right;" data-original-title="Remove"><i class="fa fa-times-circle-o"></i></button></div></div></div>';
                //if(lmt>0){
                    $('#prop-chlddbmodel-edit-listitm .app-lst-are').append($(ls));
                //}else{
                    //$('#prop-chlddbmodel-edit-listitm .app-lst-are').empty().append($(ls));
               // }
            //}
        });
    });
    return false;
});

var elem=1;
$(document).on('click', '.chldmodal-lbl-btn-additm-icodrp', function(event) {
    var box_html = $('<div class="col-lg-12 def_val-edit-drp"><div class="col-lg-5"><div class="send-full" style="padding: 0;"><input class="form-control input-lg chldmodal-lbl-input-edit-icodrp edit-txt-icodrpim" type="text" required="" data-itm="'+elem+'" name=drp-txtbx-new['+elem+'] value=""></div></div><div class="col-lg-7"><div class="col-lg-2"><button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Upload"><i class="fa fa-camera"></i><input type="file" class="ico-drpclsn" name="icodrp-file-new['+elem+']"/></button></div><div class="col-lg-2"><button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Preview"><i class="fa fa-image"></i></button></div><div class="col-lg-2"><button class="btn btn-primary del-drpimg" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button></div><div class="col-lg-4" style="text-align: center;"><img class="img-responsive drpdwn-img" src="upload_images/icon_drp_images/a.png" /></div><div class="col-lg-2"><button class="btn btn-primary chldmodal-lbl-btn-edit-drp" data-delitmop="no" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button></div></div></div>'); 
                
    $(box_html).appendTo($('.app-lst-are-drp'));

    $('select[name="chldmodal-lbl-input-edit-icodrp-select"]').append('<option value="'+elem+'" data-itm="'+elem+'"></option>');
    $(box_html).find('input[type="text"]').focus();
    
    elem+=1;        
});

// var elemN=1;
// $(document).on('click', '.chldmodal-lbl-btn-additm-icodrpN', function(event) {
//     var box_htmlN = $('<div class="col-lg-12 def_val-edit-drp"><div class="col-lg-2"></div><div class="col-lg-5"><div class="send-full" style="padding: 0;"><input class="form-control input-lg chldmodal-lbl-input-edit-icodrp" type="text" required="" name=drp-txtbx-new['+elemN+'] value=""></div></div><div class="col-lg-5"><div class="col-lg-2"><button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Upload"><i class="fa fa-camera"></i><input type="file" name="icodrp-file-new['+elemN+']"/></button></div><div class="col-lg-2"><button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Preview"><i class="fa fa-image"></i></button></div><div class="col-lg-2"><button class="btn btn-primary del-drpimg" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button></div><div class="col-lg-4" style="text-align: center;"><img class="img-responsive drpdwn-img" src="upload_images/icon_drp_images/a.png" /></div><div class="col-lg-2"><button class="btn btn-primary chldmodal-lbl-btn-edit-drp" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button></div></div></div>'); 
                
//         $(box_htmlN).appendTo($('.app-lst-are-drpN'));

//         elemN+=1;        
// });

$(document).on('submit', 'form[name="frm-drpico-lst"]', function(event) {
    var lbl= $(this).find('.prop-chlddbmodel-icodrp-hid').val();
    var lbls= $(this).find('.pcatmodal-lbl-input-edit-add-icodrp').val();

    $.ajax({
        url:"lib/functions.php?action=saveIcoDropdn",
        method:"POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success:function(data)
        {
            $('.prop-paredbmodel #dvid'+lbl).find('.datalbl').html(lbls);
            $('.prop-chlddbmodel-edit-close-icodrp').trigger( "click" );
        }
    }); 
    return false;
});

$(document).on('submit', 'form[name="frm-chld-modprop-edit"]', function(event) {
    var lbl= $(this).find('.prop-chlddbmodel-icochk-hid').val();
    var lbls= $(this).find('.pcatmodal-lbl-input-edit-add-icochk').val();

    $.ajax({
        url:"lib/functions.php?action=saveIcochkbx",
        method:"POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success:function(data)
        {
            $('.prop-paredbmodel #dvid'+lbl).find('.datalbl').html(lbls);
            $('.prop-chlddbmodel-edit-close-icochk').trigger( "click" );
            $('.img-lnk-icochkEd').removeClass('newImg');
        }
    }); 
    return false;
});

$(document).on('click', '.chldmodal-lbl-btn-additm-listitmsave', function(event) {
    $idss=$(this).parents('#prop-chlddbmodel-edit-listitm').find('.prop-chlddbmodel-listitm-hid').val();
     $.ajax({
        url:"lib/functions.php?action=setListItems",
        method:"POST",
        data:$('.frm-listsumi').serialize(),
        success:function(data)
        {
            $('#dvid'+$idss).find('.datalbl').html($('.pcatmodal-lbl-input-edit-add-listitm').val());
            $('.prop-chlddbmodel-edit-close-listitm').trigger( "click" );
        }
    });

    return false;
});

// $(document).on('click', '.chldmodal-lbl-btn-additm-listitm', function(event) {
//     var box_html = $('<div class="col-lg-12 def_val-edit set-drpmar"><div class="col-lg-4"></div><div class="col-lg-8"><div class="col-lg-11 send-full" style="padding: 0;"><input class="form-control input-lg chldmodal-lbl-input-edit-listitm" name="list-data-itm[]" type="text" required=""  style="width: 96% !important;"></div><div class="col-lg-1" style="padding: 0;"><button class="btn btn-primary chldmodal-lbl-btn-remitm-listitm" data-delitmop="no" data-toggle="tooltip" title="" type="button" style="float: right;" data-original-title="Remove"><i class="fa fa-times-circle-o"></i></button></div></div></div>'); 
//     $('.set-drpmar:last').after(box_html);
// });

//Add Property List
var num=0;
$(document).on('click', '#def-list .btn-imglst-pls', function(event) {
    var box_html = $('<div class="col-lg-12 def_val-edit set-drpmar"><div class="col-lg-4"></div><div class="col-lg-8"><div class="col-lg-11 send-full" style="padding: 0;"><input class="form-control input-lg chldmodal-lbl-input-edit-listitm" data-itms="'+num+'" name="list-data-itm['+num+']" type="text" required=""  style="width: 96% !important;"></div><div class="col-lg-1" style="padding: 0;"><button class="btn btn-primary chldmodal-lbl-btn-remitm-listitm" data-remitms="'+num+'" data-delitmop="no" data-toggle="tooltip" title="" type="button" style="float: right;" data-original-title="Remove"><i class="fa fa-times-circle-o"></i></button></div></div></div>'); 
    if($('#def-list').next('.def_val-edit').length){
        $(box_html).insertAfter($('.def_val-edit:last-child'));
    }else{
        $('#def-list').after(box_html);
    }
    
    $('#def-list').find('select[name="lst"]').append('<option value="'+num+'" data-itm="'+num+'"></option>');
    $(box_html).find('input[type="text"]').focus();
    num+=1;
});

//Edit Property List
var nume=0;
$(document).on('click', '#edilst-par .btn-imglst-pls', function(event) {
    var box_html = $('<div class="col-lg-12 def_val-edit set-drpmar"><div class="col-lg-4"></div><div class="col-lg-8"><div class="col-lg-11 send-full" style="padding: 0;"><input class="form-control input-lg chldmodal-lbl-input-edit-listitm" data-itms="'+num+'" name="list-data-itm['+num+']" type="text" required=""  style="width: 96% !important;"></div><div class="col-lg-1" style="padding: 0;"><button class="btn btn-primary chldmodal-lbl-btn-remitm-listitm" data-remitms="'+num+'" data-delitmop="no" data-toggle="tooltip" title="" type="button" style="float: right;" data-original-title="Remove"><i class="fa fa-times-circle-o"></i></button></div></div></div>'); 
    if($('#edilst-par').next().children('.def_val-edit').length){
        $(box_html).insertBefore($('.def_val-edit:first-child'));
    }else{
        $('#edilst-par').next().children(box_html);
    }
    
    $('#edilst-par').find('select[name="opt-edit-lst"]').append('<option value="'+num+'" data-itm="'+num+'"></option>');
    $(box_html).find('input[type="text"]').focus();
    nume+=1;
});

//Add icon drp lst
var numLst=0;
$(document).on('click', '.btn-imglst-pls-drp', function(event) {
    var box_html_img = $('<div class="col-lg-12 rem-pad def_val-edit-drpp"><div class="col-lg-6"><div class="send-full" style="padding: 0;"><input class="form-control input-lg chldmodal-lbl-input-edit-icodrp" data-itm="'+numLst+'" type="text" required="" name=drp-txtbx-new['+numLst+'] value=""></div></div><div class="col-lg-6"><div class="col-lg-2"><button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" data-original-title="Upload"><i class="fa fa-camera"></i><input type="file" class="img-lst-aut ico-drpclsn" name="icodrp-file-new['+numLst+']"/></button></div><div class="col-lg-2" style="margin-left: 0.4vw;"><a class="img-lnk-temp-drplst" data-img-temps="a.png" data-toggle="modal" data-target="#myModal-imgprev"><button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" data-original-title="Preview"><i class="fa fa-image"></i></button></a></div><div class="col-lg-2" style="margin-left: 0.2vw;"><button class="btn btn-primary del-drpimg del-drpimg-new" data-toggle="tooltip" title="" type="button" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button></div><div class="col-lg-4" style="text-align: center; margin-left: -0.6vw;"><img class="img-responsive drpdwn-img" src="upload_images/icon_drp_images/a.png" /></div><div class="col-lg-2"><button class="btn btn-primary chldmodal-lbl-btn-edit-drp" data-delitmops="no" data-remitms="'+numLst+'" data-toggle="tooltip" title="" type="button" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button></div></div></div>'); 
    if($('.set-drplstsetImg .def_val-edit-drpp').length){
        $(box_html_img).insertBefore($('.def_val-edit-drpp:first-child'));
    }else{
        $(box_html_img).insertAfter($('.set-drplstsetImg'));
    }
    
    $('select[name="img-lst"]').append('<option value="'+numLst+'" data-itm="'+numLst+'"></option>');
    $(box_html_img).find('input[type="text"]').focus();
    numLst+=1;
});

$(document).on('keyup', '.chldmodal-lbl-input-edit-listitm', function(event) {
    $('#def-list select[name="lst"],select[name="opt-edit-lst"]').find('option[data-itm="'+$(this).attr('data-itms')+'"]').html($(this).val());
});

//Add image list itm
$(document).on('keyup', '.chldmodal-lbl-input-edit-icodrp', function(event) {
    $('select[name="img-lst"]').find('option[data-itm="'+$(this).attr('data-itm')+'"]').html($(this).val());
});

//Edit image list itm
$(document).on('keyup', '.edit-txt-icodrpim', function(event) {
    $('select[name="chldmodal-lbl-input-edit-icodrp-select"]').find('option[data-itm="'+$(this).attr('data-itm')+'"]').html($(this).val());
}); 
 
$(document).on('click', '.chldmodal-lbl-btn-remitm-listitm', function(event) {
    var elems=$(this);
    var remopt=$(this).attr('data-delitmop');
    if(remopt=="no"){
        $('#def-list select[name="lst"]').find('option[data-itm="'+$(this).attr('data-remitms')+'"]').remove();
        $(this).parents('.set-drpmar').css( 'background-color', '#FF6C6C' );
        $(this).parents('.set-drpmar').fadeOut("slow", function() {
            $(this).remove();
        });
        return false; 
    }else{
        $.getJSON("lib/functions.php?action=remoCatopts",{val:remopt}, function(data){
            if(data==1){
                $('#def-list select[name="lst"]').find('option[data-itm="'+$(this).attr('data-remitms')+'"]').remove();
                elems.parents('.set-drpmar').css( 'background-color', '#FF6C6C' );
                elems.parents('.set-drpmar').fadeOut("slow", function() {
                    elems.remove();
                });
                return false; 
            }
        });
    }
});

var readURLICO = function(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(input).parents('.def_val-edit-drp,.def_val-edit-drpp').find('.drpdwn-img').attr('src', e.target.result);
            $(input).parents('.def_val-edit-drp,.def_val-edit-drpp').find('.img-lnk-temp-drplst').addClass('tempimagePrev').attr('data-img-temps', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

var readURLCHK = function(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(input).parents('#def-imgbool').find('.grab-chkimg').attr('src', e.target.result);
            $(input).parents('#def-imgbool').find('.img-lnk-icochk').addClass('newImg').attr('data-img-temps', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

var readURLCHKED = function(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(input).parents('#prop-chlddbmodel-edit-icochk').find('.grab-chkimg').attr('src', e.target.result);
            $(input).parents('#prop-chlddbmodel-edit-icochk').find('.img-lnk-icochkEd').addClass('newImg').attr('data-img-temps', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

var readURLEDICHK = function(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(input).parents('#prop-chlddbmodel-edit-icochk').find('.grab-chkimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

var readURLImgMode = function(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.img-lnk-icochkImpre').addClass('newImg').attr('data-img-temps', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

var readURLImgModEd = function(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.img-lnk-icochkImpreEd').addClass('newImg').attr('data-img-temps', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
};

$(document).on('change', '.ico-drpclsn', function(event) {
    readURLICO(this);
});

$(document).on('change', '.chk-file-icochk', function(event) {
    readURLCHK(this);
});

$(document).on('change', '.sty-chk', function(event) {
    readURLCHKED(this);
});

$(document).on('change', '.chk-file', function(event) {
    readURLEDICHK(this);
});

$(document).on('change', '#file-opt', function(event) {
    readURLImgModEd(this);
});

$(document).on('change', '#file-optadd', function(event) {
    readURLImgMode(this);
});

$(document).ready(function() {

    $('.drp-clddb-add').change(function(event) {
        var itm_no=$(this).val();
        var lbl=$('.def_lbl_va');
        var div=$('.def_val');

        if(itm_no=='text'){
            lbl.css('display','block').html('');
            div.css('display','block');
        }else if(itm_no=='img' || itm_no=='imgbool'){
            lbl.css('display','none').html('');
            div.css('display','none');
        }else if(itm_no=='number'){
            lbl.css('display','block').html('');
            div.css('display','block');
        }else if(itm_no=='bool'){
            lbl.css('display','block').html('This will be first Checkbox Value');
            div.css('display','block');
        }else if(itm_no=='imglist'){
            lbl.css('display','block').html('This will be first Option Value');
            div.css('display','block');
        }else if(itm_no=='list'){
            lbl.css('display','block').html('This will be first Option Value');
            div.css('display','block');
        }

    });

});

