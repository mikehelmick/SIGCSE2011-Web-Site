
function write_email( first, second ) {
    var string4 = first + "@" + second;
	document.write("<a href=" + "mail" + "to:" + first + "@" + second + ">" + string4 + "</a>");
}

function remove_frames()
{
  var thisPage = "http://www.sigcse.org" + self.location.pathname + self.location.hash + self.location.search;
  var thisLocal = "http://localhost" + self.location.pathname + self.location.hash + self.location.search;
  var testServer = "http://test.mikehelmick.com" + self.location.pathname + self.location.hash + self.location.search;
  if (top.location.toString().indexOf("sigcse2011/search.php") < 0) {
    if (top.location != thisPage && top.location != thisLocal  && top.location != testServer) {
      top.location = thisPage;
    }
  }
}
