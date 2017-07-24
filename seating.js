var numFC = Math.floor(Math.random() * 30); //Generate random amount of seats left out of 30 total
var FCava = 30 - numFC; //Determine how many seats are available for First Class seating

var numBC = Math.floor(Math.random() * 45); //Generate random amount of seats left out of 45 total
var BCava = 45 - numBC; //Determine how many seats are available for Business Class seating

var numE = Math.floor(Math.random() * 286); //Generate random amount of seats left out of 286 total
var Eava = 286 - numE; //Determine how many seats are available for Economy seating

var price = 0;


function seatsAvailable() {
  var name = document.getElementById("seating").value;

  if(name == "First Class"){
    if(FCava != 0){
      price = Math.floor((200 + ((30 / FCava) * 20) )); //Calculate price of tickets (original price + (total seats / available seats) * (10% of original price))
      document.getElementById("available").innerHTML = FCava + " of 30 seats available!";
      document.getElementById("cart").disabled = false;
      document.getElementById("pricesubmit").setAttribute("value", price);
      document.getElementById("seatPrice").innerHTML = "Price: $" + price;
    }else{
      document.getElementById("cart").disabled = true;
      document.getElementById("available").innerHTML = FCava + " of 30 seats available! Please choose another option!";
    }
  }else if(name == "Business Class"){
    if(BCava != 0){
      price = Math.floor((100 + ((45 / BCava) * 10) )); //Calculate price of tickets (original price + (total seats / available seats) * (10% of original price))
      document.getElementById("available").innerHTML = BCava + " of 45 seats available!";
      document.getElementById("cart").disabled = false;
      document.getElementById("pricesubmit").setAttribute("value", price);
      document.getElementById("seatPrice").innerHTML = "Price: $" + price;
    }else{
      document.getElementById("cart").disabled = true;
      document.getElementById("available").innerHTML = BCava + " of 45 seats available! Please choose another option!";
    }
  }else if(name == "Economy"){
    if(Eava != 0){
      price = Math.floor((50 + ((286 / Eava) * 5) )); //Calculate price of tickets (original price + (total seats / available seats) * (10% of original price))
      document.getElementById("available").innerHTML = Eava + " of 286 seats available!";
      document.getElementById("cart").disabled = false;
      document.getElementById("pricesubmit").setAttribute("value", price);
      document.getElementById("seatPrice").innerHTML = "Price: $" + price;
    }else{
      document.getElementById("cart").disabled = true;
      document.getElementById("available").innerHTML = Eava + " of 286 seats available! Please choose another option!";
    }
  }else if(name == ""){
    document.getElementById("cart").disabled = true;
  }
}
