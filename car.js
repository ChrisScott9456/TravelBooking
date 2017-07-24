function setCart() {
  var carType = document.getElementById("car").value;

  if(carType == "SUV_Rental_Car"){
    document.getElementById("cart").disabled = false;
    document.getElementById("carPrice").innerHTML = "Price: $300";
  }else if(carType == "Compact_Rental_Car"){
    document.getElementById("cart").disabled = false;
    document.getElementById("carPrice").innerHTML = "Price: $150";
  }else if(carType == "Midsize_Rental_Car"){
    document.getElementById("cart").disabled = false;
    document.getElementById("carPrice").innerHTML = "Price: $200";
  }else if(carType == "Luxury_Rental_Car"){
    document.getElementById("cart").disabled = false;
    document.getElementById("carPrice").innerHTML = "Price: $500";
  }else{
    document.getElementById("cart").disabled = true;
  }
}
