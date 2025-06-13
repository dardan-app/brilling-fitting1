// Future rollover/validation scripts
console.log("Website loaded.");
function validateForm() {
  const name = document.getElementById("fullName").value.trim();
  const email = document.getElementById("email").value.trim();
  const comments = document.getElementById("comments").value.trim();

  if (name === "" || email === "" || comments === "") {
    alert("All fields are required.");
    return false;
  }

  // Simple email format check
  const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if (!email.match(emailPattern)) {
    alert("Please enter a valid email address.");
    return false;
  }

  return true;
}
