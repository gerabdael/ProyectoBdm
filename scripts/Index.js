function validateInputs(e,acceptRegex){
    var keychar= !e.charcode ? e.wich : e.charCode;
    if ([13,8].indexOf(keychar)>1)
        return true;
    var regex = new RegExp(acceptRegex);
    var str = String.fromCharCode(keychar);
    if(regex.test(str))
        return true;
    e.preventDefault();
    return false;
}

$(document).on("keydown", "input", function(e){
    return validateInputs(e,"^[A-Za-z]+$");
})