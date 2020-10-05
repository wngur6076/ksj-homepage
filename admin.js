function createData() {
  var sendData = { query: $("#query").val() };
  console.log(sendData);

  return sendData;
}

function ajaxCall() {
  $.ajax({
    type: "POST",
    url: "admin.php",
    data: createData(),
    dataType: "json",
    success: function (data, status, xhr) {
      let html = "";
      for (key in data) {
        html += "<tr>";
        html += "<td>" + data[key].id + "</td>";
        html += "<td>" + data[key].userid + "</td>";
        html += "<td>" + data[key].email + "</td>";
        html += "<td>" + data[key].password + "</td>";
        html += "<td>" + data[key].name + "</td>";
        html += "</tr>";
      }

      $("#ajaxTbody").empty();
      $("#ajaxTbody").append(html);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(jqXHR.responseText);
    },
  });
}
