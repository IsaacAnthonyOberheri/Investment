var her = document.getElementsByClassName('her')[0];
her.classList.add('her_first_active');


window.addEventListener('scroll', function(){
//alert('go');
var swan_investment = document.getElementsByClassName('swan_investment')[0];
let content_position = swan_investment.getBoundingClientRect().top;
let screenHeight = window.innerHeight;

console.log("content position = " +content_position+ " screen height = " +screenHeight);

if (content_position < screenHeight){
	swan_investment.classList.add('active');
	//alert('less than');
}
else{
		swan_investment.classList.remove('active');
}



var how_it_works_all_header = document.getElementsByClassName('how_it_works_all_header')[0];
let how1 = document.getElementsByClassName('how1')[0];
var how2 = document.getElementsByClassName('how2')[0];
var how3 = document.getElementsByClassName('how3')[0];
var content_position2 = how_it_works_all_header.getBoundingClientRect().top;


if (content_position2 < screenHeight){
	how1.classList.add('ahow1');
	how2.classList.add('ahow2');
	how3.classList.add('ahow3');
	how_it_works_all_header.classList.add('active_how');
}
else{
		how_it_works_all_header.classList.remove('active_how');
		how1.classList.remove('ahow1');
		how2.classList.remove('ahow2');
		how3.classList.remove('ahow3');
}




var test_header = document.getElementsByClassName('test_header')[0];
var first_testimony = document.getElementsByClassName('first_testimony')[0];
var last_testimony = document.getElementsByClassName('last_testimony')[0];
var testimony_right = document.getElementsByClassName('testimony_right')[0];
var content_position3 = test_header.getBoundingClientRect().top;

if (content_position3 < screenHeight){
	test_header.classList.add('headactive');
	first_testimony.classList.add('first_testimony_active');
	last_testimony.classList.add('last_testimony_active');
	testimony_right.classList.add('testimony_right_active');
}

else{
	test_header.classList.remove('headactive');
	
	first_testimony.classList.remove('first_testimony_active');
	last_testimony.classList.remove('last_testimony_active');
	
	testimony_right.classList.remove('testimony_right_active');
}






//beginning of investment plan


var investment_title = document.getElementsByClassName('investment_title')[0];
var column_one = document.getElementsByClassName('one')[0];
var column_two = document.getElementsByClassName('two')[0];
var column_three = document.getElementsByClassName('three')[0];
var column_four = document.getElementsByClassName('four')[0];


var content_position4 = investment_title.getBoundingClientRect().top;
var content_position5 = column_one.getBoundingClientRect().top;
var content_position6 = column_two.getBoundingClientRect().top;
var content_position7 = column_three.getBoundingClientRect().top;
var content_position8 = column_four.getBoundingClientRect().top;

if (content_position4 < screenHeight){
	investment_title.classList.add('investment_title_active');
	//alert('comeo');
	
}

else{
	investment_title.classList.remove('investment_title_active');
}


if (content_position5 < screenHeight){
	
	column_one.classList.add('oneactive');
}
else{
	
	column_one.classList.remove('oneactive');
	
	
	
}


if (content_position6 < screenHeight){

	column_two.classList.add('twoactive');

}

else{
	
	column_two.classList.remove('twoactive');
	
}

if(content_position7 < screenHeight){
	
	column_three.classList.add('threeactive');
}

else{
	
	
	column_three.classList.remove('threeactive');
}

if(content_position8 < screenHeight){
	
	column_four.classList.add('fouractive');
}

else{
	
	
	column_four.classList.remove('fouractive');
}




var counter1 = document.getElementsByClassName('counter1')[0];
var counter2 = document.getElementsByClassName('counter2')[0];
var counter3 = document.getElementsByClassName('counter3')[0];
var counter4 = document.getElementsByClassName('counter4')[0];

var counter1_position = counter1.getBoundingClientRect().top;
var counter2_position = counter2.getBoundingClientRect().top;
var counter3_position = counter3.getBoundingClientRect().top;
var counter4_position = counter4.getBoundingClientRect().top;


const counters = document.querySelectorAll('.work_pro');
let speed = 200;


if(counter1_position < screenHeight){
	//alert('go');
	counter1.classList.add('cactive1');
	
	
	counters.forEach(counter => {
	function updateCount(){
		const target = +counter.getAttribute('data-target');
		//console.log(target);
		const count = +counter.innerText;
		const inc = target/speed;
		
		if (count < target){
			counter.innerText = Math.round(count + inc);
			setTimeout(updateCount, 1);
		}
		else{
			counter.innerText = target;
			
		}
	}

updateCount();
	
	
});

	
	
}

else{
	
	counter1.classList.remove('cactive1');
	speed = 0;
}




if(counter2_position < screenHeight){
	//alert('go');
	
	counter2.classList.add('cactive2');
}

else{
	
	counter2.classList.remove('cactive2');
}



if(counter3_position < screenHeight){
	//alert('go');
	
	counter3.classList.add('cactive3');
}

else{
	
	counter3.classList.remove('cactive3');
}




if(counter4_position < screenHeight){
	//alert('go');
	
	counter4.classList.add('cactive4');
}

else{
	
	counter4.classList.remove('cactive4');
}

//beginning of partners ceo's

var partners_title = document.getElementsByClassName('partners_title')[0];

var partners_fp = document.getElementsByClassName('partners_fp')[0];
var partners_sp = document.getElementsByClassName('partners_sp')[0];
var partners_tp = document.getElementsByClassName('partners_tp')[0];
var partners_fop = document.getElementsByClassName('partners_fop')[0];

var fp_position = partners_fp.getBoundingClientRect().top;
var sp_position = partners_sp.getBoundingClientRect().top;
var tp_position = partners_tp.getBoundingClientRect().top;
var fop_position = partners_fop.getBoundingClientRect().top;

var partners_title_position = partners_title.getBoundingClientRect().top;

if(partners_title_position < screenHeight){
	partners_title.classList.add('partners_title_active');
}
else{
	
	partners_title.classList.remove('partners_title_active');
}


if (fp_position < screenHeight){
	partners_fp.classList.add('fp_active');
}
else{
	partners_fp.classList.remove('fp_active');
}




if (sp_position < screenHeight){
		partners_sp.classList.add('sp_active');
}
else{
	partners_sp.classList.remove('sp_active');
}



if (tp_position < screenHeight){
	partners_tp.classList.add('tp_active');
}
else{
	partners_tp.classList.remove('tp_active');
}



if (fop_position < screenHeight){
	partners_fop.classList.add('fop_active');
}
else{
	
	partners_fop.classList.remove('fop_active');
}


//end of partners ceo's





});





