function getValue(id) {
    return document.getElementById(id).value.trim();
};

function showError(key, mess) {
    document.getElementById(key + '_error').innerHTML = mess;
};

function validateform() {
    var flag = true;
    
    // 1 name
    var name = getValue('name_input');
    localStorage.setItem('name', JSON.stringify(name));
    if (name == '' || name.length > 20) {
        flag = false;
        showError('name', 'Vui lòng kiểm tra lại tên!')
    }

    // 2 phone
    var phone = getValue('phone_input');
    localStorage.setItem('phone', JSON.stringify(phone));
    if (phone == '' || !/^[0-9]{10}$/.test(phone)){
        flag = false;
        showError('phone', 'Vui lòng kiểm tra lại Phone!');
    }

    // 3 email
    var email = getValue('email_input');
    localStorage.setItem('email', JSON.stringify(email));
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!mailformat.test(email)){
        flag = false;
         
        showError('email', 'Vui lòng kiểm tra lại Email!');
    }

    // 4 message
    var message = getValue('tx-message');
    localStorage.setItem('message', JSON.stringify(message));
    if (message.length < 20) {
        flag = false;

        showError('message', 'Vui lòng kiểm tra lại Message(Tối thiểu 20 ký tự)!');
    }
     
    return flag;

}

function check() {
    var getname = getValue('username');
    var getpass = getValue('password');

    if (getname == 'admin' && getpass == 'admin1234') {
        return true;
    } else {
        return false;
    }
}

var db_name = JSON.parse(localStorage.getItem('name'));
document.getElementById("col-name").innerHTML = db_name;

var db_phone = JSON.parse(localStorage.getItem('phone'));
document.getElementById("col-phone").innerHTML = db_phone;

var db_email = JSON.parse(localStorage.getItem('email'));
document.getElementById("col-email").innerHTML = db_email;

var db_message = JSON.parse(localStorage.getItem('message'));
document.getElementById("col-message").innerHTML = db_message;

