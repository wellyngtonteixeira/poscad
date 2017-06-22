Joomla.submitbutton = function(task)
{
	if (task == '')
	{
		console.log("ARROZ");
		return false;
	}
	else if(task == "matriz.add"){
		

	}
	else
	{

		console.log("CARNE = "+task);
		Joomla.submitform(task);
		task = "matriz.teste";
		Joomla.submitform(task);
		return true;
	}
}