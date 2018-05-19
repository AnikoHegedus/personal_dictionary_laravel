$(document).ready(function () {


window.onbeforeunload = function () {
    //make an ajax call here and modify your db
    $.ajax({
    type: "GET",
    dataType: 'json',
    contentType: 'application/json',
    url: '/dictionary/public/home/deleteScore',
    success: function (data) {
        alert(data);
    },
    error: function (err) {
      console.log(err);
    }
  })
}
}