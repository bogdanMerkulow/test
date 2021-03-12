
// JSON

var xhr = new XMLHttpRequest();
xhr.open('POST', '/path/ajax.php');
xhr.setRequestHeader("Content-Type", "application/json");
xhr.responseType = 'document';
var json = JSON.stringify(<?=$json?>);
xhr.send(json);

xhr.onload = () =>
{
    xhr.response.documentElement;
};

//POST

var xhr = new XMLHttpRequest();
xhr.open('POST', '/path/ajax.php');
xhr.setRequestHeader('Content-Type',
'application/x-www-form-urlencoded');
xhr.responseType = 'document';
xhr.send('data=' + id);

xhr.onload = () =>
{
    xhr.response.documentElement;
};