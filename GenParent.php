<htm>
<head>

 <!-- Required meta tags -->
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <style>
    body{
    background-color:white;
    }
    #navbarsExample09 ul li a:hover
    {
    color:red;
    }
    #p a:hover{
    color:red;
    }
    #logo{
    width:190px;
    height:150px;
    margin:0px auto;
    //background-color:pink;
    background-image:url("{% static 'images/logo.png' %}");
    float:left;
}
</style>
</head>
<body>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
//End
//Password Validation Code Start
function validatePassword()
{
//alert("Hiii");
var pass=document.getElementById("inputPassword").value;
if(pass.length<=3)
{
document.getElementById("sp").innerHTML="Weak Password";
document.getElementById("sp").style.color="red";
}
else if(pass.length>3 && pass.length<=6)
{
document.getElementById("sp").innerHTML="Strong Password";
document.getElementById("sp").style.color="yellow";
}
else
{
document.getElementById("sp").innerHTML="Very Strong Password";
document.getElementById("sp").style.color="green";
}
}
//Password Validation Code End

//Name Validation Code Start
function validateName()
{
//alert("hiii");
var pn=/^[A-Za-z ]{2,40}$/;
var nme=document.getElementById("name").value;
if(!pn.test(nme))
{
document.getElementById("name").style.color="red";
}
else
{
document.getElementById("name").style.color="green";
}
}
//Name Validation Code End

//Contact Number Validations Code Start
function validateContact()
{
//alert("hii");
var mn=/^[0-9]{1,10}$/;
var number=document.getElementById("contact").value;
if(!mn.test(number))
{
document.getElementById("contact").style.color="red";
}
else
{
document.getElementById("contact").style.color="green";
}

}
//Contact Number Validations Code End

//Email Validation Start
function validateEmail()
{
//alert("hiii");
var pe=/^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,7}$/;
var eml=document.getElementById("email").value;
if(!pe.test(eml))
{
document.getElementById("email").style.color="red";
}
else
{
document.getElementById("email").style.color="green";
}

}
//Email Validation End
</script>
</div>
</body>
</html>
