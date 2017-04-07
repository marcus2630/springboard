
          $(document).keyup(function(e) { 
            if ( $("*:focus").is("textarea, input") ) return;
          if (e.keyCode == 51) { // 3-tal
              window.location.href = "https://gsx.apple.com"; // url redirects to the new location
          }   // Trigger on esc keypress
          if (e.keyCode == 49) { // 1-tal
              $('#swap-lager').modal()  ; // url redirects to the new location
          }
          if (e.keyCode == 52) { // 4-tal
              window.location.href = "https://row.ups.com/Default.aspx?Company=beatscare2&LoginId=testuser&Password=testuser"; // url redirects to the new location
          } 
          if (e.keyCode == 27) { // escape
              $('#swap-lager').modal('hide')  ; // url redirects to the new location
              $( "#statusBox" ).show();
              $( "#statusBoxForm" ).hide();
          } 
          if (e.keyCode == 50) { // 2-tal
              window.location.href = "https://diagnostics.apple.com/"; // url redirects to the new location
          }
          if (e.keyCode == 71) {
              window.location.href = "http://google.dk/" ; // url redirects to the new location
          }   

           
      });



