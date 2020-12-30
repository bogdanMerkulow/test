var btn = document.querySelectorAll("button");
var data = document.querySelectorAll("input");
for (var i = 0; i < btn.length; i++) 
{
      btn[i].onclick = function()
      {
            hide(data[i])
            var el = document.getElementById("product" + data[i].value);
            el.parentNode.removeChild(el);
      }
}
function hide(id)
{
      var xhr = new XMLHttpRequest();
      xhr.open('POST', '/ajax/call.php');
      xhr.setRequestHeader('Content-Type',
      'application/x-www-form-urlencoded');
      xhr.send('data=' + id.value);
}