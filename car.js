function setCart() {
  var carType = document.getElementById("car").value;

  if(carType == "SUV"){
    document.getElementById("cart").disabled = false;
    document.getElementById("carPrice").innerHTML = "Price: $300";
  }else if(carType == "Compact"){
    document.getElementById("cart").disabled = false;
    document.getElementById("carPrice").innerHTML = "Price: $150";
  }else if(carType == "Midsize"){
    document.getElementById("cart").disabled = false;
    document.getElementById("carPrice").innerHTML = "Price: $200";
  }else if(carType == "Luxury"){
    document.getElementById("cart").disabled = false;
    document.getElementById("carPrice").innerHTML = "Price: $500";
  }else{
    document.getElementById("cart").disabled = true;
  }
}
