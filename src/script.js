$(document).ready(function(){

var error = [];

function clearForm() {
    $("[name=forname]").val('');
    $("[name=surname]").val('');
    $("[name=email-adress]").val('');
    $("[name=subject]").val('');
    $("[name=message]").val('');
    
}
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

function isValid(obj, message) {
    $('.alert').hide();
    if(obj.val() === '') {
        error.push(obj.attr('name'));
        obj.siblings('.form-error').show().html(message);
        obj.addClass('form-input-error');
    } else {
        if(obj.attr('name') === 'email-adress') {
            if(!isEmail(obj.val())) {
                error.push(obj.attr('name'));
                obj.siblings('.form-error').show().html('To nie poprawny adres email');
                obj.addClass('form-input-error');
                return false;
            }
       }
        error = error.filter(function(value){
            return value != obj.attr('name')
        })
        obj.siblings('.form-error').hide().html('');
        obj.removeClass('form-input-error');
    }
}
clearForm();
//Imię
$("[name=forname]").blur(function(){
    isValid($(this), 'Imię nie może pozostać puste'); 
});
//Nazwisko
$("[name=surname]").blur(function(){
    isValid($(this), 'Nazwisko nie może pozostać puste');  
});
//email
$("[name=email-adress]").blur(function(){
    isValid($(this), 'Adres email nie może pozostać pusty');
});

//temat
$("[name=subject]").blur(function(){
    isValid($(this), 'Temat nie może pozostać pusty');
});
//wiadomość
$("[name=message]").blur(function(){
    isValid($(this), 'Wiadomość nie może pozostać pusty');
});


$('#email-send').click(() => {
    $('.alert').hide();
    event.preventDefault();
    isValid($("[name=forname]"));
    isValid($("[name=surname]"));
    isValid($("[name=email-adress]"));
    isValid($("[name=subject]"));
    isValid($("[name=message]"));
    if(error.length > 0) {
        $('.alert-danger').show();
    } else {
        $('#email-form').submit();
    }
    
});

});