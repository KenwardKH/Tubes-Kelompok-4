// Email JS
function validate() {
  let name = document.querySelector(".name");
  let email = document.querySelector(".email");
  let phone = document.querySelector(".phone");
  let msg = document.querySelector(".message");
  let sendBtn = document.querySelector(".send-btn");

  sendBtn.addEventListener("click", (e) => {
    e.preventDefault();
    if (
      name.value == "" ||
      email.value == "" ||
      phone.value == "" ||
      msg.value == ""
    ) {
      emptyerror();
    } else {
      sendmail(name.value, email.value, phone.value, msg.value);
      success();
    }
  });
}

validate();

function sendmail(name, email, phone, msg) {
  emailjs.send("service_5qx3mna", "template_6ybr1kp", {
    to_name: name,
    from_name: email,
    phone: phone,
    message: msg,
  });
}

function emptyerror() {
  swal({
    title: "Oh No...",
    text: "Fields cannot be empty!",
    icon: "error",
  });
}

function success() {
  swal({
    title: "Email sent successfully",
    text: "We try to reply in 24 hours",
    icon: "success",
  });
}
