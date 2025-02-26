const cursorSpan = document.querySelector(".cursor");
const typedTextspan = document.querySelector(".typed-text");
const textArray = ["Our job is to guide you on the path of success as we are fueled by our commitment to excellence and go the extra mile to make sure clients are fully satisfied. We believe in maintaining a positive mindset and creating partnerships with a purpose. Contact us today for an initial consultation, and find out more about how we can tailor our services to your needs."];
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

	setTimeout(newTextDelay);
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
