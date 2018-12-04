/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

//log user out after 14 mins of innactivity

var timeOutObj;

timeOutObj = setTimeout(function(){
    localStorage.clear();
    window.location = '../views/logout.php?logout=1';

}, 300000);   //840000 will expire after twenty minutes

//$(document).click(function(){
//  if(typeof timeOutObj != "undefined") {
//     clearTimeout(timeOutObj);
//  }
//});

//function getUser(){
//  $('#user').load('../views/viewUser.php');
//}

//getUser();

function validateUserRegistration(form){
  var userName = form.userName.value;
  var userEmail = form.userEmail.value;

  if( userName && userEmail ){
    document.location.href = "registerUser.php?userName=" + userName + "&userEmail=" + userEmail;
  }else{
    $("#modalDataInputIssue").modal('show');
  }
}

function getCookie(c_name) {
  if (document.cookie.length > 0) {
    c_start = document.cookie.indexOf(c_name + "=");
    if (c_start != -1) {
      c_start = c_start + c_name.length + 1;
      c_end = document.cookie.indexOf(";", c_start);
      if (c_end == -1) {
        c_end = document.cookie.length;
      }
      return unescape(document.cookie.substring(c_start, c_end));
    }
    }
      return null;
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function createCookie(name,value,days) {
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 *1000));
      var expires = "; expires=" + date.toGMTString();
    }
    else {
      var expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function processOut() {

  var myModal = $("#myModalSelect");

  // now get the values from the table
  var delivery_id = $(".modal-body #bookId").val();

  document.location.href = "field_issues.php?processThis=" + delivery_id;
}

function dispatched(elem) {

  var myModal = $("#myModalSelect");

  // now get the values from the table
  var delivery_id = elem.innerHTML;

  $.ajax({
        type: "POST",
      url: 'dispatched.php',
      data: "track=" + delivery_id,
      success: function(data)
      {
        $(".modal-body #bookId").val( delivery_id );
        myModal.modal('show');
      }
    });
}

function commentsWindow(){
  var myModal = $("#myModalNorm");

  myModal.modal('show');
}
