$(document).ready(function() {
 $('.category-dropdown').click(function() {
  $('.category-list').show()

 });

 $('.category-dropdown').mouseleave(function() {
  $(this).children(':not("li")').hide()
 });

 $('category-list p').click(function() {
  $(this).siblings().removeClass('item-clicked')
  $(this).addClass('item-clicked')
 });
 $('.js-example-basic-single').select2({
  theme: "bootstrap4",
  minimumInputLength: 3,
 });
 $('.js-example-basic-multiple').select2({
  theme: "bootstrap4"
 });

 getActiveUnitsDispatch();
 dynamicTime();
 getBolosDispatch();
 get911callsDispatch();
 getStatus();
 getAOP();
});

var isFocused = false;

function getActiveUnitsDispatch() {
 $.ajaxSetup({
  cache: true
 });
 setInterval(function() {
  $( document ).ajaxComplete(function() {
    $('.select-units').focus(function() {
        isFocused = true;
    });
    $('.select-units').blur(function() {
        isFocused = false;
    });
  });
  if (!isFocused) {
  $('#dispUnitsTable').load('functions/leo/api.php?a=getActiveUnitsDispatch');
  }

 }, 3000);
}

function showVeh(str) {
 if (str == "") {
  document.getElementById("showVehInfo").innerHTML = "";
  return;
 } else {
  if (window.XMLHttpRequest) {
   // code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp = new XMLHttpRequest();
  } else {
   // code for IE6, IE5
   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
    document.getElementById("showVehInfo").innerHTML = this.responseText;
   }
  };
  xmlhttp.open("GET", "functions/leo/api.php?a=searchVeh&q=" + str, true);
  xmlhttp.send();
 }
}

function showName(str) {
 if (str == "") {
  document.getElementById("showPersonInfo").innerHTML = "";
  return;
 } else {
  if (window.XMLHttpRequest) {
   // code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp = new XMLHttpRequest();
  } else {
   // code for IE6, IE5
   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
    document.getElementById("showPersonInfo").innerHTML = this.responseText;
   }
  };
  xmlhttp.open("GET", "functions/leo/api.php?a=searchName&q=" + str, true);
  xmlhttp.send();
 }
}

function showWpn(str) {
 if (str == "") {
  document.getElementById("showWpn").innerHTML = "";
  return;
 } else {
  if (window.XMLHttpRequest) {
   // code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp = new XMLHttpRequest();
  } else {
   // code for IE6, IE5
   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
    document.getElementById("showWpn").innerHTML = this.responseText;
   }
  };
  xmlhttp.open("GET", "functions/leo/api.php?a=searchWpns&q=" + str, true);
  xmlhttp.send();
 }
}

function updateUnitStatus(selectObject) {
 var i = selectObject.id;
 var str = selectObject.value;
 if (window.XMLHttpRequest) {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp = new XMLHttpRequest();
 } else {
  // code for IE6, IE5
  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 }
 xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
   //hmmmzz
  }
 };
 xmlhttp.open("GET", "functions/leo/api.php?a=UpdateUnitStatus&q=" + str + "&i=" + i, true);
 xmlhttp.send();
 // alert(str + " " + uid);
 $(".select-units").blur();
 isFocused = false;
}

function getAOP() {
  $(document).ready(function() {
   $.ajaxSetup({
    cache: false
   });
   setInterval(function() {
    $('#checkAOP').load('functions/leo/api.php?a=getAOP');
   }, 3000);
  });
}

function setAOP(aop) {
    if (window.XMLHttpRequest) {
     // code for IE7+, Firefox, Chrome, Opera, Safari
     xmlhttp = new XMLHttpRequest();
    } else {
     // code for IE6, IE5
     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
      //hmmmzz
     }
    };
    xmlhttp.open("GET", "functions/leo/api.php?a=setAOP&q=" + aop, true);
    xmlhttp.send();
    $('#aop').modal('hide');
    
    // alert(str + " " + uid);
}

function assignCall(selectObject) {
 var id = selectObject.id;
 var value = selectObject.value;
 if (window.XMLHttpRequest) {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp = new XMLHttpRequest();
 } else {
  // code for IE6, IE5
  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 }
 xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
   //hmmmzz
  }
 };
 xmlhttp.open("GET", "functions/leo/api.php?a=assignCall&unit=" + value + "&id=" + id, true);
 xmlhttp.send();
 // alert(str + " " + uid);
}

function dynamicTime() {
 $.ajaxSetup({
  cache: false
 });
 setInterval(function() {
  $('#getTime').load('functions/leo/api.php?a=dynamicTime');
 }, 1000);
}

function getBolosDispatch() {
 $.ajaxSetup({
  cache: false
 });
 setInterval(function() {
  $('#getBolos').load('functions/leo/api.php?a=getBolosDispatch');
 }, 3000);
}

function get911callsDispatch() {
 $.ajaxSetup({
  cache: false
 });
 setInterval(function() {
  $('#get911calls').load('functions/leo/api.php?a=get911callsDispatch');
 }, 3000);
}

function getStatus() {
 $.ajaxSetup({
  cache: false
 });
 setInterval(function() {
  $('#checkStatus').load('functions/leo/api.php?a=getStatus');
 }, 3000);
}

$(document).ready(function() {
 $("#dismiss").delay(3000).fadeOut("slow");
});
