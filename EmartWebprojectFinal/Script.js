function OpenHome() {
  window.open("./Home.html", "_self");
}

function OpenAbout() {
  window.open("./About.html", "_self");
}

function OpenProducts() {
  window.open("./Products.html", "_self");
}

function OpenContactus() {
  window.open("./Contact.html", "_self");
}
var alertPlaceholder = document.getElementById("errorid");
    var alertTrigger = document.getElementById("submitID");

    function alert(message, type) {
      var wrapper = document.createElement("div");
      wrapper.innerHTML =
        '<div class="alert alert-' +
        type +
        ' alert-dismissible" role="alert">' +
        message +
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
      alertPlaceholder.append(wrapper);
    }

    if (alertTrigger) {
      alertTrigger.addEventListener("click", function Check() {
        var nameregix = /^[A-Z][a-z]+$/;
        var namestr = document.getElementById("name").value;

        var emailregix =
          /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var emailstr = document.getElementById("email").value;

        var phoneregix = /^\+92[0-9]{10,}$/;
        var phonestr = document.getElementById("phone").value;
        
        if (nameregix.test(namestr)) {
          if (emailregix.test(emailstr)) {
            if (phoneregix.test(phonestr)) {
              alert("Form Submitted");
            } else {
              alert("Phone Not Valid");
            }
          } else {
            alert("Email Not Valid");
            if (phoneregix.test(phonestr)) {
            } else {
              alert("Phone Not Valid");
            }
          }
        } else {
          alert("Name Not Valid");
          if (emailregix.test(emailstr)) {
            if (phoneregix.test(phonestr)) {
            } else {
              alert("Phone Not Valid");
            }
          } else {
            alert("Email Not Valid");
            if (phoneregix.test(phonestr)) {
            } else {
              alert("Phone Not Valid");
            }
          }
        }
      });
    }