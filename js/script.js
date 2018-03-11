//-- Changer de page dans les listes de biens
function changePage(i){
	  document.getElementById('numpage').value = i;
	  //document.frmPages.submit();
	  //alert(document.getElementById('numpage').value);
	  document.getElementById('frmPages').submit();
}
//-- Tri sur les listes 
function changeTri(v){
    document.getElementById('tri').value = v;
    document.getElementById('frmPages').submit();
    //document.frmPages.submit();
}



function initAlertEmailValidation(e) {
	$("#" + e).validate({errorClass: "error3",rules: {email: {required: !0}},messages: {email: language.validation_email_required},groups: {}})
}
function submitIndexContactRapide() {
	var e = $("#txtNom").val(), t = $(".mail").val();
	isEmail(t) && $("#frm_contact_rapide").valid() && $.ajax({type: "POST",url: "/controller/form/ajaxIndexContactRapide.php",data: {nom: e,email: t}}).done(function(e) {
		showRequestResult(e), $("#frm_contact_rapide")[0].reset()
	})
}
function showRequestResult(e) {
	alertify.alert(1 == e ? language.request_success : language.request_error)
}
function isEmail(e) {
	var t = new RegExp("^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$", "i");
	return t.test(e) || alertify.alert(language.validation_email_confirm), t.test(e)
}
//-- taille du viewport
function getViewPortSize(){

	var w = 0, h = 0;

	if(typeof( window.innerWidth ) == 'number'){
		w = window.innerWidth;
		h = window.innerHeight;
	}else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ){
		w = document.documentElement.clientWidth;
		h = document.documentElement.clientHeight;
	}else if( document.body && (document.body.clientWidth || document.body.clientHeight)){
		w = document.body.clientWidth;
		h = document.body.clientHeight;
	}else{
		w = -1;
		h = -1;
	}

	return [w,h];

}

var nbSlider, c = 1;

function slider(c){

	suivant = c + 1;

	if(suivant > nbSlider){
		suivant = 1;
	}

	$('.slider' + c).stop().animate({opacity: "0"}, 1000);
	$('.slider' + suivant).stop().animate({opacity: "1"}, 1000);

	setTimeout(function(){slider(suivant)}, 6000);

}

function initSlider(){

	var hauteurSlider;

	nbSlider = $('.slideshow-item').length,
	largeurEcran = $(window).width(),
	largeurMax = parseInt(nbSlider * largeurEcran);
	hauteurSlider = Math.floor(largeurEcran * 85 / 192);

	$('.slideshow-wrapper-outer').height(hauteurSlider)
	$('.slideshow-wrapper').width(largeurMax);
	$('.slideshow-wrapper').css({left:0});
	$('.slideshow-item').width(largeurEcran);

}

$( window ).resize(function(){

	initSlider();

});
$(document).ready(function(){

    $('.liChasse').hover(function(){
        $('.ssMenuChasse').slideDown(300)
    }, function(){
        $('.ssMenuChasse').slideUp(100);
    });

    $('.liBiens').hover(function(){
        $('.ssMenuBiens').slideDown(300);
    }, function(){
        $('.ssMenuBiens').slideUp(100);
    });

    $('.liContact').hover(function(){
        $('.ssMenuContact').slideDown(300);
    }, function(){
        $('.ssMenuContact').slideUp(100);
    });

    $('.liChasse').click(function(){
        $('.ssMenuChasse').slideDown(300)
    });

    $('.liBiens').click(function(){
        $('.ssMenuBiens').slideDown(300);
    });


    initSlider();
	setTimeout(function(){slider(c)}, 4000);

	$('#retour-listing').click(function(){
		$('#form_search').submit();
		return false;
	});

	$(".lien-btn").click(function(e) {
		e.preventDefault(),
		$(".lien-selected").removeClass("lien-selected"),
		$(this).addClass("lien-selected");
		var t = $(this).attr("data-div");
		$(".display-div").removeClass("display-div"),
		$("#" + t).addClass("display-div")
	}),
	initAlertEmailValidation("frm_contact_rapide"),
	initAlertEmailValidation("frm_contact");
	$("#email").click(function(e){
		e.preventDefault(), $("#ctcBien").slideToggle()
	}), $("img").error(function(){
		$(this).attr("src", "images/photo-indisponible.jpg")
	}), $("#commune").change(function(){
		$("#selectedVil").val($("#commune option:selected").html())
	})

	$("#toggleSearch").click(function() {
		$("#contentSearchForm").slideToggle(200);
		if(this.className == "on") {
			document.getElementById('toggleSearch').innerHTML = "D&eacute;plier le moteur de recherche";
			this.className = "off";
		} else {
			document.getElementById('toggleSearch').innerHTML = "Replier le moteur de recherche";
			this.className = "on";
		}
		return false;
	})

	$('#type').change(function(){
		if($('#type option:selected').parent().attr('label') == 'Achat'){
			$('#budget_achat').css('display', 'inline-block');
			$('#budget_location').css('display', 'none');

			$('#budget_achat').attr('name', 'site_frm_select_budget');
			$('#budget_location').removeAttr('name');
		}else if($('#type option:selected').parent().attr('label') == 'Location'){
			$('#budget_achat').css('display', 'none');
			$('#budget_location').css('display', 'inline-block');

			$('#budget_achat').removeAttr('name');
			$('#budget_location').attr('name', 'site_frm_select_budget');
		}
	});

	//swipebox (pour le diaporama photo sur page de détail d'un bien)
	var tableauSwipe = document.getElementsByClassName('swipebox');
	if(tableauSwipe.length > 0) {
		$('.swipebox').swipebox();
	}

	function changeSwiper(){

		$('.tof-item.w1.swipebox').fadeOut(300, function(){
			$(this).css('background-image', 'url('+ tableauSwipe[i].href +')');
			$(this).fadeIn(300);
		});

		if(i < tableauSwipe.length - 1){
			i = i + 1;
		}else{
			i = 0;
		}
		defilementAuto = setTimeout(changeSwiper, 6000);

	}

	var i = 0,
	defilementAuto = setTimeout(changeSwiper, 3000);

	$('.tof-item.w2').click(function(){
		var bgImg = $(this).css('background-image');
		bgImg = bgImg.replace("/400/","/1600/");

		clearTimeout(defilementAuto);
		
		bgImg = bgImg.replace("url(","");
		bgImg = bgImg.replace(")","");
		bgImg = bgImg.replace("\"","");
		bgImg = bgImg.replace(".jpg\"",".jpg");
		//alert(bgImg);
		$('#bigImgDetail img').attr('src', bgImg);
		
	});

	$('.js-itemlist-img-container, .js-itemlist-hover').hover(function(){
		var itemlist = $(this).parents('.js-itemlist');
		if ($(this).hasClass('js-itemlist-hover')) {
			itemlist.find('.js-itemlist-img-container').addClass('hover');
		}
	}, function(){
		var itemlist = $(this).parents('.js-itemlist');
		itemlist.find('.js-itemlist-img-container').removeClass('hover');
	});
});


function openListLots(o){
    var res = o.children;
    if(res[1].style.display == "none"){
        res[1].style.display = "block"
    }else{
        res[1].style.display = "none"
    }
    console.log(res[1].style.display);
}

