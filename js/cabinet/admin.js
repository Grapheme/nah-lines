/*  Author: Grapheme Group
 *  http://grapheme.ru/
 */

(function($){
	var mainOptions = {target: '#form-request',beforeSubmit: mt.ajaxBeforeSubmit,success: mt.ajaxSuccessSubmit,type:'post'};
	$("#form-sign-in").submit(function(){
		var options = mainOptions;
		options.target = null;
		options.dataType = 'json';
		options.success = function(response,status,xhr,jqForm){
			if(response.status){mt.redirect(response.path);}else{mt.ajaxSuccessSubmit(response,status,xhr,jqForm);$(jqForm).find("div.form-request").html(response.message);}
		}
		$(this).ajaxSubmit(options);
		return false;
	});
	$("select.rent-filter").change(function(){
		
		var corps = $("#filter-corps").val();
		var _floor = $("#filter-floor").val();
		if(corps == 0 && _floor == 0){$("tr.table-tr-rent").removeClass('hidden');
		}else{$("tr.table-tr-rent").addClass('hidden');}
		if(corps > 0 && _floor > 0){
			$("tr.table-tr-rent[data-corps="+corps+"][data-floor="+_floor+"]").removeClass('hidden');
		}else{
			if(corps > 0){$("tr.table-tr-rent[data-corps="+corps+"]").removeClass('hidden');
			}else if(_floor > 0){$("tr.table-tr-rent[data-floor="+_floor+"]").removeClass('hidden');}
		}
		
	});
	$("#insert-rent-form").submit(function(){
		var options = mainOptions;
		options.target = null;
		options.dataType = 'json';
		options.success = function(response,status,xhr,jqForm){
			if(response.status){
				$("#div-insert-item").slideUp(500,function(){
					$("#div-insert-item").remove();
					$("#form-request").html(response.message);
				})
			}else{
				mt.ajaxSuccessSubmit(response,status,xhr,jqForm);
				$("#form-request").html(response.message);
			}
		}
		$(this).ajaxSubmit(options);
		return false;
	});
	$("#update-rent-form").submit(function(){
		var options = mainOptions;
		options.target = null;
		options.dataType = 'json';
		options.success = function(response,status,xhr,jqForm){
			if(response.status){
				$("#div-update-item").slideUp(500,function(){
					$("#div-update-item").remove();
					$("#form-request").html(response.message);
				})
			}else{
				mt.ajaxSuccessSubmit(response,status,xhr,jqForm);
				$("#form-request").html(response.message);
			}
		}
		$(this).ajaxSubmit(options);
		return false;
	});
	$("a.link-operation-account").click(function(){mt.currentElement = $(this).attr("data-src")});
	$("#btn-modal-confirm-user").click(function(){
		if(mt.currentElement){
			var url = $("a.link-operation-account[data-src='"+mt.currentElement+"']").attr('data-url');
			$.post(url,{'parameter':mt.currentElement},function(data){
				if(data.status){$("a.link-operation-account[data-src='"+mt.currentElement+"']").parents("tr.table-tr-rent").remove();}
				$("#confirm-user").modal('hide');
			},"json");
		}
	});
	
	$("button.event-status").click(function(event){
		if($(this).hasClass("active")){return false;}
		var _this = this;
		var postdata = $(_this).parents('div.btn-group').attr('data-account');
		$.post(mt.baseURL+"change-event-status",{'postdata':postdata},
				function(data){
					$(_this).removeClass('btn-success').removeClass('btn-danger');
					$(_this).siblings(':button').removeClass('btn-success').removeClass('btn-danger');
					if(data.status){$(_this).addClass('btn-success');}else{$(_this).addClass('btn-danger');}
				},"json");
		
	})
})(window.jQuery);