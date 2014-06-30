/*  Author: Grapheme Group
 *  http://grapheme.ru/
 */

(function($){
	var mainOptions = {target: '#form-request',beforeSubmit: mt.ajaxBeforeSubmit,success: mt.ajaxSuccessSubmit,type:'post'};
	$("#form-feedback").submit(function(){
		var options = mainOptions;
		options.target = null;
		options.dataType = 'json';
		options.success = function(response,status,xhr,jqForm){
			if(response.status){$(jqForm).resetForm();}
			mt.ajaxSuccessSubmit(response,status,xhr,jqForm);
			$(jqForm).find("div.form-request").html(response.message);
		}
		$(this).ajaxSubmit(options);
		return false;
	});
	$("a.select-corps").click(function(event){
		event.preventDefault();
		if($(this).parents('th').hasClass('active-table-building') == false){
			var _this = this; var corps = $(this).attr('data-item');
			$("#table-select-corps th").removeClass('active-table-building');
			$(_this).parents('th').addClass('active-table-building');
			$("#div-table-select-floor").load(mt.baseURL+"load-corps-floor",
				{'corps':corps},
				function(){
					$("a.select-floor").on('click',function(event){
						event.preventDefault();
						if($(this).parents('th').hasClass('active-table-floor') == false){
							selectFloor($(this));
						}
					});
					var _floor = $("#table-floor-list .active-table-floor").find('a.select-floor').attr('data-item');
					setTablerentList(corps,_floor);
				}
			);
		}
	});
	$("a.select-floor").click(function(event){
		event.preventDefault();
		if($(this).parents('th').hasClass('active-table-floor') == false){
			selectFloor($(this));
		}
	});
	function selectFloor(floor){
		$("table.table-floor th").removeClass('active-table-floor');
		$(floor).parents('th').addClass('active-table-floor');
		var _floor = $(floor).attr('data-item');
		var corps = $("#table-select-corps .active-table-building").find('a.select-corps').attr('data-item');
		setTablerentList(corps,_floor);
	}
	function setTablerentList(corps,_floor){
		$.ajax({
			url: mt.baseURL+"load-floor-rent",type: 'POST',dataType: 'json',data:{'corps':corps,'floor':_floor},
			beforeSend: function(){
				$("#table-rent-list").addClass('loading');
			},
			success: function(data,textStatus,xhr){
				if(data.status === true){
					$("#table-rent-list").removeClass('loading').html(data.tablerent);
					$("a.a-building-plan").attr('href',data.planlink);
				}
			},
			error: function(xhr,textStatus,errorThrown){
				$("#table-rent-list").removeClass('loading');
				$("a.a-building-plan").attr('href','#');
			}
		});
	}
})(window.jQuery);