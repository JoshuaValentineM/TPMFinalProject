function validateusername() {
    var username = document.getElementById("username").value;
    if (username == "") {
        document.getElementById("username").style.color = "red";
        document.getElementById("username").style.borderColor = "red";
    } else {
        document.getElementById("username").style.color = "green";
      document.getElementById("username").style.borderColor = "green";
    }
}

function validatepassword() {
    var password = document.getElementById("password").value;
    var passwordrequirement = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if(password.match(passwordrequirement)){
      document.getElementById("password").style.borderColor = "green";
      document.getElementById("password").style.color = "green";
    } else {
        document.getElementById("password").style.color = "red";
      document.getElementById("password").style.borderColor = "red";
    }
}

function confirmpassword() {
    var password = document.getElementById("password").value;
    var confirmpass = document.getElementById("password-confirm").value;
    if (confirmpass == "") {
      document.getElementById("password-confirm").style.borderColor = "red";
      document.getElementById("password-confirm").style.color = "red";
    } else if (confirmpass == password) {
      document.getElementById("password-confirm").style.color = "green";
      document.getElementById("password-confirm").style.borderColor = "green";
    } else {
      document.getElementById("password-confirm").style.color = "red";
      document.getElementById("password-confirm").style.borderColor = "red";
    }
}

function validatefullName() {
    var fullName = document.getElementById("fullName").value;
      if (fullName != "") {
        document.getElementById("fullName").style.borderColor = "green";
        document.getElementById("fullName").style.color = "green";
      } else {
        document.getElementById("fullName").style.borderColor = "red";
        document.getElementById("fullName").style.color = "red";
      }
  }

  function validateemail() {
    var email = document.getElementById("email").value;
    var emailrequirement = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.match(emailrequirement)){
        document.getElementById("email").style.color = "green";
      document.getElementById("email").style.borderColor = "green";
    } else {
        document.getElementById("email").style.color = "red";
      document.getElementById("email").style.borderColor = "red";
    }
  }

  function validatewhatsappNumber() {
    var whatsappNumber = document.getElementById("whatsappNumber").value;
    var whatsappNumberrequirement = /^\d{11,}$/;
    if(whatsappNumber.match(whatsappNumberrequirement)){
        document.getElementById("whatsappNumber").style.color = "green";
      document.getElementById("whatsappNumber").style.borderColor = "green";
    } else {
        document.getElementById("whatsappNumber").style.color = "red";
      document.getElementById("whatsappNumber").style.borderColor = "red";
    }
  }

//   function validatelineID() {
//     var lineID = document.getElementById("lineID").value;
//       if (lineID == "") {
//         document.getElementById("lineID").style.color = "red";
//         document.getElementById("lineID").style.borderColor = "red";
//       } else {
//           document.getElementById("lineID").style.borderColor = "green";
//           document.getElementById("lineID").style.color = "green";
//       }
//   }

//   function validategithubGitlabID() {
//     var githubGitlabID = document.getElementById("githubGitlabID").value;
//       if (githubGitlabID == "") {
//         document.getElementById("githubGitlabID").style.color = "red";
//         document.getElementById("githubGitlabID").style.borderColor = "red";
//       } else {
//           document.getElementById("githubGitlabID").style.borderColor = "green";
//           document.getElementById("githubGitlabID").style.color = "green";
//       }
//   }

//   function validatebirthPlace() {
//     var birthPlace = document.getElementById("birthPlace").value;
//       if (birthPlace == "") {
//         document.getElementById("birthPlace").style.color = "red";
//         document.getElementById("birthPlace").style.borderColor = "red";
//       } else {
//           document.getElementById("birthPlace").style.borderColor = "green";
//           document.getElementById("birthPlace").style.color = "green";
//       }
//   }

//   function validatedayBirthDate() {
//     var dayBirthDate = document.getElementById("dayBirthDate").value;
//       if (dayBirthDate == "") {
//         document.getElementById("dayBirthDate").style.color = "red";
//         document.getElementById("dayBirthDate").style.borderColor = "red";
//       } else {
//           document.getElementById("dayBirthDate").style.borderColor = "green";
//           document.getElementById("dayBirthDate").style.color = "green";
//       }
//   }

//   function validatemonthBirthDate() {
//     var monthBirthDate = document.getElementById("monthBirthDate").value;
//       if (monthBirthDate == "") {
//         document.getElementById("monthBirthDate").style.color = "red";
//         document.getElementById("monthBirthDate").style.borderColor = "red";
//       } else {
//           document.getElementById("monthBirthDate").style.borderColor = "green";
//           document.getElementById("monthBirthDate").style.color = "green";
//       }
//   }

//   function validateyearBirthDate() {
//     var yearBirthDate = document.getElementById("yearBirthDate").value;
//       if (yearBirthDate == "") {
//         document.getElementById("yearBirthDate").style.color = "red";
//         document.getElementById("yearBirthDate").style.borderColor = "red";
//       } else {
//           document.getElementById("yearBirthDate").style.borderColor = "green";
//           document.getElementById("yearBirthDate").style.color = "green";
//       }
//   }

//   function validateCV() {
//     var CV = document.getElementById("CV").value;
//       if (CV == "") {
//         document.getElementById("CV").style.color = "red";
//         document.getElementById("CV").style.borderColor = "red";
//       } else {
//           document.getElementById("CV").style.borderColor = "green";
//           document.getElementById("CV").style.color = "green";
//       }
//   }

//   function validateIDCard() {
//     var IDCard = document.getElementById("IDCard").value;
//       if (IDCard == "") {
//         document.getElementById("IDCard").style.color = "red";
//         document.getElementById("IDCard").style.borderColor = "red";
//       } else {
//           document.getElementById("IDCard").style.borderColor = "green";
//           document.getElementById("IDCard").style.color = "green";
//       }
//   }
