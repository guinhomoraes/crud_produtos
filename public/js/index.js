$(document).ready(function () {
	$(document).on('click','.btn-status-check',function()
	{
		if(confirm("Deseja realizar a seguinte ação?"))
		{
			return true;
		}
		else
		{
			return false;
		}
	})
});
