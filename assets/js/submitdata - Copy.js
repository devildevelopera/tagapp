$(document).ready(function() {
	var catagories = $('#tbl-dbcatcoll').DataTable( {
        "scrollY": "500px",
        paging: false,
        "ajax": "../tagapp/lib/functions.php?action=getCatagoryData&datas=-1",
        "columns": [
            { "data": "chk","width": "4%" },
            { "data": "label" },
            { "data": "Items" },
            { "data": "action", "width": "6%" }
        ]
    });

	var collections=$('#tbl-dbcoll').DataTable( {
        "scrollY": "500px",
        paging: false,
        "ajax": "../tagapp/lib/functions.php?action=getCollectionData",
        "columns": [
            { "data": "chk","width": "4%" },
            { "data": "label" },
            { "data": "collections" },
            { "data": "action", "width": "6%" }
        ]
    });	

	var tempLets=$('#tbl-tpmlet').DataTable({
        responsive: true,
        "scrollY": "35vh",
        paging: false,
        "ajax": "../tagapp/lib/functions.php?action=getTpmletData",
        "columns": [
            { "data": "label" },
            { "data": "size" },
            { "data": "action","width": "15%" }
        ]
    });

    var tempLets_db=$('#tbl-tpmlet-db').DataTable({
        responsive: true,        
        paging: false,
        "ajax": "../tagapp/lib/functions.php?action=getTpmletDataDb",
        "columns": [
            { "data": "label" },
            { "data": "description" },
            { "data": "size" },
            { "data": "action", "width": "5%"  }
        ]
    });

    var tempLets_db_pepr=$('#tbl-tpmlet-db-pepr').DataTable({
        responsive: true,        
        paging: false,
        "ajax": "../tagapp/lib/functions.php?action=getTpmletDataDbPaper",
        "columns": [
            { "data": "label" },
            { "data": "description" },
            { "data": "size" },
            { "data": "action", "width": "5%"  }
        ]
    });

    var prinlst = $('#tbl-prnlst').DataTable({        
		responsive: true,
        "scrollY": "20vh",
        paging: false,
        "ajax": "../tagapp/lib/functions.php?action=getTblprintData",		
        "columns": [
            { "data": "id", "width": "8%"},
            { "data": "label" },
            { "data": "default_template" },
            { "data": "NoOfCopy" },
            { "data": "action", "width": "8%" }
        ],
		rowCallback: function (row, data) {
			$(row).addClass( 'prev-print-rec' );	
			$(row).attr( 'data-prev-id', data.rowid );
		}
    });

    var table =$('#tbl-label').DataTable();
 //    var table =$('#tbl-label').DataTable({
	//             responsive: true,
	//             "scrollY": "35vh",
	//             paging: false,
	//             "columnDefs": [
	                
	//                 {
	//                     "targets": [ 5 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 6 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 7 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 8 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 9 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 10 ],
	//                     "visible": false
	//                 },
	//                 {
	//                     "targets": [ 11 ],
	//                     "visible": false
	//                 },
	//                 {
	//                     "targets": [ 12 ],
	//                     "visible": false
	//                 },
	//                 {
	//                     "targets": [ 13 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 14 ],
	//                     "visible": false
	//                 }
	//             ],
	//         "ajax": "../tagapp/lib/functions.php?action=getItmData",
	//         "columns": [
	//             { "data": "id","width": "2%" },
	//             { "data": "label" },
	//             { "data": "description" },
	//             { "data": "price" },
	//             { "data": "category" },
	//             { "data": "default_temp" },
	//             { "data": "scientific_name" },
	//             { "data": "care_level" },
	//             { "data": "size" },
	//             { "data": "original" },
	//             { "data": "tags" },
	//             { "data": "img_path" },
	//             { "data": "setup_price" },
	//             { "data": "flowers" },
	//             { "data": "light" },
	//             { "data": "action","width": "10%" }
	//         ]
	// });

 //    var table_db =$('#tbl-label-db').DataTable({
	//             responsive: true,
	//             paging: false,
	//             "columnDefs": [
	                
	//                 {
	//                     "targets": [ 5 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 6 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 7 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 8 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 9 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 10 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 11 ],
	//                     "visible": false
	//                 },
	//                 {
	//                     "targets": [ 12 ],
	//                     "visible": false
	//                 },
	//                 {
	//                     "targets": [ 13 ],
	//                     "visible": false
	//                 }
	//                 ,
	//                 {
	//                     "targets": [ 14 ],
	//                     "visible": false
	//                 }
	//             ],
	//         "ajax": "../tagapp/lib/functions.php?action=getItmData",
	//         "columns": [
	//             { "data": "id", "width": "2%" },
	//             { "data": "label" },
	//             { "data": "description" },
	//             { "data": "price" },
	//             { "data": "category" },
	//             { "data": "default_temp" },
	//             { "data": "scientific_name" },
	//             { "data": "care_level" },
	//             { "data": "size" },
	//             { "data": "original" },
	//             { "data": "tags" },
	//             { "data": "img_path" },
	//             { "data": "setup_price" },
	//             { "data": "flowers" },
	//             { "data": "light" },
	//             { "data": "action", "width": "5%" }
	//         ],
	// });
    	        
    // $( "input[class='toggle-vis']" ).change(function() {
    //     var column = table_db.column( $(this).attr('data-column') );
    //     column.visible( ! column.visible() );
    // });

    $( "input[class='toggle-vis-dash']" ).change(function() {
        var column = table.column( $(this).attr('data-column') );
        column.visible( ! column.visible() );
    });

    $('#catag-drp').on( 'change', function () {
    	var valsr=$('#catag-drp').val();
     	catagories.ajax.url("../tagapp/lib/functions.php?action=getCatagoryData&datas="+valsr).load();
    });

    $('.item-filter-cata').on( 'change', function () {
    	var valsr=$('.item-filter-cata').val();
     	table.ajax.url("../tagapp/lib/functions.php?action=getItmData&datas="+valsr).load();
    });
    
    var status_id="";

    $( '.tbl-dbcatcoll tbody, #tbl-prnlst tbody, #tbl-tpmlet tbody' ).on( 'click', 'tr', function () {
    	$(this).parent().find('tr').removeClass('selected');
    	$(this).parent().find('td.sorting_1').css('background-color','transparent');

        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }

        status_id=$(this).find('td:first .itm-hid-id-cata').val();
        $('.set-prop-data').attr('data-toggle','modal');
    });
	
    $(document).on('click', '.set-prop-data', function(event) {
    	if(status_id==""){
    		errorAlert('Plese Select a Catagory !');
    		return false;
    	}else{
    		$.getJSON("lib/functions.php?action=getCatDataSetProp",{val:status_id}, function(data){		
			  	$('#prop-paredbmodel').find('.modal-title').html('Properties of '+data['label']);
			});

    		$('.appe-mod-body .row .append-are-optssd').empty();
			$.getJSON("lib/functions.php?action=getCatDataPropOpts",{val:status_id}, function(data){
			  	$.each(data.datas, function () {
			        var ls='<div class="col-lg-12 appen-div" id="dvid'+this['id']+'" style="margin: 2px 0;"><input type="hidden" value="'+this['id']+'" class="hid-id-optss"/><div class="col-lg-4 datalbl">'+this['label']+'</div><div class="col-lg-6"><select disabled="disabled" id="frs'+this['id']+'" class="form-control datadrp" data-optss-se="'+this['id']+'"><option value="text">Text Input</option><option value="img">Image Upload</option><option value="number">Number Input</option><option value="bool">Check Box</option><option value="imgbool">Icon Check Box</option><option value="imglist">Icon Dropdown List</option><option value="list">Dropdown List</option></select></div><div class="col-lg-2"><a data-toggle="modal" id="editfa'+this['id']+'" class="prop-chlddbmodel-btn-edit" data-gettyp="'+this['type']+'" data-target="#prop-chlddbmodel-edit" data-btnedit="'+this['id']+'"><button class="btn btn-primary aqua-edit" data-toggle="tooltip" title="" type="button" style="margin-right: 5.7%;" data-original-title="Edit"><i class="fa fa-edit"></i></button></a><button class="btn btn-primary aqua-del" data-opty="'+this['type']+'" data-toggle="tooltip" title="" type="button" style="margin-right: 0.7%;" data-original-title="Delete" id="delfa'+this['id']+'" data-del-optss="'+this['id']+'"><i class="fa fa-times-circle-o"></i></button></div></div><script>$(document).ready(function(){$("#frs'+this['id']+'").val("'+this['type']+'");var chy="'+this['type']+'";if(chy==="imglist"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-icodrp");}else if(chy==="imgbool"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-icochk");}else if(chy==="list"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-listitm");$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").addClass("btn-listdat");}else{$(this).parent(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit");}});</script>';		        
			        
			        $(ls).appendTo('.appe-mod-body .row .append-are-optssd');			        	         
			    });
					      
			});
 			 
    		return false;
    	}
    });
  
var sendCatagoryProperty = function(){
	$.ajax({
        url:"lib/functions.php?action=add_catag_proptyp",
        method:"POST",
        data:$('.add-prop').serialize()+'&cat-id='+ status_id,
        success:function(data)
        {
    		setTimeout(function(){ $('.prop-chlddbmodel-close').trigger( "click" ); }, 100);
			
			if(data==1){
    			$.getJSON("lib/functions.php?action=getCatDataSetProp",{val:status_id}, function(data){		
		  			$('#prop-paredbmodel').find('.modal-title').html('Properties of '+data['label']);
				});

				$('.prop-paredbmodel .appe-mod-body .row .append-are-optssd').empty();
				$.getJSON("lib/functions.php?action=getCatDataPropOpts",{val:status_id}, function(data){
				  	$.each(data.datas, function () {
				        var ls='<div class="col-lg-12 appen-div" id="dvid'+this['id']+'" style="margin: 2px 0;"><input type="hidden" value="'+this['id']+'" class="hid-id-optss"/><div class="col-lg-4 datalbl">'+this['label']+'</div><div class="col-lg-6"><select disabled="disabled" id="frs'+this['id']+'" class="form-control datadrp" data-optss-se="'+this['id']+'"><option value="text">Text Input</option><option value="img">Image Upload</option><option value="number">Number Input</option><option value="bool">Check Box</option><option value="imgbool">Icon Check Box</option><option value="imglist">Icon Dropdown List</option><option value="list">Dropdown List</option></select></div><div class="col-lg-2"><a data-toggle="modal" data-gettyp="'+this['type']+'" class="prop-chlddbmodel-btn-edit" data-target="#prop-chlddbmodel-edit" data-btnedit="'+this['id']+'"><button class="btn btn-primary aqua-edit" data-toggle="tooltip" title="" type="button" style="margin-right: 5.7%;" data-original-title="Edit"><i class="fa fa-edit"></i></button></a><button class="btn btn-primary aqua-del" data-opty="'+this['type']+'" data-toggle="tooltip" title="" type="button" style="margin-right: 0.7%;" data-original-title="Delete" data-del-optss="'+this['id']+'"><i class="fa fa-times-circle-o"></i></button></div></div><script>$(document).ready(function(){$("#frs'+this['id']+'").val("'+this['type']+'");var chy="'+this['type']+'";if(chy==="imglist"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-icodrp");}else if(chy==="imgbool"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-icochk");}else if(chy==="list"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-listitm");$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").addClass("btn-listdat");}else{$(this).parent(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit");}});</script>';		      
				        $(ls).appendTo('.prop-paredbmodel .appe-mod-body .row .append-are-optssd');
				    });
					setTimeout(function(){ $('.prop-chlddbmodel-close').trigger( "click" ); }, 100);
			        $('form[name="add-prop"]')[0].reset();
					$('#prop-chlddbmodel .past-area').html('<div class="col-lg-12"><div class="col-lg-4" style="margin-bottom: 3px;">Default Value</div><div class="col-lg-8"><input class="form-control input-lg" type="text" value="Text" name="txt" /></div></div>');	      
				});
    			
    		}

        }
	});
}

$(document).on('submit', '#add-prop', function(event) {
	if($('input[name="lbl-txt"]').val()==""){
		errorAlert('Plese Enter Label Name !');
    	return false;
	}else if($('select[name="drp-opt"]').val()=="list"){
		if($('select[name="lst"] option').length<=0){
			errorAlert('Plese Add List Options !');
    		return false;
		}else{
			sendCatagoryProperty();
		}
	}else if($('select[name="drp-opt"]').val()=="text" ||  $('select[name="drp-opt"]').val()=="number"){
		if($('input[name="txt"]').val()==""){
			errorAlert('Plese Enter Default Value !');
    		return false;
		}else{
			sendCatagoryProperty();
		}
	}else if($('select[name="drp-opt"]').val()=="bool"){
		if($('input[name="txt"]').val()==""){
			errorAlert('Plese Enter Default Value !');
    		return false;
		}else{
			sendCatagoryProperty();
		}
	}else if($('select[name="drp-opt"]').val()=="imgbool" || $('select[name="drp-opt"]').val()=="imglist" || $('select[name="drp-opt"]').val()=="img"){
		if($('input[name="txt"]').val()==""){
			errorAlert('Plese Enter Default Value !');
    		return false;
		}else{
			var frmid=$("form[name='add-prop']")[0];
        	var formData=new FormData(frmid);
        	formData.append('cat-id',status_id);

			$.ajax({
		        url:"lib/functions.php?action=add_catag_proptyp",
		        method:"POST",
		        data:formData,
		        contentType: false,
    			processData: false,
    			cache: false,
		        success:function(data)
		        {
		    		setTimeout(function(){ $('.prop-chlddbmodel-close').trigger( "click" ); }, 100);
					
					if(data==1){
		    			$.getJSON("lib/functions.php?action=getCatDataSetProp",{val:status_id}, function(data){		
				  			$('#prop-paredbmodel').find('.modal-title').html('Properties of '+data['label']);
						});

						$('.prop-paredbmodel .appe-mod-body .row .append-are-optssd').empty();
						$.getJSON("lib/functions.php?action=getCatDataPropOpts",{val:status_id}, function(data){
						  	$.each(data.datas, function () {
						        var ls='<div class="col-lg-12 appen-div" id="dvid'+this['id']+'" style="margin: 2px 0;"><input type="hidden" value="'+this['id']+'" class="hid-id-optss"/><div class="col-lg-4 datalbl">'+this['label']+'</div><div class="col-lg-6"><select disabled="disabled" id="frs'+this['id']+'" class="form-control datadrp" data-optss-se="'+this['id']+'"><option value="text">Text Input</option><option value="img">Image Upload</option><option value="number">Number Input</option><option value="bool">Check Box</option><option value="imgbool">Icon Check Box</option><option value="imglist">Icon Dropdown List</option><option value="list">Dropdown List</option></select></div><div class="col-lg-2"><a data-toggle="modal" data-gettyp="'+this['type']+'" class="prop-chlddbmodel-btn-edit" data-target="#prop-chlddbmodel-edit" data-btnedit="'+this['id']+'"><button class="btn btn-primary aqua-edit" data-toggle="tooltip" title="" type="button" style="margin-right: 5.7%;" data-original-title="Edit"><i class="fa fa-edit"></i></button></a><button class="btn btn-primary aqua-del" data-opty="'+this['type']+'" data-toggle="tooltip" title="" type="button" style="margin-right: 0.7%;" data-original-title="Delete" data-del-optss="'+this['id']+'"><i class="fa fa-times-circle-o"></i></button></div></div><script>$(document).ready(function(){$("#frs'+this['id']+'").val("'+this['type']+'");var chy="'+this['type']+'";if(chy==="imglist"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-icodrp");}else if(chy==="imgbool"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-icochk");}else if(chy==="list"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-listitm");$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").addClass("btn-listdat");}else{$(this).parent(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit");}});</script>';		      
						        $(ls).appendTo('.prop-paredbmodel .appe-mod-body .row .append-are-optssd');
						    });
							//setTimeout(function(){ $('.prop-chlddbmodel-close').trigger( "click" ); }, 100);
					        $('form[name="add-prop"]')[0].reset();
					        $(document).find('.def_val-edit-drpp').each(function(index, el) {
					        	$(this).remove();
					        });
					        $(document).find('select[name="img-lst"]').empty();
							$('#prop-chlddbmodel .past-area').html('<div class="col-lg-12"><div class="col-lg-4" style="margin-bottom: 3px;">Default Value</div><div class="col-lg-8"><input class="form-control input-lg" type="text" value="Text" name="txt" /></div></div>');	      
						});
		    				
		    		}
		    				$('.img-lnk-icochkImpre,.img-lnk-icochkImpreEd').attr('data-img-temps', '');
		        }
			});
		}
	}	
    
    return false;
});    
   //  $('form[name="frm-add-new-prop"]').submit(function(event) {
   //  	var add = $('.pcatmodal-lbl-input-add').val();
   //  	var drp = $('.drp-clddb-add').val();
   //  	var chldmodal = $('.chldmodal-lbl-input').val();

   //  	if(add==''){
   //          errorAlert('Label is Required !');
   //          $('.pcatmodal-lbl-input-add').focus();
   //          return false;
   //      }else{
   //      	$.getJSON("lib/functions.php?action=add_catag_proptyp",{cat_id:status_id, add:add, drp:drp, chldmodal:chldmodal}, function(data){

   //      		if(data==1){
   //      			$.getJSON("lib/functions.php?action=getCatDataSetProp",{val:status_id}, function(data){		
			//   		$('#prop-paredbmodel').find('.modal-title').html('Properties of '+data['label']);
			// 		});

		 //    		$('.appe-mod-body .row .append-are-optssd').empty();
			// 		$.getJSON("lib/functions.php?action=getCatDataPropOpts",{val:status_id}, function(data){
			// 		  	$.each(data.datas, function () {
			// 		        var ls='<div class="col-lg-12 appen-div" id="dvid'+this['id']+'" style="margin: 2px 0;"><input type="hidden" value="'+this['id']+'" class="hid-id-optss"/><div class="col-lg-4 datalbl">'+this['label']+'</div><div class="col-lg-6"><select disabled="disabled" id="frs'+this['id']+'" class="form-control datadrp" data-optss-se="'+this['id']+'"><option value="text">Text Input</option><option value="img">Image Upload</option><option value="number">Number Input</option><option value="bool">Check Box</option><option value="imgbool">Icon Check Box</option><option value="imglist">Icon Dropdown List</option><option value="list">Dropdown List</option></select></div><div class="col-lg-2"><a data-toggle="modal" data-gettyp="'+this['type']+'" class="prop-chlddbmodel-btn-edit" data-target="#prop-chlddbmodel-edit" data-btnedit="'+this['id']+'"><button class="btn btn-primary aqua-edit" data-toggle="tooltip" title="" type="button" style="margin-right: 5.7%;" data-original-title="Edit"><i class="fa fa-edit"></i></button></a><button class="btn btn-primary aqua-del" data-opty="'+this['type']+'" data-toggle="tooltip" title="" type="button" style="margin-right: 0.7%;" data-original-title="Delete" data-del-optss="'+this['id']+'"><i class="fa fa-times-circle-o"></i></button></div></div><script>$(document).ready(function(){$("#frs'+this['id']+'").val("'+this['type']+'");var chy="'+this['type']+'";if(chy==="imglist"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-icodrp");}else if(chy==="imgbool"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-icochk");}else if(chy==="list"){$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit-listitm");$("#frs'+this['id']+'").parents(".appen-div").find(".prop-chlddbmodel-btn-edit").addClass("btn-listdat");}else{$(this).parent(".appen-div").find(".prop-chlddbmodel-btn-edit").attr("data-target", "#prop-chlddbmodel-edit");}});</script>';		      
					        
			// 		        $(ls).appendTo('.appe-mod-body .row .append-are-optssd');
			// 		        setTimeout(function(){ $('.prop-chlddbmodel-close').trigger( "click" ); }, 100);
			// 		        $('form[name="frm-add-new-prop"]')[0].reset();
			// 		    });
							      
			// 		});
   //      		}
			// });
   //      }

   //  	return false;
   //  }); 

    $(document).on('click', '.aqua-del', function(event) {
    	var elem=$(this);
    	var vals= $(this).attr('data-del-optss');
    	var opitm= $(this).attr('data-opty');
    	$.getJSON("lib/functions.php?action=delCatDataPropOpts",{val:vals,op:opitm}, function(data){
    		if(data==1){
    			elem.parents('.appen-div').css( 'background-color', '#FF6C6C' );
			    elem.parents('.appen-div').fadeOut("slow", function() {
			        elem.remove();
			    });
    		}
    	});
    });
 
    $('form[name="frm-add-catag"]').submit(function(event) {
    	var catmodal_lbl_input = $('[name="catmodal-lbl-input"]').val();
    	var catag_drp=$('.catag-drp').val();
    	
    	if(catmodal_lbl_input==''){
            errorAlert('Label is Required !');
            $('input[name="catmodal_lbl_input"]').focus();
            return false;
        }else if(catag_drp=="-1"){
        	errorAlert('"Select Current Collection" !');
        	$('.catag-drp').focus();
        	return false;
        }else{
        	$.getJSON("lib/functions.php?action=add_catag_data",{val:catmodal_lbl_input,opt:catag_drp}, function(data){		
			  	catagories.ajax.reload( null, false );
			  	collections.ajax.reload( null, false );
			  	$('#catdbmodel').modal('hide');
			  	// $('.item-filter-cata').find('option').remove().end().append(data);
			});
        }
   		return false;
    });

    $('form[name="frm-edit-catag"]').submit(function(event) {
    	var catmodal_lbl_input = $('[name="catEdmodal-lbl-input"]').val();
    	var catag_drp=$('.catag-drp').val();
    	var hid_val_edit_lblcat=$('[name="hid_val_edit_lblcat"]').val();
    	
    	if(catmodal_lbl_input==''){
            errorAlert('Label is Required !');
            $('input[name="catEdmodal-lbl-input"]').focus();
            return false;
        }else if(catag_drp=="-1"){
        	errorAlert('"Select Current Collection" !');
        	$('.catag-drp').focus();
        	return false;
        }else{
        	$.getJSON("lib/functions.php?action=edit_catag_data",{val:catmodal_lbl_input,opt:catag_drp,id: hid_val_edit_lblcat}, function(data){		
			  	catagories.ajax.reload( null, false );
			  	collections.ajax.reload( null, false );
			  	$('#dbcatEditmodel').modal('hide');
			  	// $('.item-filter-cata').find('option').remove().end().append(data);
			});
        }
   		return false;
    });

    $(document).on('click', '.cat-get-dat', function(){
    	var addDataId = $(this).attr('data-cat-edi');
		$.getJSON("lib/functions.php?action=feedCatagEdit_pepr",{val:addDataId}, function(data){
			$('#dbcatEditmodel').find('.modal-title').html("Catagory, Edit Label :"+data['label']);
			$('#dbcatEditmodel').find('input[name="hid_val_edit_lblcat"]').val(data['id']);
			$('#dbcatEditmodel').find('input[name="catEdmodal-lbl-input"]').val(data['label']);
			$('.catag-drp').val(data['collection_id']); 
		});
    	return false;
    });

    $(document).on('click', '.delete-cat-data', function(){
    	var addDataId = $(this).attr('data-cat-del');
    	$('[name="delete_catag_hidid"]').val(addDataId);
    	return false;
    });

    $('form[name="frm-del-catag"]').submit(function(event) {
    	var addDataId = $('[name="delete_catag_hidid"]').val();
		$.getJSON("lib/functions.php?action=deleCatagData",{val:addDataId}, function(data){
			catagories.ajax.reload( null, false );
			collections.ajax.reload( null, false );
			// $('.item-filter-cata').find('option').remove().end().append(data);
			$('#dbcatdeletemodel').modal('hide');
		});
    	return false;
    });

    // $('#edit_item_dash').submit(function(event) {
    //     edit_itm_lbl = $('[name="edit_itm_lbl"]').val();
    //     edit_itm_desc = $('[name="edit_itm_desc"]').val();
    //     edit_itm_pric = $('[name="edit_itm_pric"]').val();
    //     edit_itm_tags = $('[name="edit_itm_tags"]').val();
    //     edit_itm_deftemp = $('[name="edit_itm_deftemp"]').val();
    //     edit_itm_scinm = $('[name="edit_itm_scinm"]').val();
    //     edit_itm_carelvl = $('[name="edit_itm_carelvl"]').val();
    //     edit_itm_siz = $('[name="edit_itm_siz"]').val();
    //     edit_itm_orig = $('[name="edit_itm_orig"]').val();
    //     edit_itm_stppri = $('[name="edit_itm_stppri"]').val();
    //     edit_itm_flw = $('[name="edit_itm_flw"]').val();
    //     edit_itm_lght = $('[name="edit_itm_lght"]').val();

    //     if(edit_itm_lbl==''){
    //         errorAlert('Label is Required !');
    //         $('input[name="edit_itm_lbl"]').focus();
    //         return false;
    //     }
    //     else if(edit_itm_desc==''){
    //         errorAlert('Description is Required !');
    //         $('input[name="edit_itm_desc"]').focus();
    //         return false;
    //     }
    //     else if(edit_itm_pric==''){
    //         errorAlert('Price is Required !');
    //         $('input[name="edit_itm_pric"]').focus();
    //         return false;
    //     }
    //     else if(edit_itm_tags==''){
    //         errorAlert('Tag is Required !');
    //         $('input[name="edit_itm_tags"]').focus();
    //         return false;
    //     }
    //     else if(edit_itm_deftemp==0){
    //         errorAlert('Default Template is Required !');
    //         return false;
    //     }
    //     else if(edit_itm_scinm==''){
    //         errorAlert('Scientific Name is Required !');
    //         $('input[name="edit_itm_scinm"]').focus();
    //         return false;
    //     }
    //     else if(edit_itm_carelvl==0){
    //         errorAlert('Care Level is Required !');
    //         return false;
    //     }
    //     else if(edit_itm_siz==0){
    //         errorAlert('Size is Required !');
    //         return false;
    //     }
    //     else if(edit_itm_orig==''){
    //         errorAlert('Origin is Required !');
    //         $('input[name="edit_itm_orig"]').focus();
    //         return false;
    //     }
    //     else if(edit_itm_stppri==''){
    //         errorAlert('Setup Price is Required !');
    //         $('input[name="edit_itm_stppri"]').focus();
    //         return false;
    //     }
    //     else if(edit_itm_flw==0){
    //         errorAlert('Flowers are Required !');
    //         return false;
    //     }
    //     else if(edit_itm_lght==0){
    //         errorAlert('Light is Required !');
    //         return false;
    //     }
    //     else{
    //          $.ajax({
    //             url: "lib/functions.php?action=edit_item_dash", // Url to which the request is send
    //             type: "POST",             // Type of request to be send, called as method
    //             data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
    //             contentType: false,       // The content type used when sending data to the server.
    //             cache: false,             // To unable request pages to be cached
    //             processData:false,        // To send DOMDocument or non processed data file it is set to false
    //                 success: function(data)   // A function to be called if request succeeds
    //                 {
    //                 	table.ajax.reload( null, false );
    //                 	table_db.ajax.reload( null, false );
    //                 	$('#itemsdbmodel_edit').modal('hide');
    //                 }
    //         });
    //     return false;
    //     }  
    // });

	$('#add_item_dash').submit(function(event) {
		//console.log(FormData(this));
		$.ajax({
				url: "lib/functions.php?action=add_item_dash", // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
						table.ajax.url("../tagapp/lib/functions.php?action=getItmData").load();
						//table.ajax.reload( null, false );
						//table_db.ajax.reload( null, false );
                    	$('#itemsdbmodel-index').modal('hide');
                    	$('.past-addItm-dash').empty();
                    	$('#add_item_dash')[0].reset();
					}
			});
		return false;
  //       add_itm_lbl = $('[name="add_itm_lbl"]').val();
  //   	add_itm_desc = $('[name="add_itm_desc"]').val();
  //   	add_itm_pric = $('[name="add_itm_pric"]').val();
  //   	add_itm_tags = $('[name="add_itm_tags"]').val();
  //   	add_itm_deftemp = $('[name="add_itm_deftemp"]').val();
  //   	add_itm_scinm = $('[name="add_itm_scinm"]').val();
  //   	add_itm_carelvl = $('[name="add_itm_carelvl"]').val();
  //   	add_itm_siz = $('[name="add_itm_siz"]').val();
  //   	add_itm_orig = $('[name="add_itm_orig"]').val();
  //   	add_itm_stppri = $('[name="add_itm_stppri"]').val();
  //   	add_itm_flw = $('[name="add_itm_flw"]').val();
  //   	add_itm_lght = $('[name="add_itm_lght"]').val();

  //   	len=$("#add_itm_img")[0].files.length;

  //   	if(add_itm_lbl==''){
		// 	errorAlert('Label is Required !');
		// 	$('input[name="add_itm_lbl"]').focus();
		// 	return false;
		// }
		// else if(add_itm_desc==''){
		// 	errorAlert('Description is Required !');
		// 	$('input[name="add_itm_desc"]').focus();
		// 	return false;
		// }
		// else if(add_itm_pric==''){
		// 	errorAlert('Price is Required !');
		// 	$('input[name="add_itm_pric"]').focus();
		// 	return false;
		// }
		// else if(add_itm_tags==''){
		// 	errorAlert('Tag is Required !');
		// 	$('input[name="add_itm_tags"]').focus();
		// 	return false;
		// }
		// else if(len==0){
		// 	errorAlert('Image is Required !');
		// 	return false;
		// }
		// else if(add_itm_deftemp==0){
		// 	errorAlert('Default Template is Required !');
		// 	return false;
		// }
		// else if(add_itm_scinm==''){
		// 	errorAlert('Scientific Name is Required !');
		// 	$('input[name="add_itm_scinm"]').focus();
		// 	return false;
		// }
		// else if(add_itm_carelvl==0){
		// 	errorAlert('Care Level is Required !');
		// 	return false;
		// }
		// else if(add_itm_siz==0){
		// 	errorAlert('Size is Required !');
		// 	return false;
		// }
		// else if(add_itm_orig==''){
		// 	errorAlert('Origin is Required !');
		// 	$('input[name="add_itm_orig"]').focus();
		// 	return false;
		// }
		// else if(add_itm_stppri==''){
		// 	errorAlert('Setup Price is Required !');
		// 	$('input[name="add_itm_stppri"]').focus();
		// 	return false;
		// }
		// else if(add_itm_flw==0){
		// 	errorAlert('Flowers are Required !');
		// 	return false;
		// }
		// else if(add_itm_lght==0){
		// 	errorAlert('Light is Required !');
		// 	return false;
		// }
		// else{
		// 	 $.ajax({
		// 		url: "lib/functions.php?action=add_item_dash", // Url to which the request is send
		// 		type: "POST",             // Type of request to be send, called as method
		// 		data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
		// 		contentType: false,       // The content type used when sending data to the server.
		// 		cache: false,             // To unable request pages to be cached
		// 		processData:false,        // To send DOMDocument or non processed data file it is set to false
		// 			success: function(data)   // A function to be called if request succeeds
		// 			{
		// 				table.ajax.reload( null, false );
		// 				table_db.ajax.reload( null, false );
  //                   	$('#itemsdbmodel-index').modal('hide');
  //                   	$('#add_item_dash')[0].reset();
		// 			}
		// 	});
  //       return false;
		// }  
    });


    $('#multiItemprint').click(function(event) {
 		var selectedCheckBoxArray = new Array();
    	var n = $("input[name='itemcheck']:checked").length;

    	if (n > 0){
	      $("input[name='itemcheck']:checked").each(function(){
	      	if($(this).val()!='on')
	      	{
		      selectedCheckBoxArray.push($(this).val());
	      	}
		   });
		

		feild=JSON.stringify(selectedCheckBoxArray);

		$.post('lib/functions.php?action=multiItemprint',{feild:feild},function(data,txtStatus,xhr){
			if(data==1){
				prinlst.ajax.reload( null, false );
				table.ajax.reload( null, false );
			}
				
		});
		return false;
		}
		else{
			errorAlert('Please select Items !');
		}
	
	});

	$('#multiPrintdelete').click(function(event) {
    	var selectedCheckBoxArray = new Array();
    	var n = $("input[name='printcheck']:checked").length;

    	if (n > 0){
	      $("input[name='printcheck']:checked").each(function(){
	      	if($(this).val()!='on')
	      	{
		      selectedCheckBoxArray.push($(this).val());
	      	}
		   });
		

		feild=JSON.stringify(selectedCheckBoxArray);

		$.post('lib/functions.php?action=multiPrintdelete',{feild:feild},function(data,txtStatus,xhr){
			if(data==1){
				prinlst.ajax.reload( null, false );
				table.ajax.reload( null, false );
			}
				
		});
		return false;
		}
		else{
			errorAlert('Please select Items !');
		}
	});

	$('.itm-del-sele').click(function(event) {
    	var selectedCheckBoxArray = new Array();
    	var n = $("input[name='itemcheck']:checked").length;

    	if (n > 0){
	      $("input[name='itemcheck']:checked").each(function(){
	      	if($(this).val()!='on')
	      	{
		      selectedCheckBoxArray.push($(this).val());
	      	}
		   });
		

		feild=JSON.stringify(selectedCheckBoxArray);

		$.post('lib/functions.php?action=multiDbitmdelete',{feild:feild},function(data,txtStatus,xhr){
			if(data==1){
				//table_db.ajax.reload( null, false );
				table.ajax.reload( null, false );
			}
				
		});
		return false;
		}
		else{
			errorAlert('Please select Items !');
		}
	});

	//new codes
	$('#tmpaddFrom').submit(function(event) {
        tlabel = $('[name="tlabel"]').val();
    	tdescription = $('[name="tdescription"]').val();
    	twidth = $('[name="twidth"]').val();
    	theiht = $('[name="theiht"]').val();
    	osize = $('[name="osize"]').val();
    

    	len=$("#tmpImage")[0].files.length;

    	if(tlabel==''){
			errorAlert('Label is Required !');
			$('input[name="tlabel"]').focus();
			return false;
		}
		else if(tdescription==''){
			errorAlert('Description is Required !');
			$('input[name="tdescription"]').focus();
			return false;
		}
		else if(twidth==''){
			errorAlert('Width is Required !');
			$('input[name="twidth"]').focus();
			return false;
		}
		else if(theiht==''){
			errorAlert('Height is Required !');
			$('input[name="theiht"]').focus();
			return false;
		}
		else if(osize==''){
			errorAlert('Outline Size is Required !');
			$('input[name="osize"]').focus();
			return false;
		}
		else if(len==0){
			errorAlert('Background Image is Required !');
			return false;
		}
		else{
			 $.ajax({
				url: "lib/functions.php?action=tmpaddFrom", // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
						tempLets.ajax.reload( null, false );
						tempLets_db.ajax.reload( null, false );
						$('#dbEditmodel-template').modal('hide');
					}
			});
        return false;
		}  
    });

    $('#tmpaddFrom-pepr').submit(function(event) {
        tlabel = $('[name="tlabel-pepr"]').val();
    	tdescription = $('[name="tdescription-pepr"]').val();
    	twidth = $('[name="twidth-pepr"]').val();
    	theiht = $('[name="theiht-pepr"]').val();
    	osize = $('[name="osize-pepr"]').val();
    

    	len=$("#tmpImage-pepr")[0].files.length;

    	if(tlabel==''){
			errorAlert('Label is Required !');
			$('input[name="tlabel-pepr"]').focus();
			return false;
		}
		else if(tdescription==''){
			errorAlert('Description is Required !');
			$('input[name="tdescription-pepr"]').focus();
			return false;
		}
		else if(twidth==''){
			errorAlert('Width is Required !');
			$('input[name="twidth-pepr"]').focus();
			return false;
		}
		else if(theiht==''){
			errorAlert('Height is Required !');
			$('input[name="theiht-pepr"]').focus();
			return false;
		}
		else if(osize==''){
			errorAlert('Outline Size is Required !');
			$('input[name="osize-pepr"]').focus();
			return false;
		}
		else if(len==0){
			errorAlert('Background Image is Required !');
			return false;
		}
		else{
			 $.ajax({
				url: "lib/functions.php?action=tmpaddFrom_pepr", // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{						
						tempLets_db_pepr.ajax.reload( null, false );
						$('#dbEditmodel-template-pepr').modal('hide');
					}
			});
        return false;
		}  
    });

    $.getJSON("lib/functions.php?action=getAllColpt",{}, function(data){		
	  	$('.catag-drp').find('option').remove().end().append(data);
	  	$('.item-filter-curcol').find('option').remove().end().append(data);
	  	$('[name="add_itm[default][colldrp]"]').find('option').remove().end().append(data);
	});

	$.post("lib/functions.php?action=getTeplateSelectbox", function(data){
		$('.add_itm_deftemp').find('option').remove().end().append(data);			
	});

    $(document).on('change', '[name="add_itm[default][colldrp]"]', function(event) {
    	var vals=$(this).val();
    	$.getJSON("lib/functions.php?action=getadditmCats",{val:vals}, function(data){
	  		$('[name="add_itm[default][catagdrp]"]').find('option').remove().end().append(data);
		});
		return false;
    });

