$(document).ready(function() {
  const inputlt = document.querySelector("#letra");
  const inputlt2 = document.querySelector("#letra2");

    $('#letra').on('keydown', function(event) {
        var regex = /^[A-Z a-z Á-á Ã-ã À-à Ç ç]+$/;
        var en = event.key;
  
     //   return en.replace(/);

      if (regex.test(en)) {
        return true;
      }else{
        return false;
      }
    });

    $('#letra2').on('keydown', function(event) {
      var regex = /^[A-Z a-z Á-á Ã-ã À-à Ç ç]+$/;
      var en = event.key;

   //   return en.replace(/);

    if (regex.test(en)) {
      return true;
    }else{
      return false;
    }
  });

    inputlt.addEventListener("paste", function(){

      const regex = new RegExp("^[A-Z a-z Á-á Ã-ã À-à Ç ç\b]+$");

      const self = this;

      setTimeout(function(){
        const texto = self.value;

        if(!regex.test(texto)){
          self.value = "";
        }
      }, 10);

    });

    inputlt2.addEventListener("paste", function(){

      const regex = new RegExp("^[A-Z a-z Á-á Ã-ã À-à Ç ç\b]+$");

      const self = this;

      setTimeout(function(){
        const texto = self.value;

        if(!regex.test(texto)){
          self.value = "";
        }
      }, 10);

    });
  });