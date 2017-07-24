function verifyCard() {
  var cardNum = document.getElementById("cardNumber").value;

  if(cardNum.substring(0,2) == "34" || cardNum.substring(0,2) == "37") {
    document.getElementById("cardtype").src = "img/americanexpress.png";
  }else if(cardNum.substring(0,1) == "4") {
    document.getElementById("cardtype").src = "img/visa.png";
  }else if(0 + cardNum.substring(0,2) >= 50 && 0 + cardNum.substring(0,2) <= 55) {
    document.getElementById("cardtype").src = "img/master.png";
  }else if(cardNum.substring(0,4) == "6011" || (0 + cardNum.substring(0,6) >= 622126 && 0 + cardNum.substring(0,4) <= 622925 ) ||
  (0 + cardNum.substring(0,3) >= 644 && 0 + cardNum.substring(0,3) <= 649 ) || cardNum.substring(0,2) == 65) {
    document.getElementById("cardtype").src = "img/discover.png";
  }else{
    document.getElementById("cardtype").src = "img/none.png";
  }
}
