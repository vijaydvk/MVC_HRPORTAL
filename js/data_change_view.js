$(document).ready(function() {
	var dataChange_JSON = [];
	//var AssigneeList = [];
	var selectedTciketId;
	var uniqueTicket_JSON = [];
	var JSON_loaded_flag = false;
	if(JSON_loaded_flag == false)
	{
		$.when(getDataChangeDetails()).done(function(){				
			//$.when(getAssigneeList()).done(function(){
				$.when(dispDataChangeDetails(dataChange_JSON)).done(function(){
					$('[data-toggle="tooltip"]').tooltip();
					JSON_loaded_flag = true;
					checkSearchOrNot();
				//});
				/* $('.editable').editable({
					type:  'text',
					pk:    1,
					name:  'username',
					url:   'post.php',  
					title: 'Enter username'
				});  */
			});					
		});
	}
	else
	{
		checkSearchOrNot();
	}
/* 	function getAssigneeList()
	{
		return $.ajax({
			url:'controller/index1.php?action=getAssigneeList',
			type:'POST',
			success:function(data){
				AssigneeList = $.parseJSON(data);     
        },		
		error: function() {
			console.log("admin_view_tckets - getAssigneeList - Error - line 21"); 
			alert('something bad happened'); }
		}) ;
	}	 */
	
	function getDataChangeDetails()
	{
		return $.ajax({
			url:'controller/index1.php?action=getDataChangeDetails',
			type:'POST',
			success:function(data){
				//dataChange_JSON = $.parseJSON(data);  
				var js = $.parseJSON(data);  
				if (js.success == true)
				{
					dataChange_JSON = js.details;
				}
				else
				{
					$.notify({
						message: js.errors
					},{
						type: 'danger'
					});
				}
        },		
		error: function() {
			console.log("data_change_view - getDataChangeDetails - Error - line 67"); 
			alert('something bad happened'); }
		}) ;
	}
	function dispDataChangeDetails(dataJSON)
	{
		$('#view_data_change').dataTable( {
			"aaSorting":[],
			"aaData": dataJSON,
			"aoColumns": [
				{ "mDataProp": "RequestedBy" },
				{ "mDataProp": "RequestedFor" },
				{ "mDataProp": "SubmitTime" },
				{ "mDataProp": "RequestType" },				
			],
			initComplete : function() {
				  var api = this.api();
				  var input = $('.dataTables_filter input');
				  $clearButton = $('<input type = "button" data-toggle="tooltip" data-placement="top" title="Click to clear the search and refresh the table" value="Clear" />')
                       .click(function() {
						 input.val('');
						 api.search(input.val()).draw();
 						 //api.draw();
                       }) ;
					$('.dataTables_filter').append($clearButton); 
					       
					   
			},
			dom: 'Bflrtip',
			buttons: [
            {
                extend: 'excelHtml5',
                title: 'Data Change Details',
				exportOptions: {
                    columns: [  0, 1, 2, 3 ]
                },
				"text":'<i class="fa fa-file-excel-o" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Click to export info in Excel"></i>',	
			},
            {
                extend: 'pdfHtml5',
                title: 'Data Change Details',
				exportOptions: {
                    columns: [  0, 1, 2, 3 ]
				},
				"text":'<i class="fa fa-file-pdf-o" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Click to export info in PDF"></i>',
			},
			]
		});
		return true;
	}
	
 	
	/* $('.editable').click(function(e) {
		e.stopPropagation();
		$('.editable').editable('toggle');
	}); */
/* 	$(document).on('click','.ticket_approve_button',function ()
	{
		//alert($(this).attr('id'));
		var ticket_id = $(this).attr('id');
		if(validate(ticket_id))
		{		
		 var assignee_id = $('#'+ticket_id).val();		
		 request = $.ajax({
					type: 'POST',
					url: "index.php",
					data: {"action" : "saveTicketAssignee","refund_id": ticket_id , "tech_uid": assignee_id,
						"mode" : "assignee"	},
					});
				request.done(function (response){
				 	var js = $.parseJSON(response);
					
					if(js.success)
					{
						$.notify({
							message: js.msg
						},{
							type: 'success'
						});
						refreshJSONDataTables();					
					}
					else
					{
						$.notify({
							message: js.errors
						},{
							type: 'danger'
						});
					} 

				});
				request.fail(function ( jqXHR, textStatus, errorThrown)
				{
					$.notify({
							message: errorThrown
						},{
							type: 'danger'
						});
				}); 
		}
	});
	function refreshJSONDataTables()
	{
		//var table = $('#view_tickets_assigned').DataTable();
		//table.destroy();
		var table = $('#view_tickets_open').DataTable();
		table.destroy();
		//$.when(getAssignedTickets()).done(function(){		
		//dispAssignedTickets(ticketsAssigned_JSON);
		$.when(getOpenTickets()).done(function(){				
				$.when(getAssigneeList()).done(function(){
				dispOpenTickets(ticketsOpen_JSON);	
				});				
			//});	
		});
	}

	function validate(id)
	{
		if( $('#'+id).val() == "")
		{
			$.notify({
				message: 'Assignee must be selected'
			},{
				type: 'danger'
			});
			return false;
		}
		return true;
	} */
	function checkSearchOrNot()
	{
		var browserurl= window.location.href;
		//console.log(url);
		//url = url.toString();
		//console.log(url.length);
		var length = browserurl.indexOf("ticketID=");
		//console.log(length+9);
		//console.log(browserurl.length);
		var diff = browserurl.length - (length+9)
		var tID = browserurl.substr(browserurl.length - diff);
		//console.log(tID);
		/* if((browserurl.length == 72 ) 
			&& (length > -1 ))
		{ */
		if(length > -1 )
		{
			//window.location.href = "index.php?action=homePage" ;
			window.history.pushState('homePage', 'Title', 'index.php?action=homePage');
			filterSearch(tID);
		} 
		
		//alert(url);
	}
	function filterSearch(t_id)
	{
		var table = $('#view_tickets_open').DataTable();
		table.column(0).search(t_id).draw();
	}	
});

