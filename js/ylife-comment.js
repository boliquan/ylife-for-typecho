/*
comment js for YLife (typecho)
*/

document.getElementById("textarea").onkeydown = function (moz_ev)
{
var ev = null;
if (window.event){
ev = window.event;
}else{
ev = moz_ev;
}
if (ev != null && ev.ctrlKey && ev.keyCode == 13)
{
document.getElementById("submit").click();
}
}