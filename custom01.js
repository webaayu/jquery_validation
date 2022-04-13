function validateForm()
{
    var name = $('#name').val();
    var email= $('#email').val();
    var tel= $('#tel').val();
    var optn=$('#optn').val();
        
    var ch=/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/;
    var emailValid = /^\w+([\.-]?\w+)+@\w+([\.:]?\w+)+(\.[a-zA-Z0-9]{2,3})+$/; 
    var phValid=/^\d{10}$/; 

    $(".valid").remove();
    
    if(name.length < 1) 
        {
            $('#name').after('<span class="valid">This field is required</span>');
        }
    else if(!ch.test(name))
        {
            $('#name').after('<span class="valid">Please enter valid name</span>');           
        }
    else if (email.length < 1)
        {
            $('#email').after('<span class="valid">Please enter your email address</span>');
        } 
    else if(!emailValid.test(email))
        {
            $('#email').after('<span class="valid">Please enter valid email address</span>');      
        }
    else if(tel==""||tel==" "||tel==null)
        {
            $('#tel').after('<span class="valid">Enter Mobile Number</span>');   
        }
    else if (tel< 10) 
        {
            $('#tel').after('<span class="valid">Mobile number must be at least 10 digits long</span>');
        }
    else if(!tel.match(phValid))
        {
            $('#tel').after('<span class="valid">Please enter valid phone number</span>');
        }
    else if(optn==""||optn==" "||optn==null)
        {
            $('#optn').after('<span class="valid">Please select your country</span>');
        }
    else if(!$("input:radio[name='gender']").is(":checked")) 
        {
        $('#sel_rd').after('<span class="valid">Please select your gender</span>');
        }
    else
        {
            $.ajax({
            type: 'post',
            url: 'form_submit.php',
            data: $('#my_form').serialize(),
            success: function (e) {
                alert("data added into database");
                location.reload();
                // window.location='form_submit.php';
                }
            });
        }
}

$(function () {
    $('form').on('submit', function (e) {
        e.preventDefault();
        validateForm(); 
    });
  });