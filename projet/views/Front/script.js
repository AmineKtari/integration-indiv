function validateForm() {
  var x = document.forms["sav"]["id"].value;
  if (x == "") {
    alert("ID must be filled out");
    return false;
  }
  var y = document.forms["sav"]["prenom"].value;
  if (y == "") {
    alert("Prenom must be filled out");
    return false;
  }
  var z = document.forms["sav"]["mail"].value;
  if (z == "") {
    alert("Mail must be filled out");
    return false;
  }
  var w = document.forms["sav"]["sujet"].value;
  if (w == "") {
    alert("Subject must be filled out");
    return false;
  }
  var v = document.forms["sav"]["msg"].value;
  if (v == "") {
    alert("Message must be filled out");
    return false;
  }
}