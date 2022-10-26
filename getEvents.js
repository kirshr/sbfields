function getEvents(date) {
  $.ajax({
    type: "POST",
    url: "functions.php",
    data: "func=getEvents&date=" + date,
    success: function (html) {
      $("#event_list").html(html);
    },
  });
}
