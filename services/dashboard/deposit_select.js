function select_plan(){
var select_plan = document.getElementById('select_plan');

var i = select_plan.selectedIndex;

var select_plan_name = select_plan.options.item(i).text;
//alert (i);
var amount_plan = document.getElementById('amount_plan');
var plan = amount_plan.options.item(i).text;
document.getElementById('select_val').innerHTML = plan;


//beginning of pop up value
document.getElementById('plan_value').innerHTML = '$'+plan;
document.getElementById('plan_name').innerHTML = select_plan_name+' '+ "investment plan";
//end of popup value



//button button enabled after onchange event;
document.getElementById('depositbutton').disabled=false;

}




document.getElementById("depositbutton").addEventListener("click", function() {
var btn = document.getElementsByClassName('popup_all')[0];
//var blur = document.getElementsByTagName('body')[0];
//blur.classList.add('active');

var blur = document.getElementById('blur');
blur.classList.toggle('active');

blur.classList.add('activated');




});








