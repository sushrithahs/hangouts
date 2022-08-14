function display() {
  var expenseName = document.getElementById("expenseName").value;
  var payerid = document.getElementById("payerid").value;
  var amount = document.getElementById("amount").value;
  var totalfriends = document.getElementById("totalfriends").value;
  let finalAmount = amount / totalfriends;

  if (!expenseName || !payerid || !amount) {
    alert("Please enter all the details");
    return;
  }

  document.getElementById("expenseNameHeading").innerHTML = expenseName;

  document.getElementById(
    "final"
  ).innerHTML = `Every friend has to pay ₹ ${finalAmount} to ${payerid}`;
}
