        
        var slide_container = document.querySelector('.slide_container');

        
         var slider4 = document.querySelectorAll('.slider_img');

         
         var slider5 = document.querySelector('.slider_img');

         var moving_text = document.querySelectorAll('.moving_text');
         
 

       var index = 0;

       var size = slider4[index].clientWidth;
    


     function updated(){   
     
        slide_container.style.transform = 'translateX(-'+size * index +'px)';
        slide_container.style.transition = 'all 1.5s ease-in-out';

    }



    function moving_text_f(){
        
  
 
 
     }

function display(){
    //slider5.getBoundingClientRect().width * index) == 2880
    
 if ((slider4[index].id) === 'third'){

    
    moving_text[index].classList.add('active_third');
    //alert('ok');
    
    }
else{
    moving_text[index].classList.remove('active_third');

}

}


    

    //setTimeout(moving_text_f, 2000);

moving_text_f();
//setInterval(moving_text_f, 2000);

    

function nextt(){
  
 if((index <= slider4.length-2)){
   index++;
   
  //alert(slider5.getBoundingClientRect().width * index);
      
 }



    

 else if(index = slider4.length-2){
    slide_container.style.transition ='none';
    index=0;
 }


 

 updated();

 //moving_text_f();



}


function amovement(){
    if ((slider4[index].id) === 'last'){

    
        moving_text[index].classList.add('amovement');
        //alert('ok');
        
        moving_text[index+3].classList.remove('amovement');
        
        }


        if ((slider4[index].id) === 'second'){

    
            moving_text[index].classList.add('amovement');
            //alert('ok');
            
            moving_text[index-1].classList.remove('amovement');
            
            }
    


    if ((slider4[index].id) === 'third'){

    
        moving_text[index].classList.add('amovement');
        //alert('ok');
        
        moving_text[index-1].classList.remove('amovement');
        
        }

        if ((slider4[index].id) === 'fourth'){

    
            moving_text[index].classList.add('amovement');
            //alert('ok');
            
        moving_text[index-1].classList.remove('amovement');
            
            }



        
                if ((slider4[index].id) === 'first'){

    
                    //alert('ok');
                    
                moving_text[index-1].classList.remove('amovement');
                    
                    }
}


amovement();

//transition

slide_container.addEventListener('transitionend', ()=>{
    
    if(slider4[index].id === 'first'){
        //alert('ok');
        slide_container.style.transition='none';
        index=0;
        
     
        slide_container.style.transform = 'translateX(-'+size * index +'px)';

        
    }

    

    amovement();
   

})


//end of transition

setInterval(nextt, 6000);

function prev(){
  
  if((index > 0)){
    index--;
   updated();
       
  }
 



  if(slider4[index].id === 'last'){
    //alert('ok');
    slide_container.style.transition='none';
    index=4;
    
 
    slide_container.style.transform = 'translateX(-'+size * index +'px)';
}
 
 }




 var radio_buttons = document.querySelectorAll('.radio_buttons');
 //alert(radio_buttons.length);
 radio_buttons.forEach(item=>item.addEventListener('click', plselect));

 function plselect(){
     if(this.id==='first'){
     index= 0;
     }

     if(this.id==='second'){
        index= 1;
        }


        
     if(this.id==='third'){
        index= 2;
        }
     updated();
 }