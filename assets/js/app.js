$(document).ready(function(){
	let getPrintItems = JSON.parse(localStorage.getItem('allCheckedBoxesValues'));

	var dataid = 1;
	$("#main").append('<div class="page" data-id="'+dataid+'"><div class="subpage"><div class="subinnerpage">');
	var pageWidth 		= 8.5;
	var pageHeight 		= 11;
	var NoOfCopy		= -1;
	var lastx			= -1;

    for (var x = 0; x < getPrintItems.length; x++) {
		var NoOfCopyfontID = getPrintItems[x].copyNo;
		let curHTML = $(".page:nth-last-child(1)").find(".subinnerpage").html();
		// $(".page:nth-last-child(1)").find(".subinnerpage").html(curHTML + `<div class="Listbox"><img src="print_imgs/${getPrintItems[x].trId}_print_image.png" /></div>`);
		$(".page:nth-last-child(1)").find(".subinnerpage").append(`<div class="Listbox"><img src="print_imgs/${getPrintItems[x].trId}_print_image.png" /></div>`);
		occupiedHeight = $(".page:nth-last-child(1)").find(".subinnerpage").height() / 96;
		console.log("occupiedHeight", occupiedHeight);
		// console.log("pageHeight", pageHeight);

		if(occupiedHeight >= pageHeight){
			dataid++;
			$(".page:nth-last-child(1)").find(".subinnerpage .Listbox:last").remove();
			$("#main").append('<div class="page" data-id="'+dataid+'"><div class="subpage"><div class="subinnerpage">');
			x--;
			continue;
		}

		// Check for the copy
		if(NoOfCopy == -1 && NoOfCopyfontID > 1){
			NoOfCopy = (NoOfCopyfontID - 1);
		}
		if(NoOfCopy > 0){
			x--;
			NoOfCopy--;
		}else{
			NoOfCopy = -1;
		}
	    setTimeout(function(){
			print_pagination()
		}, 500);
    }
    // });
});

		// var x = 0;

		// function myLoop () {
		//    setTimeout(function () {
		//       alert('hello');
		//       i++;
		//       if (i < 10) {
		//          myLoop();
		//       }
		//    }, 3000)
		// }

		// myLoop();

function print_pagination(){
	var totalpages = $('#main .page').length;
	$('.totalNumbers').text('/'+totalpages);
	$('.page').hide();
	$('.page:first').show();
}



// $('.numberList').text(e+1);
$(window).load(function(){
	$("#main .page").each(function(e) {
        if (e != 0){
            $(this).hide();
        }
    });
    $(".nextPage").click(function(){
        if ($("#main .page:visible").next().length != 0){
            $("#main .page:visible").next().show().prev().hide();
        } else {
            $("#main .page:visible").hide();
            $("#main .page:first").show();
        }
        activenumber();
        return false;
    });
    $(".previousPage").click(function(){
        if ($("#main .page:visible").prev().length != 0){
            $("#main .page:visible").prev().show().next().hide();
        } else {
            $("#main .page:visible").hide();
            $("#main .page:last").show();
        }
        activenumber();
        return false;
    });
});

function activenumber(){
	$('.numberList').text($('.page:visible').attr('data-id'));
}

$('#print_page').on('click',function(){
	window.print();
});