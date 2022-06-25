  var currentFormOpen = "";
  
  $(document).ready(function(){
  
    $('#brochure-pdf').click(function(){
      currentFormOpen ="brochure-pdf";
    });

    $('#brochure-pricelist').click(function(){
      currentFormOpen ="brochure-pricelist";
    });
  
    $('#form-query').click(function(){
      currentFormOpen ="form-query";
    });

    $('#contact-query').click(function(){
      currentFormOpen ="contact-query";
    });

    $('#floor-fst').click(function(){
      currentFormOpen ="floor-fst";
    });

    $('#floor-snd').click(function(){
      currentFormOpen ="floor-snd";
    });

    $('#floor-trd').click(function(){
      currentFormOpen ="floor-trd";
    });

    $('#floor-four').click(function(){
      currentFormOpen ="floor-four";
    });

    $('#floor-fth').click(function(){
      currentFormOpen ="floor-fth";
    });

    $('#floor-six').click(function(){
      currentFormOpen ="floor-six";
    });

    $('#floor-page-fst').click(function(){
      currentFormOpen ="floor-page-fst";
    });

    $('#floor-page-snd').click(function(){
      currentFormOpen ="floor-page-snd";
    });

    $('#floor-page-third').click(function(){
      currentFormOpen ="floor-page-third";
    });

    $('#floor-page-four').click(function(){
      currentFormOpen ="floor-page-four";
    });

    $('#floor-page-five').click(function(){
      currentFormOpen ="floor-page-five";
    });

    $('#floor-page-six').click(function(){
      currentFormOpen ="floor-page-six";
    });

  });


function validateForm() {

  var name = document.forms["queryform"]["first_name"].value;
  if (name == "") {
    alert("Name must be filled out");
    document.queryform.first_name.focus();
    return false;
  }
  if(!document.queryform.first_name.value.match(/^[A-Z a-z]+$/))
   {
   alert("Please Enter Name Characters Alphabets Only.");
   document.queryform.first_name.focus();
   return false;
  }
  if(!document.queryform.email.value.match(/^[A-Za-z0-9\._\-+]+@[A-Za-z0-9_\-+]+(\.[A-Za-z0-9_\-+]+)+$/))
   {
   alert("Please Enter The Valid Email ID.");
   document.queryform.email.focus();
   return false;
   }
  
  if(!document.queryform.phone.value.match(/^\d{10}$/))
   {
   alert("Please Enter 10 Digits Mobile Number.");
   document.queryform.phone.focus();
   return false;
   }

   var captchaResponse = document.getElementById("g-recaptcha-response");
   var retURL = "";
   console.log(captchaResponse);
   if (captchaResponse == null || captchaResponse.value.trim() == "") {
    alert('reCAPTCHA is mandatory Query');
    return false;
  }

  if(currentFormOpen==="brochure-pdf")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="brochure-pricelist")
    retURL="http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/price.pdf";

  else if(currentFormOpen==="form-query")
    retURL="http://microsite.buniyad.co.in/bangalore/godrej-ananda/thank-you.html";

  else if(currentFormOpen==="floor-fst")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="floor-snd")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="floor-trd")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="floor-four")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="floor-fth")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="floor-six")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="floor-page-fst")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="floor-page-snd")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="floor-page-third")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="floor-page-four")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="floor-page-five")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="floor-page-six")
    retURL = "http://microsite.buniyad.co.in/bangalore/godrej-ananda/pdf/brochure.pdf";

  else if(currentFormOpen==="contact-query")
    retURL="http://microsite.buniyad.co.in/bangalore/godrej-ananda/thank-you.html";

  document.getElementById("retURL").value = retURL;

}

