const emailContact = document.getElementById("contactUs-email");
const nameContact = document.getElementById("contactUs-name");

let emailRegex = /^\S+@\S+\.\S+$/;
let nameRegex = /^[a-zA-Z\-]+$/;

emailContact.addEventListener("input", () => {
  console.log("hey");
  if (emailContact.value.match(emailRegex)) {
    emailContact.style.backgroundColor = "green";
  } else {
    emailContact.style.backgroundColor = "red";
  }
});

nameContact.addEventListener("input", () => {
  if (nameContact.value.match(nameRegex)) {
    nameContact.style.backgroundColor = "green";
  } else {
    nameContact.style.backgroundColor = "red";
  }
});
