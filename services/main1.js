const cursorSpan = document.querySelector(".cursor");
const typedTextspan = document.querySelector(".typed-text");
const textArray = ["Financial intelligence plays a key role in the growth and development of our economy, as we all know the right investments today guarantees your source of income tomorrow."];
const typingDelay = 50;

const newTextDelay = 1000;
let textArrayIndex = 0;
let charIndex = 0;

function type(){
	if(!cursorSpan.classList.contains("typing"))cursorSpan.classList.add("typing");
		

	if(charIndex<textArray[textArrayIndex].length){
		
		typedTextspan.textContent += textArray[textArrayIndex].charAt(charIndex);
		charIndex++;
		setTimeout(type, typingDelay);
		
		
	}

else{
	
	setTimeout(erase, newTextDelay);
	cursorSpan.classList.remove("typing");
	
	
}	

	
}

function erase(){
	if(charIndex > 0){
		typedTextspan.textContent = textArray[textArrayIndex].substring(0, charIndex -1);
		charIndex--;
		setTimeout(erase, erasingDelay);
		
		
	}
	
	else{
		textArrayIndex++;
		if(textArrayIndex >= textArray.length)textArrayIndex=0;
		
		setTimeout(type, typingDelay +1100);
		
	}
}


document.addEventListener("DOMContentLoaded", function(){
	
	if(textArray.length) setTimeout(type, newTextDelay + 250);
	
});
	




















