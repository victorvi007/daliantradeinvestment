
// jQuery(document).ready(function($){

//     $('#harmbugger').click(()=>{
//        $('#mobileMenu').toggle('slow');
//        alert('hello')
//    })
//    $('#harmbugger').click(()=>{
//        $('#harmbugger i').toggleClass('fas fa-times','slow')
//    })
    
//     });

$(document).ready(()=>{
        $('#harmbugger').click(()=>{
       $('#mobileMenu').toggle('slow');
   })
   $('#harmbugger').click(()=>{
       $('#harmbugger i').toggleClass('fa-times','slow')
   })
})

function copy() {
    var copyText = document.getElementById("address");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copyText.value);
    alert("Copied");
  }

