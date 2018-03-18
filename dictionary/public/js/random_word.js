$(document).ready(function(){ 

    $("#search").keyup(function() {
        var searchText = $(this).val().toLowerCase();
        // Show only matching TR, hide rest of them
        $.each($("table tbody tr"), function() {
          if ($(this).text().toLowerCase().indexOf(searchText) === -1)
            $(this).hide();
          else $(this).show();
        });
      });

      $("#lg1").click(function() { 
        $.ajax({
          type: "POST",
          url: 'showdictionary',
          data:{
            'answInEn': true,
        },
          success: function(data) {
            /*var word = $(".test2").val();
            console.log(word);*/
            $("#test1").html("data");
            
            //console.log(word);
          },
          
        })/* .done(function( data ) {
          alert( "Data Saved: " + data ); */
        
        //$(this).text("I want a new English word");
        /* $.post( "?controller=home&action=index", data: { answInEn: false }, dataType: "html" )
        .success(function( $wordToPrint ) {
          $("#test").text( "Data Loaded: " + $wordToPrint );
        }); */
      
});
});