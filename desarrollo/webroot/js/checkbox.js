  $(function(){
				
            	$('input').checkBox();
				
				$('#toggle-all').click(function(){
					$('#example input[type=checkbox]').checkBox('toggle');
					return false;
				});
				
				$('#check-all').click(function(){
					$('#example input[type=checkbox]').checkBox('changeCheckStatus', true);
					return false;
				});
				$('#uncheck-all').click(function(){
					$('#example input[type=checkbox]').checkBox('changeCheckStatus', false);
					return false;
				});
				$('#check-2').click(function(){
					$('#example input[type=radio]:eq(1)').checkBox('changeCheckStatus', true);
					return false;
				});
				$('#native').click(function(){
					//native methods
					$('#example input[type=radio]:eq(0)').attr({checked: true, disabled: true})
						//reflect the current state
						.checkBox('reflectUI');
					return false;
				 });
				 $('#native-prop').click(function(){
					//native methods
					$('#example input[type=radio]:eq(2)').prop({checked: true});
					return false;
				 });
			});