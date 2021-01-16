const pattern =/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/i;

$(document).ready(function(){

    $("div.sign-up-form > form").submit(function(e){
        e.preventDefault();

    const pass_1_field = $("input#pass_1");
    const pass_2_field = $("input#pass_2");
    const pass_1_value = pass_1_field.val();
    const pass_2_value = pass_2_field.val();
    let isFormOk = true;

    pass_1_field.next().remove(); 
    if(pass_1_value.length < 8 || !pattern.test(pass_1_value)){
        pass_1_field.parent().append("<p style='color:red'> La password deve essere almeno 8 caratteri,contenere un numero, una lettera ed un carattere speciale!</p>");
        isFormOk = false;
    }

    pass_2_field.next().remove(); 
    if(pass_2_value != pass_1_value){
            pass_2_field.parent().append("<p style='color:red' > Le password non corrispondono! </p>");
            isFormOk = false;
        }

    if(isFormOk){
        e.currentTarget.submit();
    }

    });
});

