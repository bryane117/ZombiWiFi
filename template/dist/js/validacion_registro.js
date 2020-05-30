function otro() {
	if($('input:radio[name=check_otro]:checked').val() != 'empresarial')
	{
		$('#div_sel').css('display','none');
		$('#div_zona').css('display','none');
	}
	else 
	{
		$('#div_sel').css('display','block');
		$('#div_zona').css('display','block');
	}
}
