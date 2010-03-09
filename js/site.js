
function write_email( first, second ) {
    var string4 = first + "@" + second;
	document.write("<a href=" + "mail" + "to:" + first + "@" + second + ">" + string4 + "</a>");
}

function remove_frames()
{
  var thisPage = "http://www.sigcse.org" + self.location.pathname;
  var thisLocal = "http://localhost" + self.location.pathname;
  if (top.location != thisPage && top.location != thisLocal ) {
    top.location = thisPage;
  }
}
