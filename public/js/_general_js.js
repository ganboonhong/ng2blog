function focus_on_first_input(){
    $("form").find('input[type=text],textarea,select').filter(':visible:first').focus();
}