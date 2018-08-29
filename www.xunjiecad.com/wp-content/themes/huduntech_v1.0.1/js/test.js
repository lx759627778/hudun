//唯一码
function getToken() {
    //随机6位
  var code = "";
  for (var i = 0; i < 6; i++) {
    code += Math.floor(Math.random() * 10);
  }

  var now = new Date();
  var year = now.getFullYear();
  if (parseInt(year) < 10) {
    year = "0" + year;
  } else {
    year = year;
  }
  var month = now.getMonth() + 1;
  if (parseInt(month) < 10) {
    month = "0" + month;
  } else {
    month = month;
  }
  var date = now.getDate();
  if (parseInt(date) < 10) {
    date = "0" + date;
  } else {
    date = date;
  }

  var hour = now.getHours();
  if (parseInt(hour) < 10) {
    hour = "0" + hour;
  } else {
    hour = hour;
  }

  var minute = now.getMinutes();
  if (parseInt(minute) < 10) {
    minute = "0" + minute;
  } else {
    minute = minute;
  }

  var second = now.getSeconds();
  if (parseInt(second) < 10) {
    second = "0" + second;
  } else {
    second = second;
  }

  var unique_code = "" + year + month + date + hour + minute + second + code;
  return unique_code;
}