//comm
    $(document).on('change', '[name="add_itm[default][catagdrp]"]', function(event) {
    	var valss=$(this).val();
    	$('.past-addItm-dash').empty();
    	$.getJSON("lib/functions.php?action=getAddItmProperties",{mode:'add',vall:valss}, function(data){
	  		var ls='';
	  		$.each(data.datal, function () {		       
		       if(this['type']=='text'){
		       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><input type="text" name="add_itm[past]['+this["id"]+']" class="form-control input-lg" value="'+this["defaultt"]+'"/></div></div>';
		       }else if(this['type']=='img'){
		       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><ul class="ul-imgModED"><li><button class="btn btn-primary" data-toggle="tooltip" title="" type="button" style="float: left;" data-original-title=""><i class="fa fa-camera"></i><input type="file" name="add_itm_pastimg['+this["id"]+']" id="file-optAdditm"></button></li><li><a class="img-lnk-additm" data-img-additm="'+this["defaultt"]+'" data-toggle="modal" data-target="#myModal-tem"><button class="btn btn-primary upldimg-additm" data-toggle="tooltip" title="" type="button" data-original-title="Preview"><i class="fa fa-image"></i></button></a></li></ul></div></div>';
		       }else if(this['type']=='number'){
		       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><input type="number" name="add_itm[past]['+this["id"]+']" class="form-control input-lg" value="'+this["defaultt"]+'"/></div></div>';
		       }else if(this['type']=='bool'){
		       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><div class="checkbox checkbox-primary"><input type="hidden" name="add_itm_pastchkhid['+this["id"]+']"/><input id="prop-chkid'+this["id"]+'" type="checkbox" name="add_itm_pastchk['+this["id"]+']" class="bool-chkadditm'+this["defaultt"]+'" value="'+this["defaultt"]+'"><label for="prop-chkid'+this["id"]+'"></label></div></div></div><script>$(document).ready(function(){var vals=$(".bool-chkadditm'+this["defaultt"]+'").val();if(vals==1){$(".bool-chkadditm'+this["defaultt"]+'").prop("checked", "checked")}; $(".bool-chkadditm'+this["defaultt"]+'").change(function(){if($(this).prop("checked")){$(this).val("1");}else{$(this).val("0");}}); });</script>';
		       }else if(this['type']=='imgbool'){
		       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><ul class="def-bouladditm"><li><button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Save"><i class="fa fa-camera"></i><input type="file" name="add_itm_icochk['+this["id"]+']" class="chk-fileadditm sty-chk"></button></li><li><a class="img-lnk-icoadditm" data-img-temps="'+this["defaultt"]+'" data-toggle="modal" data-target="#myModal-tem"><button class="btn btn-primary chldmodal-lbl-btn-additm" data-toggle="tooltip" title="" type="button" data-original-title="Preview"><i class="fa fa-image"></i></button></a></li><li><button class="btn btn-primary del-icoadditm" data-toggle="tooltip" title="" type="button" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button></li><li><div class="pretty p-image p-plain"><input type="checkbox" class="chkcla'+this["id"]+'" name="add_itm_icochkbx['+this["id"]+']" value="1"><div class="state"><img class="image grab-chkimg" src="upload_images/icon_chk_box/'+this["defaultt"]+'"><label></label></div></div></li></ul><input type="hidden" name="add_itm_icochkbxhid['+this["id"]+']" value="1"/></div></div>';
		       }else if(this['type']=='list'){
		       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><select name="add_itm_lispa['+this["id"]+']" class="form-control input-lg">'+this["defaultt"]+'</select></div></div>';
		       }else if(this['type']=='imglist'){
		       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><select name="add_itm_icolist['+this["id"]+']" class="form-control input-lg additm-selectimg" id="additm-selectimg'+this["id"]+'">'+this["defaultt"]+'</select></div><script>$(document).ready(function(){$("#additm-selectimg'+this["id"]+'").msDropdown({visibleRows:4});});</script></div>';
		       }		       
		       
		    });
		    $(ls).appendTo('.past-addItm-dash');		    
		});
		return false;  
    });

    $(document).on('change', '.item-filter-curcol', function(event) {
    	var vals=$(this).val();
    	$.getJSON("lib/functions.php?action=getadditmCats",{val:vals}, function(data){
	  		$('.item-filter-cata').find('option').remove().end().append(data);
		});
    });
	// $.getJSON("lib/functions.php?action=getAllCats",{}, function(data){		
	//   	$('.item-filter-cata').find('option').remove().end().append(data);
	// });	

    //add collection label
	$('form[name="frm-add-col-lbl"]').submit(function(event) {
        var add_col_lblnm = $('input[name="add-col-lblnm"]').val();
		if(add_col_lblnm==''){
			errorAlert('Label is Required !');
			$('input[name="add-col-lblnm"]"]').focus();
			return false;				
		}else{			 
			$.getJSON("lib/functions.php?action=add_col_lbl",{val:add_col_lblnm}, function(data){
				collections.ajax.reload( null, false );
			  	$('#dbmodel').modal('hide');	
			  	$('.catag-drp').find('option').remove().end().append(data);
			  	$('.item-filter-curcol').find('option').remove().end().append(data);
			});	

		return false;
			
		}
		return false;  
    });

    $('form[class="frm-edit-coll-lbl"]').submit(function(event) {
        var add_col_lblnm = $('input[name="modal-coll-input-edit"]').val();
		if(add_col_lblnm==''){
			errorAlert('Label is Required !');
			$('input[name="modal-coll-input-edit"]"]').focus();
			return false;				
		}else{
			 $.ajax({
			 	url: "lib/functions.php?action=coll_input_edit", // Url to which the request is send
			 	type: "POST",             // Type of request to be send, called as method
			 	data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			 	contentType: false,       // The content type used when sending data to the server.
			 	cache: false,             // To unable request pages to be cached
			 	processData:false,        // To send DOMDocument or non processed data file it is set to false
			 		success: function(data)   // A function to be called if request succeeds
			 		{
			 			collections.ajax.reload( null, false );
			 			$('#dbEditmodel').modal('hide');			
			 		}
			 });
			
		}
		 return false;  
    });

    $(document).on('dblclick', '.tbl-label > tbody > tr', function(event) {
		var addDataId = $(this).find('.itm-hid-id').val();
		$.post('lib/functions.php?action=doubleClickadd',{val:addDataId},function(data,txtStatus,xhr){
			prinlst.ajax.reload( null, false ); 
		});
	});

	// $(document).on('click', '.trig-additm', function(event) {
	// 	$.post("lib/functions.php?action=getTeplateSelectbox", function(data){
	// 		$('.add_itm_deftemp').find('option').remove().end().append(data);			
	// 	});

	// 	$.post("lib/functions.php?action=getSizeSelectbox", function(data){
	// 		$('.add_itm_siz').find('option').remove().end().append(data);				
	// 	});
		
	// 	return false;	
	// });

	$(document).on('click', '.add-itm-imglnkk', function(event) { 
		$('#myModal-tem').find('.modal-body img').attr('src', 'upload_images/items/'+$(this).attr('data-img-additm'));
	});

	$(document).on('click', '.img-lnk-icoadditm', function(event) { 
		$('#myModal-tem').find('.modal-body img').attr('src', 'upload_images/items/'+$(this).attr('data-img-temps'));
	});

	$(document).on('click', '.trig-additm', function(event) { 
		$('#itemsdbmodel-index').find("input[name='add_itm[default][itm_hid]']").val('newitem');
		$('#itemsdbmodel-index').find(".modal-title").html('Add Item');
		$("select[name='add_itm[default][colldrp]'] option").each(function(index, el) {
            $(this).removeAttr('selected');
        });
        $('[name="add_itm[default][catagdrp]"]').find('option').remove().end().append('<option value="-1">Select Categories</option>');
		$('[name="add_itm[default][catagdrp]"],[name="add_itm[default][colldrp]"]').removeAttr('disabled');
		$('.past-addItm-dash').empty();

		$("[name='add_itm[default][lbl]']").val("");
        $("[name='add_itm[default][desc]']").val("");
        $("[name='add_itm[default][pric]']").val("");
        $("[name='add_itm[default][tags]']").val("");
        $(".add-itm-imglnkk").attr('data-img-additm',"");
        $("select[name='add_itm[default][deftemp]'] option").each(function(index, el) {
            $(this).removeAttr('selected');
        });
        
		return false;	
	});

	$(document).on('click', '.itm_edit_val', function(event) {
		var addDataId = $(this).attr('data-val');
		$elem=$(this);
		$('#itemsdbmodel-index').find("input[name='add_itm[default][itm_hid]']").val('edititm');
		$('#itemsdbmodel-index').find("input[name='add_itm[default][itm_editid]']").val($(this).attr('data-val'));		
		$('#itemsdbmodel-index').find(".modal-title").html($elem.attr('data-lblnm')+ ' Edit');
		$.getJSON("lib/functions.php?action=getLoadItemData",{val:addDataId}, function(data){
			$("select[name='add_itm[default][colldrp]'] option").each(function(index, el) {
                $(this).removeAttr('selected');
            });
            $("select[name='add_itm[default][colldrp]']").attr('disabled','disabled').val(data['colid']);

            $("[name='add_itm[default][lbl]']").val(data['itmlbl']);
            $("[name='add_itm[default][desc]']").val(data['description']);
            $("[name='add_itm[default][pric]']").val(data['price']);
            $("[name='add_itm[default][tags]']").val(data['tags']);
            $(".add-itm-imglnkk").attr('data-img-additm',data['img_path']);
            $("select[name='add_itm[default][deftemp]'] option").each(function(index, el) {
                $(this).removeAttr('selected');
            });
            $("select[name='add_itm[default][deftemp]']").val(data['template_id']);
            
            $.getJSON("lib/functions.php?action=getadditmCats",{val:data['colid']}, function(datas){
		  		$('[name="add_itm[default][catagdrp]"]').find('option').remove().end().append(datas);
		  		$("[name='add_itm[default][catagdrp]']").attr('disabled','disabled').val(data['catid']);
			});

			$('.past-addItm-dash').empty();
	    	$.getJSON("lib/functions.php?action=getAddItmProperties",{itm_id:addDataId,mode:'edit',vall:data['catid']}, function(data){
		  		var ls='';
		  		$.each(data.datal, function () {		       
			       if(this['type']=='text'){
			       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><input type="text" name="add_itm[past]['+this["id"]+']" class="form-control input-lg" value="'+this["defaultt"]+'"/></div></div>';
			       }else if(this['type']=='img'){
			       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><ul class="ul-imgModED"><li><button class="btn btn-primary" data-toggle="tooltip" title="" type="button" style="float: left;" data-original-title=""><i class="fa fa-camera"></i><input type="file" name="add_itm_pastimg['+this["id"]+']" id="file-optAdditm"></button></li><li><a class="img-lnk-additm" data-img-additm="'+this["defaultt"]+'" data-toggle="modal" data-target="#myModal-tem"><button class="btn btn-primary upldimg-additm" data-toggle="tooltip" title="" type="button" data-original-title="Preview"><i class="fa fa-image"></i></button></a></li></ul></div></div>';
			       }else if(this['type']=='number'){
			       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><input type="number" name="add_itm[past]['+this["id"]+']" class="form-control input-lg" value="'+this["defaultt"]+'"/></div></div>';
			       }else if(this['type']=='bool'){
			       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><div class="checkbox checkbox-primary"><input type="hidden" name="add_itm_pastchkhid['+this["id"]+']"/><input id="prop-chkid'+this["id"]+'" type="checkbox" name="add_itm_pastchk['+this["id"]+']" class="bool-chkadditm'+this["defaultt"]+'" value="'+this["defaultt"]+'"><label for="prop-chkid'+this["id"]+'"></label></div></div></div><script>$(document).ready(function(){var vals=$(".bool-chkadditm'+this["defaultt"]+'").val();if(vals==1){$(".bool-chkadditm'+this["defaultt"]+'").prop("checked", "checked")}; $(".bool-chkadditm'+this["defaultt"]+'").change(function(){if($(this).prop("checked")){$(this).val("1");}else{$(this).val("0");}}); });</script>';
			       }else if(this['type']=='imgbool'){
			       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><ul class="def-bouladditm"><li><button class="btn btn-primary chldmodal-lbl-btn-edit" data-toggle="tooltip" title="" type="button" style="float: right; margin: 2% 0.7% 0 3%;" data-original-title="Save"><i class="fa fa-camera"></i><input type="file" name="add_itm_icochk['+this["id"]+']" class="chk-fileadditm sty-chk"></button></li><li><a class="img-lnk-icoadditm" data-img-temps="'+this["defaultt"]+'" data-toggle="modal" data-target="#myModal-tem"><button class="btn btn-primary chldmodal-lbl-btn-additm" data-toggle="tooltip" title="" type="button" data-original-title="Preview"><i class="fa fa-image"></i></button></a></li><li><button class="btn btn-primary del-icoadditm" data-toggle="tooltip" title="" type="button" data-original-title="Delete"><i class="fa fa-times-circle-o"></i></button></li><li><div class="pretty p-image p-plain"><input type="checkbox" class="chkcla'+this["id"]+'" name="add_itm_icochkbx['+this["id"]+']" value="1"><div class="state"><img class="image grab-chkimg" src="upload_images/items/'+this["defaultt"]+'"><label></label></div></div></li></ul><input type="hidden" name="add_itm_icochkbxhid['+this["id"]+']" value="1"/></div><script>$(document).ready(function(){var boos='+this["bool"]+'; if(boos==1){$(".chkcla'+this["id"]+'").prop("checked", "checked")}});</script></div>';
			       }else if(this['type']=='list'){
			       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><select name="add_itm_lispa['+this["id"]+']" class="form-control input-lg">'+this["defaultt"]+'</select></div></div>';
			       }else if(this['type']=='imglist'){
			       		ls+='<div class="col-lg-12"><div class="col-lg-5">'+this["label"]+'</div><div class="col-lg-7"><select name="add_itm_icolist['+this["id"]+']" class="form-control input-lg additm-selectimg" id="additm-selectimg'+this["id"]+'">'+this["defaultt"]+'</select></div><script>$(document).ready(function(){$("#additm-selectimg'+this["id"]+'").msDropdown({visibleRows:4});});</script></div>';
			       }		       
			       
			    });
			    $(ls).appendTo('.past-addItm-dash');		    
			});

		});
	});

	$(document).on('click', '.data-templ-edi', function(event) {
		var addDataId = $(this).attr('data-templ-edi');
		$.getJSON("lib/functions.php?action=feedTemplsEdit",{val:addDataId}, function(data){
		    $('#dbmodel-template').find('input[name="tmplabel"]').val(data['label']);
		    $('#dbmodel-template').find('textarea[name="tmpdescription"]').val(data['description']);
		    $('#dbmodel-template').find('input[name="tmpwidth"]').val(data['width']);  
		    $('#dbmodel-template').find('input[name="tmpheiht"]').val(data['height']);
		    $('#dbmodel-template').find('input[name="tmpbclor"]').val(data['bkgColor']);
		    $('#dbmodel-template').find('input[name="tmpbclor"]').prev().css('backgroundColor',data['bkgColor']);
		    $('#dbmodel-template').find('input[name="tmpocolor"]').val(data['strokeColor']);
		    $('#dbmodel-template').find('input[name="tmpocolor"]').prev().css('backgroundColor',data['strokeColor']);
		    $('#dbmodel-template').find('input[name="tmposize"]').val(data['stroke']);
		    $('#dbmodel-template').find('input[name="eid"]').val(data['id']);
		    $('#dbmodel-template').find('.img-lnk-temp').attr('data-img-temp',data['image']);
		});
		
	});

	$(document).on('click', '.data-templ-edi-pepr', function(event) {
		var addDataId = $(this).attr('data-templ-edi-pepr');
		$.getJSON("lib/functions.php?action=feedTemplsEdit_pepr",{val:addDataId}, function(data){
		    $('#dbmodel-template-pepr').find('input[name="tmplabel-pepr"]').val(data['label']);
		    $('#dbmodel-template-pepr').find('textarea[name="tmpdescription-pepr"]').val(data['description']);
		    $('#dbmodel-template-pepr').find('input[name="tmpwidth-pepr"]').val(data['width']);  
		    $('#dbmodel-template-pepr').find('input[name="tmpheiht-pepr"]').val(data['height']);
		    $('#dbmodel-template-pepr').find('input[name="tmpbclor-pepr"]').val(data['bkgColor']);
		    $('#dbmodel-template-pepr').find('input[name="tmpbclor-pepr"]').prev().css('backgroundColor',data['bkgColor']);
		    $('#dbmodel-template-pepr').find('input[name="tmpocolor-pepr"]').val(data['strokeColor']);
		    $('#dbmodel-template-pepr').find('input[name="tmpocolor-pepr"]').prev().css('backgroundColor',data['strokeColor']);
		    $('#dbmodel-template-pepr').find('input[name="tmposize-pepr"]').val(data['stroke']);
		    $('#dbmodel-template-pepr').find('input[name="eid-pepr"]').val(data['id']);
		    $('#dbmodel-template-pepr').find('.img-lnk-temp-pepr').attr('data-img-temp',data['image']);
		});
		
	});

	$(document).on('click', '.collect-get-dat', function(event) {
		var addDataId = $(this).attr('data-colle-edi');
		$.getJSON("lib/functions.php?action=feedCollectionEdit_pepr",{val:addDataId}, function(data){
			$('#dbEditmodel').find('.modal-title').html("Collection, Edit Label :"+data['label']);
			$('#dbEditmodel').find('input[name="hid_val_edit_lbl"]').val(data['id']);
			$('#dbEditmodel').find('input[name="modal-coll-input-edit"]').val(data['label']);
		});
	});

	$(document).on('click', '.delete-coll-data', function(event) {
		var addDataId = $(this).attr('data-colle-del');
		$('#dbdeletemodel').find('.del-hidden-hid').val(addDataId);
	});

	$('form[class="delete-collection"]').submit(function(event) {		
		var addDataId=$('input[name="del-hidden-hid"]').val();
		$.getJSON("lib/functions.php?action=deletecollectionItem",{val:addDataId}, function(data){
			collections.ajax.reload( null, false );
		  	$('#dbdeletemodel').modal('hide');
		  	$('.catag-drp').find('option').remove().end().append(data);
		  	$('.item-filter-curcol').find('option').remove().end().append(data);
		})	

		return false;
	});

	$(document).on('click', '.no-conf-del', function(event) {
		$('#dbdeletemodel').modal('hide');
		return false;
	});

	$(document).on('click', '.no-coll-delall', function(event) {
		$('#dbdeleteallmodel').modal('hide');
		return false;
	});

	$('.del-all-coll').click(function(event) {
    	var selectedCheckBoxArray = new Array();
    	var n = $("input[name='db-chk']:checked").length;

    	if (n > 0){
	      $("input[name='db-chk']:checked").each(function(){
	      	if($(this).val()!='on')
	      	{
		      selectedCheckBoxArray.push($(this).val());
	      	}
		   });
		

		feild=JSON.stringify(selectedCheckBoxArray);
		
		$.getJSON("lib/functions.php?action=multiCollecdelete",{feild:feild}, function(data){
			collections.ajax.reload( null, false );
			$('#dbdeleteallmodel').modal('hide');
		  	$('.catag-drp').find('option').remove().end().append(data);
		  	$('.item-filter-curcol').find('option').remove().end().append(data);
		});

		return false;
		}
		else{
			errorAlert('Please select Items !');
		}
	});

	$(document).on('click', '.del-icoImg', function(event) {
		$(this).parents('#def-imgbool').find('.img-lnk-icochk').removeClass('newImg').attr('data-img-temps', 'default.png');
		$(this).parents('#def-imgbool').find('.grab-chkimg').attr('src', '../tagapp/upload_images/icon_chk_box/default.png');
	});

	$(document).on('click', '.del-icoImgEd', function(event) {
		$(this).parents('#prop-chlddbmodel-edit-icochk').find('.img-lnk-icochkEd').attr('data-img-temps', 'default.png');
		$(this).parents('#prop-chlddbmodel-edit-icochk').find('.grab-chkimg').attr('src', '../tagapp/upload_images/icon_chk_box/default.png');
	});

	$(document).on('click', '.img-lnk', function(event) {
		var img=$(this).attr('data-img');
		$('.itm-img').attr('src', '../tagapp/upload_images/items/'+img);
	});

	$(document).on('click', '.img-lnk-temp', function(event) {
		var img=$(this).attr('data-img-temp');
		$('.itm-img-temp').attr('src', '../tagapp/upload_images/templates/'+img);
	});

	$(document).on('click', '.img-lnk-icochk', function(event) {
		var img=$(this).attr('data-img-temps');
		if($(this).hasClass('newImg')){
			$('.itm-img-temps').attr('src', img);
		}else{
			$('.itm-img-temps').attr('src', '../tagapp/upload_images/icon_chk_box/'+img);
		}
	});

	$(document).on('click', '.img-lnk-icochkEd', function(event) {
		var img=$(this).attr('data-img-temps');
		if($(this).hasClass('newImg')){
			$('.itm-img-temps').attr('src', img);
		}else{
			$('.itm-img-temps').attr('src', '../tagapp/upload_images/icon_chk_box/'+img);
		}
	});

	$(document).on('click', '.img-lnk-icochkImpre', function(event) {
		var img=$(this).attr('data-img-temps');
		if($(this).hasClass('newImg')){
			$('.itm-img-temps').attr('src', img);
		}else{
			$('.itm-img-temps').attr('src', '../tagapp/upload_images/image_type/'+img);
		}
	});

	$(document).on('click', '.img-lnk-icochkImpreEd', function(event) {
		var img=$(this).attr('data-img-temps');
		if($(this).hasClass('newImg')){
			$('.itm-img-temps').attr('src', img);
		}else{
			$('.itm-img-temps').attr('src', '../tagapp/upload_images/image_type/'+img);
		}
	});

	$(document).on('click', '.img-lnk-temp-drplst', function(event) {
		var img=$(this).attr('data-img-temps');
		if($(this).hasClass('tempimagePrev')){
			$('.itm-img-temps').attr('src', img);
		}else{
			$('.itm-img-temps').attr('src', '../tagapp/upload_images/icon_drp_images/'+img);
		}
		
	});
	
	$(document).on('click', '.img-lnk-temp-pepr', function(event) {
		var img=$(this).attr('data-img-temp');
		$('.itm-img-temp-pepr').attr('src', '../tagapp/upload_images/paper_templates/'+img);
	});

	$(document).on('click', '.delete-temp-data', function(event) {
		var addDataId = $(this).attr('data-templ-del');
		$.post('lib/functions.php?action=deleteTempData',{val:addDataId},function(data,txtStatus,xhr){
			tempLets.ajax.reload( null, false );
			tempLets_db.ajax.reload( null, false );
		});
	});

	$(document).on('click', '.delete-temp-data-pepr', function(event) {
		var addDataId = $(this).attr('data-templ-del-pepr');
		$.post('lib/functions.php?action=deleteTempData_pepr',{val:addDataId},function(data,txtStatus,xhr){
			tempLets_db_pepr.ajax.reload( null, false );
		});
	});

	$(document).on('click', '.de-print-rec', function(event) {
		var addDataId = $(this).attr('data-del-id');
		$.post('lib/functions.php?action=deletePrintList',{val:addDataId},function(data,txtStatus,xhr){
			prinlst.ajax.reload( null, false );
		});
	});

	var addDataId="";
	$(document).on('click', '.prev-print-rec', function(event) {
		addDataId = $(this).attr('data-prev-id');
		$('.prev-parent').css('display', 'block');
		$.post("lib/functions.php?action=getTemPreview",{val:addDataId}, function(data){		    
		   
		   	var frst_lyr = $.parseJSON(data);
		   	$('.contain-div-prev .data-area').empty();
		   	//$('.prev-col .contain-div-prev').css({'width':parseFloat(frst_lyr['width']*96)+'px',"height":parseFloat(frst_lyr['height']*96)+'px'});		   
		   	$.each(frst_lyr, function( i, val) {
			    if(i=='label'){
			    	var lbla=$.parseJSON(val);
			    	//console.log(lbla['text']);
			    	$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+lbla['width']+'px; height: '+lbla['height']+'px; left: '+lbla['x']+'px; top: '+lbla['y']+'px; position: absolute; color: rgb(255, 255, 255); background-color: #'+lbla['backgroundColor']+'; font-size: 18px;" class="color chld">'+lbla['text']+'</div>');
			    	$('.contain-div-prev .data-area').append($html_data);
			    	var __dx;
		            var __dy;
		            var __scale=0.5;
		            var __recoupLeft, __recoupTop;

				    $($html_data).resizable({
		            	containment: '.contain-div-prev',
		            	start: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	},
		            	resize: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	}
		            }).draggable({
		                containment: '.contain-div-prev',
		                zIndex: 100,
		                drag: function (event, ui) {                        
		                    __dx = ui.position.left - ui.originalPosition.left;
		                    __dy = ui.position.top - ui.originalPosition.top;
		                    ui.position.left = ui.originalPosition.left + (__dx);
		                    ui.position.top = ui.originalPosition.top + (__dy);
		                   
		                    ui.position.left += __recoupLeft;
		                    ui.position.top += __recoupTop;
		                },
		                start: function (event, ui) {
		                    $(this).css('cursor', 'pointer');
		                    
		                    var left = parseInt($(this).css('left'), 10);
		                    left = isNaN(left) ? 0 : left;
		                    var top = parseInt($(this).css('top'), 10);
		                    top = isNaN(top) ? 0 : top;
		                    __recoupLeft = left - ui.position.left;
		                    __recoupTop = top - ui.position.top;
		                }
		            });
			    }
			    if(i=='description'){
			    	var desd=$.parseJSON(val);
			    	//console.log(desd['text']);
			    	$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+desd['width']+'px; height: '+desd['height']+'px; left: '+desd['x']+'px; top: '+desd['y']+'px; position: absolute; color: rgb(255, 255, 255); background-color: #'+desd['backgroundColor']+'; font-size: 18px;" class="color chld">'+desd['text']+'</div>');
			    	$('.contain-div-prev .data-area').append($html_data);
			    	var __dx;
		            var __dy;
		            var __scale=0.5;
		            var __recoupLeft, __recoupTop;

				    $($html_data).resizable({
		            	containment: '.contain-div-prev',
		            	start: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	},
		            	resize: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	}
		            }).draggable({
		                containment: '.contain-div-prev',
		                zIndex: 100,
		                drag: function (event, ui) {                        
		                    __dx = ui.position.left - ui.originalPosition.left;
		                    __dy = ui.position.top - ui.originalPosition.top;
		                    ui.position.left = ui.originalPosition.left + (__dx);
		                    ui.position.top = ui.originalPosition.top + (__dy);
		                   
		                    ui.position.left += __recoupLeft;
		                    ui.position.top += __recoupTop;
		                },
		                start: function (event, ui) {
		                    $(this).css('cursor', 'pointer');
		                    
		                    var left = parseInt($(this).css('left'), 10);
		                    left = isNaN(left) ? 0 : left;
		                    var top = parseInt($(this).css('top'), 10);
		                    top = isNaN(top) ? 0 : top;
		                    __recoupLeft = left - ui.position.left;
		                    __recoupTop = top - ui.position.top;
		                }
		            });
			    }
			     if(i=='img_path'){
			     	//console.log(val);
			     	$('.contain-div-prev .img-div-prev img').attr('src','upload_images/items/'+val);
			     }
			    if(i=='price'){
			    	var prip=$.parseJSON(val);
			    	//console.log(prip['text']);
			    	$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+prip['width']+'px; height: '+prip['height']+'px; left: '+prip['x']+'px; top: '+prip['y']+'px; position: absolute; color: rgb(255, 255, 255); background-color: #'+prip['backgroundColor']+'; font-size: 18px;" class="color chld">'+prip['text']+'</div>');
			    	$('.contain-div-prev .data-area').append($html_data);
			    	var __dx;
		            var __dy;
		            var __scale=0.5;
		            var __recoupLeft, __recoupTop;

				    $($html_data).resizable({
		            	containment: '.contain-div-prev',
		            	start: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	},
		            	resize: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	}
		            }).draggable({
		                containment: '.contain-div-prev',
		                zIndex: 100,
		                drag: function (event, ui) {                        
		                    __dx = ui.position.left - ui.originalPosition.left;
		                    __dy = ui.position.top - ui.originalPosition.top;
		                    ui.position.left = ui.originalPosition.left + (__dx);
		                    ui.position.top = ui.originalPosition.top + (__dy);
		                   
		                    ui.position.left += __recoupLeft;
		                    ui.position.top += __recoupTop;
		                },
		                start: function (event, ui) {
		                    $(this).css('cursor', 'pointer');
		                    
		                    var left = parseInt($(this).css('left'), 10);
		                    left = isNaN(left) ? 0 : left;
		                    var top = parseInt($(this).css('top'), 10);
		                    top = isNaN(top) ? 0 : top;
		                    __recoupLeft = left - ui.position.left;
		                    __recoupTop = top - ui.position.top;
		                }
		            });
			    }
			    if(i=='tags'){
			    	var tagst=$.parseJSON(val);
			    	//console.log(tagst['text']);
			    	$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+tagst['width']+'px; height: '+tagst['height']+'px; left: '+tagst['x']+'px; top: '+tagst['y']+'px; position: absolute; color: rgb(255, 255, 255); background-color: #'+tagst['backgroundColor']+'; font-size: 18px;" class="color chld">'+tagst['text']+'</div>');
			    	$('.contain-div-prev .data-area').append($html_data);
			    	var __dx;
		            var __dy;
		            var __scale=0.5;
		            var __recoupLeft, __recoupTop;

				    $($html_data).resizable({
		            	containment: '.contain-div-prev',
		            	start: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	},
		            	resize: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	}
		            }).draggable({
		                containment: '.contain-div-prev',
		                zIndex: 100,
		                drag: function (event, ui) {                        
		                    __dx = ui.position.left - ui.originalPosition.left;
		                    __dy = ui.position.top - ui.originalPosition.top;
		                    ui.position.left = ui.originalPosition.left + (__dx);
		                    ui.position.top = ui.originalPosition.top + (__dy);
		                   
		                    ui.position.left += __recoupLeft;
		                    ui.position.top += __recoupTop;
		                },
		                start: function (event, ui) {
		                    $(this).css('cursor', 'pointer');
		                    
		                    var left = parseInt($(this).css('left'), 10);
		                    left = isNaN(left) ? 0 : left;
		                    var top = parseInt($(this).css('top'), 10);
		                    top = isNaN(top) ? 0 : top;
		                    __recoupLeft = left - ui.position.left;
		                    __recoupTop = top - ui.position.top;
		                }
		            });
			    }
			});
		    
		});		
	});

    $(document).on('click', '.go-enlarge', function(event) {
		$.post("lib/functions.php?action=getTemPreview",{val:addDataId}, function(data){	
			
		   var frst_lyr = $.parseJSON(data);			
			$( '.print-list-datamodal' ).find('.data-area').empty();
			$( '.print-list-datamodal .modal-dialog .modal-body' ).attr( 'data-tblprint-id', frst_lyr.id  );
			//$('.print-list-datamodal .contain-div').css({'width':parseFloat(frst_lyr['width']*96)+'px',"height":parseFloat(frst_lyr['height']*96)+'px'});
		   	$.each(frst_lyr, function(i, val) {
			    if(i=='label'){
			    	var lbla=$.parseJSON(val);
			    	//console.log(lbla['text']) 
			    	//$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+lbla['width']+'px; height: '+lbla['height']+'px; left: '+lbla['x']+'px; top: '+lbla['y']+'px; position: absolute; color: rgb(255, 255, 255); background-color: #'+lbla['backgroundColor']+'; font-size: 18px;" class="color chld labels">'+lbla['text']+'</div>');
			    	$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+lbla['width']+'px; height: '+lbla['height']+'px; left: '+lbla['x']+'px; top: '+lbla['y']+'px; position: absolute; color: '+lbla['textColor']+'; background-color: '+lbla['backgroundColor']+'; font-size: '+lbla['textSize']+'px; font-family: '+lbla['font-family']+'; opacity: '+lbla['backgroundAlpha']+'" class="color chld labels">'+lbla['text']+'</div>');
			    	$('.print-list-datamodal').find('.data-area').append($html_data);
			    	var __dx;
		            var __dy;
		            var __scale=0.5;
		            var __recoupLeft, __recoupTop;

				    $($html_data).resizable({
		            	containment: '.contain-div',
		            	start: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	},
		            	resize: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	}
		            }).draggable({
		                containment: '.contain-div',
		                zIndex: 100,
		                drag: function (event, ui) {                        
		                    __dx = ui.position.left - ui.originalPosition.left;
		                    __dy = ui.position.top - ui.originalPosition.top;
		                    ui.position.left = ui.originalPosition.left + (__dx);
		                    ui.position.top = ui.originalPosition.top + (__dy);
		                   
		                    ui.position.left += __recoupLeft;
		                    ui.position.top += __recoupTop;
		                    $('input[name="enlg[xpos]"]').val(ui.position.left+' px');
		                    $('input[name="enlg[ypos]"]').val(ui.position.top+' px');		                    
		                },
		                start: function (event, ui) {
		                    $(this).css('cursor', 'pointer');
		                    
		                    var left = parseInt($(this).css('left'), 10);
		                    left = isNaN(left) ? 0 : left;
		                    var top = parseInt($(this).css('top'), 10);
		                    top = isNaN(top) ? 0 : top;
		                    __recoupLeft = left - ui.position.left;
		                    __recoupTop = top - ui.position.top;
		                    $('input[name="enlg[xpos]"]').val(ui.position.left+' px');
		                    $('input[name="enlg[ypos]"]').val(ui.position.top+' px');
		                }
		            });
			    }
			    if(i=='description'){
			    	var desd=$.parseJSON(val);
			    	//console.log(desd['text']);
			    	//$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+desd['width']+'px; height: '+desd['height']+'px; left: '+desd['x']+'px; top: '+desd['y']+'px; position: absolute; color: rgb(255, 255, 255); background-color: #'+desd['backgroundColor']+'; font-size: 18px;" class="color chld description">'+desd['text']+'</div>');
			    	$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+desd['width']+'px; height: '+desd['height']+'px; left: '+desd['x']+'px; top: '+desd['y']+'px; position: absolute; color: '+desd['textColor']+'; background-color: '+desd['backgroundColor']+'; font-size: '+desd['textSize']+'px; font-family: '+desd['font-family']+'; opacity: '+desd['backgroundAlpha']+'" class="color chld description">'+desd['text']+'</div>');
			    	$('.print-list-datamodal').find('.data-area').append($html_data);
			    	var __dx;
		            var __dy;
		            var __scale=0.5;
		            var __recoupLeft, __recoupTop;

				    $($html_data).resizable({
		            	containment: '.contain-div',
		            	start: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	},
		            	resize: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	}
		            }).draggable({
		                containment: '.contain-div',
		                zIndex: 100,
		                drag: function (event, ui) {                        
		                    __dx = ui.position.left - ui.originalPosition.left;
		                    __dy = ui.position.top - ui.originalPosition.top;
		                    ui.position.left = ui.originalPosition.left + (__dx);
		                    ui.position.top = ui.originalPosition.top + (__dy);
		                   
		                    ui.position.left += __recoupLeft;
		                    ui.position.top += __recoupTop;
		                    $('input[name="enlg[xpos]"]').val(ui.position.left+' px');
		                    $('input[name="enlg[ypos]"]').val(ui.position.top+' px');
		                },
		                start: function (event, ui) {
		                    $(this).css('cursor', 'pointer');
		                    
		                    var left = parseInt($(this).css('left'), 10);
		                    left = isNaN(left) ? 0 : left;
		                    var top = parseInt($(this).css('top'), 10);
		                    top = isNaN(top) ? 0 : top;
		                    __recoupLeft = left - ui.position.left;
		                    __recoupTop = top - ui.position.top;
		                    $('input[name="enlg[xpos]"]').val(ui.position.left+' px');
		                    $('input[name="enlg[ypos]"]').val(ui.position.top+' px');
		                }
		            });
			    }
			    if(i=='img_path'){
			     	//console.log(val);
			     	$('.print-list-datamodal').find('.img-div img').attr('src','upload_images/items/'+val);
			    }
			    if(i=='price'){
			    	var prip=$.parseJSON(val);
			    	//console.log(prip['text']);
			    	//$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+prip['width']+'px; height: '+prip['height']+'px; left: '+prip['x']+'px; top: '+prip['y']+'px; position: absolute; color: rgb(255, 255, 255); background-color: #'+prip['backgroundColor']+'; font-size: 18px;" class="color chld prices">'+prip['text']+'</div>');
			    	$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+prip['width']+'px; height: '+prip['height']+'px; left: '+prip['x']+'px; top: '+prip['y']+'px; position: absolute; color: '+prip['textColor']+'; background-color: '+prip['backgroundColor']+'; font-size: '+prip['textSize']+'px; font-family: '+prip['font-family']+'; opacity: '+prip['backgroundAlpha']+'" class="color chld prices">'+prip['text']+'</div>');
			    	$('.print-list-datamodal').find('.data-area').append($html_data);
			    	var __dx;
		            var __dy;
		            var __scale=0.5;
		            var __recoupLeft, __recoupTop;

				    $($html_data).resizable({
		            	containment: '.contain-div',
		            	start: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	},
		            	resize: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	}
		            }).draggable({
		                containment: '.contain-div',
		                zIndex: 100,
		                drag: function (event, ui) {                        
		                    __dx = ui.position.left - ui.originalPosition.left;
		                    __dy = ui.position.top - ui.originalPosition.top;
		                    ui.position.left = ui.originalPosition.left + (__dx);
		                    ui.position.top = ui.originalPosition.top + (__dy);
		                   
		                    ui.position.left += __recoupLeft;
		                    ui.position.top += __recoupTop;
		                    $('input[name="enlg[xpos]"]').val(ui.position.left+' px');
		                    $('input[name="enlg[ypos]"]').val(ui.position.top+' px');
		                },
		                start: function (event, ui) {
		                    $(this).css('cursor', 'pointer');
		                    
		                    var left = parseInt($(this).css('left'), 10);
		                    left = isNaN(left) ? 0 : left;
		                    var top = parseInt($(this).css('top'), 10);
		                    top = isNaN(top) ? 0 : top;
		                    __recoupLeft = left - ui.position.left;
		                    __recoupTop = top - ui.position.top;
		                    $('input[name="enlg[xpos]"]').val(ui.position.left+' px');
		                    $('input[name="enlg[ypos]"]').val(ui.position.top)+' px';
		                }
		            });
			    }
			    if(i=='tags'){
			    	var tagst=$.parseJSON(val);
			    	//console.log(tagst['text']);
			    	//$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+tagst['width']+'px; height: '+tagst['height']+'px; left: '+tagst['x']+'px; top: '+tagst['y']+'px; position: absolute; color: rgb(255, 255, 255); background-color: #'+tagst['backgroundColor']+'; font-size: 18px;" class="color chld tags">'+tagst['text']+'</div>');
			    	$html_data=$('<div contenteditable="true" style="word-break: break-all; width: '+tagst['width']+'px; height: '+tagst['height']+'px; left: '+tagst['x']+'px; top: '+tagst['y']+'px; position: absolute; color: '+tagst['textColor']+'; background-color: '+tagst['backgroundColor']+'; font-size: '+tagst['textSize']+'px; font-family: '+tagst['font-family']+'; opacity: '+tagst['backgroundAlpha']+'" class="color chld tags">'+tagst['text']+'</div>');
			    	$('.print-list-datamodal').find('.data-area').append($html_data);
			    	var __dx;
		            var __dy;
		            var __scale=0.5;
		            var __recoupLeft, __recoupTop;
					$($html_data).resizable({						
		            	containment: '.contain-div',
		            	start: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	},
		            	resize: function(event, ui){
		            		$('input[name="enlg[width]"]').val(ui.size.width+' px');
		                    $('input[name="enlg[hei]"]').val(ui.size.height+' px');
		            	}
		            }).draggable({
		                containment: '.contain-div',
		                zIndex: 100,
		                drag: function (event, ui) {                        
		                    __dx = ui.position.left - ui.originalPosition.left;
		                    __dy = ui.position.top - ui.originalPosition.top;
		                    ui.position.left = ui.originalPosition.left + (__dx);
		                    ui.position.top = ui.originalPosition.top + (__dy);
		                   
		                    ui.position.left += __recoupLeft;
		                    ui.position.top += __recoupTop;
		                    $('input[name="enlg[xpos]"]').val(ui.position.left+' px');
		                    $('input[name="enlg[ypos]"]').val(ui.position.top+' px');
		                },
		                start: function (event, ui) {
							//$(this).css('border', '1px solid #ff0');
		                    $(this).css('cursor', 'pointer');
		                    
		                    var left = parseInt($(this).css('left'), 10);
		                    left = isNaN(left) ? 0 : left;
		                    var top = parseInt($(this).css('top'), 10);
		                    top = isNaN(top) ? 0 : top;
		                    __recoupLeft = left - ui.position.left;
		                    __recoupTop = top - ui.position.top;
		                    $('input[name="enlg[xpos]"]').val(ui.position.left+' px');
		                    $('input[name="enlg[ypos]"]').val(ui.position.top+' px');
		                }
		            });
			    }
				if(i=='imgdiv'){
					var imgdivst=$.parseJSON(val);
					$( '.print-list-datamodal .modal-body .bdrrcolor_picker div' ).css( 'backgroundColor', imgdivst['color'] );
					$( '.print-list-datamodal .modal-body .print-prev-bordersi' ).val( parseInt( imgdivst['border']) );
					
					//$( '.print-list-datamodal .modal-body .contain-div' ).css( 'border-color', imgdivst['color'] );
					$( '.print-list-datamodal .modal-body .contain-div' ).css( 'border', imgdivst['border'].replace(';', '') );
				}
				
				if(i=='lblvisible'){					
					var labelArr = val.split(',');
					if( labelArr[0] == 'labels' ){
						$( '.label-list-wrap input:checkbox[value="'+labelArr[0]+'"]' ).prop( 'checked', true );
						$( '.print-list-datamodal .modal-body .contain-div .data-area .labels' ).show();						
					}else{
						$( '.print-list-datamodal .modal-body .contain-div .data-area .labels' ).hide();
					}
					if( labelArr[1] == 'description' ){
						$( '.label-list-wrap input:checkbox[value="'+labelArr[1]+'"]' ).prop( 'checked', true );
						$( '.print-list-datamodal .modal-body .contain-div .data-area .description' ).show();
					}else{
						$( '.print-list-datamodal .modal-body .contain-div .data-area .description' ).hide();
					}
					if( labelArr[2] == 'price' ){
						$( '.label-list-wrap input:checkbox[value="'+labelArr[2]+'"]' ).prop( 'checked', true );
						$( '.print-list-datamodal .modal-body .contain-div .data-area .prices' ).show();
					}else{
						$( '.print-list-datamodal .modal-body .contain-div .data-area .prices' ).hide();
					}
					if( labelArr[3] == 'tags' ){
						$( '.label-list-wrap input:checkbox[value="'+labelArr[3]+'"]' ).prop( 'checked', true );
						$( '.print-list-datamodal .modal-body .contain-div .data-area .tags' ).show();
					}else{
						$( '.print-list-datamodal .modal-body .contain-div .data-area .tags' ).hide();
					}
				}
			});
		//     var $html_data=$('<div style="word-break: break-all; width: 252px; height: 161px; left: 274px; top: 189px; position: absolute; color: rgb(255, 255, 255); background-color: transparent; font-size: 18px;" class="color chld">'+data['description']+'</div><div style="word-break: break-all; width: 234px; height: auto; left: 16px; top: 6px; position: absolute; color: rgb(255, 255, 255); background-color: transparent; font-size: 32px;" class="color chld">'+data['label']+'</div><div style="word-break: break-all; width: 155px; height: 28px; left: 18px; top: 127px; position: absolute; background-color: transparent; font-size: 18px; color: rgb(255, 255, 255);" class="color chld">'+data['scientific_name']+'</div><div style="word-break: break-all; width: 247px; height: 32px; left: 280px; top: 7px; position: absolute; background-color: transparent; font-size: 22px; color: rgb(255, 255, 255);" class="color chld resizable ui-state-active">'+data['price']+'</div><div style="word-break: break-all; width: 136px; height: 29px; left: 19px; top: 164px; position: absolute; background-color: transparent; font-size: 19px; color: rgb(255, 255, 255);" class="color chld">Care Level : '+data['care_level']+'</div>');
		    
		//     //enlarge view	
		//     $('.print-list-datamodal').find('.img-div img').attr('src','upload_images/items/'+data['img_path']);
		//     $('.print-list-datamodal').find('.data-area').empty();
		//     $html_data.each(function(index, el) {
		//     	$('.print-list-datamodal').find('.data-area').append($(this));
		//     });
		    
		//     var __dx;
  //           var __dy;
  //           var __scale=0.5;
  //           var __recoupLeft, __recoupTop;

		//     $($html_data).resizable({
  //           	containment: '.contain-div'
  //           }).draggable({
  //               containment: '.contain-div',
  //               zIndex: 100,
  //               drag: function (event, ui) {                        
  //                   __dx = ui.position.left - ui.originalPosition.left;
  //                   __dy = ui.position.top - ui.originalPosition.top;
  //                   ui.position.left = ui.originalPosition.left + (__dx);
  //                   ui.position.top = ui.originalPosition.top + (__dy);
                   
  //                   ui.position.left += __recoupLeft;
  //                   ui.position.top += __recoupTop;
  //               },
  //               start: function (event, ui) {
  //                   $(this).css('cursor', 'pointer');
                    
  //                   var left = parseInt($(this).css('left'), 10);
  //                   left = isNaN(left) ? 0 : left;
  //                   var top = parseInt($(this).css('top'), 10);
  //                   top = isNaN(top) ? 0 : top;
  //                   __recoupLeft = left - ui.position.left;
  //                   __recoupTop = top - ui.position.top;
  //               }
  //           });	
		});

        $(this).parents('.prev-col').prev('.print-list-datamodal').modal('show');
    });
 
	$(document).on('submit', '#tmpeditFrom', function(event) {
		
        var telabel = $('input[name="tmplabel"]').val();
        var tedescription = $('textarea[name="tmpdescription"]').val();
        var tewidth = $('input[name="tmpwidth"]').val();
        var teheiht = $('input[name="tmpheiht"]').val();
        var eosize = $('input[name="tmposize"]').val();
        var tmpocolor=$('input[name="tmpocolor"]').val();
        var tmpbclor=$('input[name="tmpbclor"]').val();

        if(telabel==''){
            errorAlert('Label is Required !');
            $('input[name="telabel"]').focus();
            return false;
        }
        else if(tedescription==''){
            errorAlert('Description is Required !');
            $('input[name="tedescription"]').focus();
            return false;
        }
        else if(tewidth==''){
            errorAlert('Width is Required !');
            $('input[name="tewidth"]').focus();
            return false;
        }
        else if(teheiht==''){
            errorAlert('Height is Required !');
            $('input[name="teheiht"]').focus();
            return false;
        }
        else if(eosize==''){
            errorAlert('Outline Size is Required !');
            $('input[name="eosize"]').focus();
            return false;
        }
        else{
            $.ajax({
                url: "lib/functions.php?action=tmpeditFrom", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                    success: function(data)   // A function to be called if request succeeds
                    {
                    	tempLets.ajax.reload( null, false );
                    	tempLets_db.ajax.reload( null, false );
                    	$('#dbmodel-template').modal('hide'); 
                    }
            });
        return false;
        }
    });

    $(document).on('submit', '#tmpeditFrom-pepr', function(event) {
		
        var telabel = $('input[name="tmplabel-pepr"]').val();
        var tedescription = $('textarea[name="tmpdescription-pepr"]').val();
        var tewidth = $('input[name="tmpwidth-pepr"]').val();
        var teheiht = $('input[name="tmpheiht-pepr"]').val();
        var eosize = $('input[name="tmposize-pepr"]').val();
        var tmpocolor=$('input[name="tmpocolor-pepr"]').val();
        var tmpbclor=$('input[name="tmpbclor-pepr"]').val();

        if(telabel==''){
            errorAlert('Label is Required !');
            $('input[name="telabel-pepr"]').focus();
            return false;
        }
        else if(tedescription==''){
            errorAlert('Description is Required !');
            $('input[name="tedescription-pepr"]').focus();
            return false;
        }
        else if(tewidth==''){
            errorAlert('Width is Required !');
            $('input[name="tewidth-pepr"]').focus();
            return false;
        }
        else if(teheiht==''){
            errorAlert('Height is Required !');
            $('input[name="teheiht-pepr"]').focus();
            return false;
        }
        else if(eosize==''){
            errorAlert('Outline Size is Required !');
            $('input[name="eosize-pepr"]').focus();
            return false;
        }
        else{
            $.ajax({
                url: "lib/functions.php?action=tmpeditFrom_pepr", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                    success: function(data)   // A function to be called if request succeeds
                    {
                    	tempLets_db_pepr.ajax.reload( null, false );
                    	$('#dbmodel-template-pepr').modal('hide'); 
                    }
            });
        return false;
        }
    });

	$(document).on('click', '.dup-itm-data', function(event) {
		var addDataId = $(this).attr('data-dup-val');
		$.post('lib/functions.php?action=duplicateItemData',{val:addDataId},function(data,txtStatus,xhr){
			table.ajax.reload( null, false );
			//table_db.ajax.reload( null, false ); 
		});
		return false;
	});

	$(document).on('click', '.dlete-itm-dat', function(event) {
		var addDataId = $(this).attr('data-dlete-val');
		// $.post('lib/functions.php?action=deleteItem',{val:addDataId},function(data,txtStatus,xhr){
		// 	table.ajax.reload( null, false );
		// 	table_db.ajax.reload( null, false ); 
		// });
		return false;
	});

	$(document).on('click', '.chldmodal-lbl-btn-edit', function(event) {

		var typ_v = $('#prop-chlddbmodel-edit').find('.prop-type-hid').val();
		var lbl_v = $('#prop-chlddbmodel-edit').find('.pcatmodal-lbl-input-edit-add').val();

		if((lbl_v=="") && (typ_v=="text" || typ_v=="number" || typ_v=="bool" || typ_v=="img")){
			errorAlert('Label Name is Required !');
            $('input[name="eosize-pepr"]').focus();
            return false;
		}else{
			//Text and Number Input
			if(typ_v=="text" || typ_v=="number" || typ_v=="bool"){
				var hid_id = $('#prop-chlddbmodel-edit').find('.prop-chlddbmodel-edit-hid').val();
				
				var def_v ="";
				if(typ_v=="bool"){
					if($('#prop-chlddbmodel-edit').find('input[name="bool-chk"]').prop('checked')==1){
						def_v = $('#prop-chlddbmodel-edit').find('input[name="bool-chk"]').val();
					}else{
						def_v = 0;
					}
					
				}else{
					def_v = $('#prop-chlddbmodel-edit').find('.chldmodal-lbl-input-edit').val();
				}
				
				$.post('lib/functions.php?action=updtOptedititmse',{hid_id:hid_id,lbl_v:lbl_v,def_v:def_v,typ_v:typ_v},function(data,txtStatus,xhr){
					if(data==1){
						$('#dvid'+hid_id).find('.datalbl').html(lbl_v);
						$('.prop-chlddbmodel-edit-close').trigger('click');
					}
				});
				return false;

			}else if(typ_v=="img"){

				var hid_id = $('#prop-chlddbmodel-edit').find('.prop-chlddbmodel-edit-hid').val();			

				var frmid=$("form[name='frm-editItm']")[0];
	        	var formData=new FormData(frmid);
	        	formData.append('lbl_v',lbl_v);
	        	formData.append('hid_id',hid_id);
	        	formData.append('typ_v',typ_v);

				$.ajax({
			        url:"lib/functions.php?action=updtOptedititmse",
			        method:"POST",
			        data:formData,
			        contentType: false,
	    			processData: false,
	    			cache: false,
			        success:function(data)
			        {
			    		$('#dvid'+hid_id).find('.datalbl').html(lbl_v);
						$('.prop-chlddbmodel-edit-close').trigger('click');
			        }
				});
				return false;
			}
		}
				
	});

	$(document).on('click', '.del-drpimg', function(event) {
		if(!$(this).hasClass('del-drpimg-new')){
			var ele= $(this);
			var id = $(this).attr('data-delidsdrp');
			$.post('lib/functions.php?action=deldrpoptimg',{hid:id},function(data,txtStatus,xhr){
				if(data==1){
					ele.parents('.def_val-edit-drp').find('.drpdwn-img').attr('src', 'upload_images/icon_drp_images/a.png');
					ele.parents('.def_val-edit-drp').find('.img-lnk-temp-drplst').attr('data-img-temps', 'a.png');
				}
			});
		}
	});

	$(document).on('click', '.del-drpimg-new', function(event) {
		var ele= $(this);
		ele.parents('.def_val-edit-drpp').find('.drpdwn-img').attr('src', 'upload_images/icon_drp_images/a.png');
		ele.parents('.def_val-edit-drpp').find('.img-lnk-temp-drplst').attr('data-img-temps', 'a.png');
	});

	$(document).on('click', '.chldmodal-lbl-btn-edit-drp-del', function(event) {
		var ele=$(this);
		var id = $(this).parents('.def_val-edit-drp').find('.del-drpimg').attr('data-delidsdrp');
		$.post('lib/functions.php?action=deldrpopts',{hid:id},function(data,txtStatus,xhr){
			if(data==1){
				ele.parents('.def_val-edit-drp').css( 'background-color', '#FF6C6C' );
			    ele.parents('.def_val-edit-drp').fadeOut("slow", function() {
			        $(this).remove();
			    });
			    return false;
			}
		});
	});

	/*-----------------------------------------------------------------------------*/
	$(document).on('change', '#drp-opt', function(event) {
		$('#past-area').empty();
		
		if($(this).val()=='text'){
			$('#def-text').clone().css('display', 'block').appendTo($('#past-area'));
		}else if($(this).val()=='img'){
			$('#def-img').clone().css('display', 'block').appendTo($('#past-area'));
		}else if($(this).val()=='number'){
			$('#def-number').clone().css('display', 'block').appendTo($('#past-area'));
		}else if($(this).val()=='bool'){
			$('#def-bool').clone().css('display', 'block').appendTo($('#past-area'));
		}else if($(this).val()=='imgbool'){
			$('#def-imgbool').clone().css('display', 'block').appendTo($('#past-area'));
		}else if($(this).val()=='imglist'){
			$('#def-imglist').clone().css('display', 'block').appendTo($('#past-area'));
		}else if($(this).val()=='list'){
			$('#def-list').clone().css('display', 'block').appendTo($('#past-area'));
		}
	});

	$('.btn-dispcatchkp').click(function(event) {
	    if($( ".chkall-pbox" ).hasClass('disp_chkpdiv')){
	        $( ".chkall-pbox" ).removeClass('disp_chkpdiv');
	    }else if(!$( ".chkall-pbox" ).hasClass('disp_chkpdiv')){
	        $( ".chkall-pbox" ).addClass('disp_chkpdiv');
	    } 
	    return false;               
	});

	$('.chknewprop').click(function(event) {
		$.post('lib/functions.php?action=checknewitemstate',{},function(data,txtStatus,xhr){
			if(data==1){
				location.reload();
			    return false;
			}else{
				return true;
			}
		});
	});
});