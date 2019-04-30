function validateForm() {
  var x = document.forms["form"]["ref"].value;
  if (x == "") {
    alert("Reference must be filled out");
    return false;
  }
  var y = document.forms["form"]["title"].value;
  if (y == "") {
    alert("Title must be filled out");
    return false;
  }
  var z = document.forms["form"]["price"].value;
  if (z == "") {
    alert("Price must be filled out");
    return false;
  }
  var w = document.forms["form"]["qt"].value;
  if (w == "") {
    alert("Quantity must be filled out");
    return false;
  }
}
