Joomla.submitbutton = function(task)
{
	if (task == '')
	{
		return false;
	}
	else
	{
		var action = task.split('.');
		if (action[1] != 'cancel' && action[1] != 'close')
		{
			Joomla.submitform(task);
			/*task = 'disciplina.salvaMatrizes';
			Joomla.submitform(task);*/
			return true;
		}
	}
}