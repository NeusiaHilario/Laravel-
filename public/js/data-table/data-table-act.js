(function ($) {
	"use strict";
   
   
	   $(document).ready(function() {
   
			$('#data-table-basic').DataTable({
			   
			   "bFilter": false,
   
				language:{
					
			   
					"lengthMenu": "Apresentar _MENU_ linhas por página.",
					"zeroRecords": "Não há registos",
					"search": "Pesquisar:",
					"info": "Mostrando a página _PAGE_ de _PAGES_ ",
					
				  "infoEmpty": " Não há registos",	
			   "infoFiltered": "(Filtrando de _MAX_ registos)",
		   "paginate": {
			   "first":   "primeiro",
			   "last":    "último",
			   "next":    "Seguinte",
			   "previous":  "Anterior"
   
		   
		   }		 },
				
				
   
			});
	   });
	
   })(jQuery); 