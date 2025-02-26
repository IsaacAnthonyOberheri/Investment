
    //register email search function validation
//bitcoin

  let url;
    	let query = "/api/v1/ticker/24hr";
      query += '?symbol=BTCUSDT';
    	url = "https://api.binance.com" + query;


    var xmlhttp;
    	xmlhttp = new XMLHttpRequest();


      xmlhttp.onreadystatechange = function(){

    	if(xmlhttp.readyState==4 && xmlhttp.status==200){

        var volume = JSON.parse (xmlhttp.responseText).volume;
        var quoteVolume = JSON.parse (xmlhttp.responseText).quoteVolume;
          var priceChangePercent = JSON.parse (xmlhttp.responseText).priceChangePercent;
            var lastPrice = JSON.parse (xmlhttp.responseText).lastPrice;


            if (priceChangePercent < 0){
              document.getElementById('1daychange_BTC').style.color = 'red';

            }
            else{

              document.getElementById('1daychange_BTC').style.color = '#06f94b';
            }

let Nlastprice = lastPrice;
    	document.getElementById('percentage_change').innerHTML = priceChangePercent +"%";

          	document.getElementById('price_BTC').innerHTML = Nlastprice*2/2+"<br>";
  console.log(xmlhttp.responseText);
  }


    }

    	xmlhttp.open('GET', url, true);
    	xmlhttp.send();

//end of bitcoin







//ethereum


      var query2 = "/api/v1/ticker/24hr";
     query2 += '?symbol=ETHUSDT';
    var  url2 = "https://api.binance.com" + query2;


      var eth;
      eth = new XMLHttpRequest();


      eth.onreadystatechange = function(){

      if(eth.readyState==4 && eth.status==200){

        var volume = JSON.parse (eth.responseText).volume;
        var quoteVolume = JSON.parse (eth.responseText).quoteVolume;
          var priceChangePercent = JSON.parse (eth.responseText).priceChangePercent;
            var lastPrice = JSON.parse (eth.responseText).lastPrice;

            if (priceChangePercent < 0){
              document.getElementById('1daychange_ETH').style.color = 'red';

            }
            else{

              document.getElementById('1daychange_ETH').style.color = '#06f94b';
            }



      document.getElementById('1daychange_ETH').innerHTML = priceChangePercent +"%";

            document.getElementById('price_ETH').innerHTML = lastPrice*2/2 +"<br>";
      console.log(eth.responseText);
      }


      }

      eth.open('GET', url2, true);
      eth.send();


//end of ethereum






//Thether ......



      var query3 = "/api/v1/ticker/24hr";
     query3 += '?symbol=BUSDUSDT';
    var  url3 = "https://api.binance.com" + query3;


      var tht;
      tht = new XMLHttpRequest();


      tht.onreadystatechange = function(){

      if(tht.readyState==4 && tht.status==200){

        var volume = JSON.parse (tht.responseText).volume;
        var quoteVolume = JSON.parse (tht.responseText).quoteVolume;
          var priceChangePercent = JSON.parse (tht.responseText).priceChangePercent;
            var lastPrice = JSON.parse (tht.responseText).lastPrice;

            if (priceChangePercent < 0){
              document.getElementById('1daychange_tht').style.color = 'red';

            }
            else{

              document.getElementById('1daychange_tht').style.color = '#06f94b';
            }



      document.getElementById('1daychange_tht').innerHTML = priceChangePercent +"%";

            document.getElementById('price_tht').innerHTML = lastPrice*2/2 +"<br>";
      console.log(tht.responseText);
      }


      }

      tht.open('GET', url3, true);
      tht.send();

//end of Thether



//BNB ......



      var query4 = "/api/v1/ticker/24hr";
     query4 += '?symbol=BNBUSDT';
    var  url4 = "https://api.binance.com" + query4;


      var bnb;
      bnb = new XMLHttpRequest();


      bnb.onreadystatechange = function(){

      if(bnb.readyState==4 && bnb.status==200){

        var volume = JSON.parse (bnb.responseText).volume;
        var quoteVolume = JSON.parse (bnb.responseText).quoteVolume;
          var priceChangePercent = JSON.parse (bnb.responseText).priceChangePercent;
            var lastPrice = JSON.parse (bnb.responseText).lastPrice;

            if (priceChangePercent < 0){
              document.getElementById('1daychange_bnb').style.color = 'red';

            }
            else{

              document.getElementById('1daychange_bnb').style.color = '#06f94b';
            }



      document.getElementById('1daychange_bnb').innerHTML = priceChangePercent +"%";

            document.getElementById('price_bnb').innerHTML = lastPrice*2/2 +"<br>";
      console.log(bnb.responseText);
      }


      }

      bnb.open('GET', url4, true);
      bnb.send();

//end of BNB




//ADA ......



      var query5 = "/api/v1/ticker/24hr";
     query5 += '?symbol=ADAUSDT';
    var  url5 = "https://api.binance.com" + query5;


      var adah;
      adah = new XMLHttpRequest();


      adah.onreadystatechange = function(){

      if(adah.readyState==4 && adah.status==200){

        var volume = JSON.parse (adah.responseText).volume;
        var quoteVolume = JSON.parse (adah.responseText).quoteVolume;
          var priceChangePercent = JSON.parse (adah.responseText).priceChangePercent;
            var lastPrice = JSON.parse (adah.responseText).lastPrice;

            if (priceChangePercent < 0){
              document.getElementById('1daychange_ada').style.color = 'red';

            }
            else{

              document.getElementById('1daychange_ada').style.color = '#06f94b';
            }



      document.getElementById('1daychange_ada').innerHTML = priceChangePercent +"%";

            document.getElementById('price_ada').innerHTML = lastPrice*2/2 +"<br>";
      console.log(adah.responseText);
      }


      }

      adah.open('GET', url5, true);
      adah.send();

//end of ADA
