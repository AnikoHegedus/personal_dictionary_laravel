$(document).ready(function () {

  $("#search").keyup(function () {
    var searchText = $(this).val().toLowerCase();
    // Show only matching TR, hide rest of them
    $.each($("table tbody tr"), function () {
      if ($(this).text().toLowerCase().indexOf(searchText) === -1)
        $(this).hide();
      else $(this).show();
    });
  });
  $("#lg1").click(function () {
    showRandomWordInLg1(true);
  });
  $("#lg2").click(function () {
    showRandomWordInLg1(false);
  });
});


function showRandomWordInLg1(boolean) {
  $.ajax({
    type: "GET",
    dataType: 'json',
    contentType: 'application/json',
    url: '/dictionary/public/home/randomWord/' + boolean,
    success: function (data) {
      var lg1 = data[0];
      var lg2 = data[1];
      $("#word").html(lg1);
      $("#solution_hidden").val(lg2);
      
    },
    error: function (err) {
      console.log(err);
      $("#word").html(err.responseText);
    }
  })
}

