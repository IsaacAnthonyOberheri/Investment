const counters = document.querySelectorAll('.work_pro');
const speed = 200;
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







	

