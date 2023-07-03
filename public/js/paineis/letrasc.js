$(document).ready(function() {
    $('#letra').on('keydown', function(event) {
        var regex = /^[A-Z a-z]+$/;
        var en = event.key;
  
      if (regex.test(en)) {
        return true;
      }else{
        return false;
      }
    });
  });