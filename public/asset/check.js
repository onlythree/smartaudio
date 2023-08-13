function checkPhoneNumber(phone) {
    var flag = false;
    var phone = phone;
    if (phone != "") {
        var firstNumber = phone.substring(0, 2);
        if (
            (firstNumber == "03" ||
                firstNumber == "05" ||
                firstNumber == "07" ||
                firstNumber == "09" ||
                firstNumber == "08") &&
            phone.length == 10
        ) {
            if (phone.match(/^\d{10}/)) {
                flag = true;
            }
        } else if (firstNumber == "01" && phone.length == 11) {
            if (phone.match(/^\d{11}/)) {
                flag = true;
            }
        }
    }
    return flag;
}
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }
  