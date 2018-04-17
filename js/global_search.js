$(document).ready(function() {
	var searchResult_JSON = [];
	var resultDisplay = "";
	$('#top_search_button').on('click',function(e)
	{
		/* var searchVal = $('#top_search_val').val();
		window.location="index.php?action=globalsearch&searchVal="+searchVal ; */
		if($('#top_search_val').val() == '')
		{
			alert("Search Keyword must be provided");
		}
		else
		{
			alert("Working on it");
		}
		e.preventDefault();
	});	
	$(document).keypress(function(e){
		if (e.which == 13){
			if ($('#top_search_val').is(':focus'))
			$("#top_search_button").click();
			e.preventDefault();
		}
	});
});
