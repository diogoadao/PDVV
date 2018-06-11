function Login(email, password) {
    console.log(email);
    console.log(password);
    jQuery.ajax({
        type: "POST",
        url: '../../assets/php/login.php',
        dataType: 'json',
        data: {
            email: email,
            password: password
        },

        success: function (data) {
            console.log(data);
            if (data != null) {
                swal({
                    position: 'center',
                    type: 'success',
                    title: 'Access Granted',
                    showConfirmButton: false,
                    timer: 1500
                })

                setTimeout(function () {
                    var time = 43200000;
                    ls2.save('session_code', data['access_key'], time);
                    localStorage.setItem('id', data['id']);
                    localStorage.setItem('fname', data['first_name']);
                    localStorage.setItem('lname', data['last_name']);
                    localStorage.setItem('email', data['email']);
                    localStorage.setItem('rank', data['rank']);
                    if (data['rank'] >= 1) {
                        location.href = '../html/DashBoard.php';
                    } else {
                        location.href = '../html/DashBoard-A.php';
                    }

                }, 1502);

            } else {
                swal({
                    position: 'center',
                    type: 'error',
                    title: 'Access Denied',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        },


    });
}

function Logout() {

    localStorage.removeItem('session_code');
    localStorage.removeItem('id');
    localStorage.removeItem('email');
    localStorage.removeItem('rank');
    localStorage.removeItem('fname');
    localStorage.removeItem('lname');
    location.href = "login.html";

}


var ls2 = {
    save: function (key, jsonData, expirationMS) {
        if (typeof (Storage) == "undefined") {
            return false;
        }
        var record = {
            value: JSON.stringify(jsonData),
            timestamp: new Date().getTime() + expirationMS
        }
        localStorage.setItem(key, JSON.stringify(record));
        return jsonData;
    },
    load: function (key) {
        if (typeof (Storage) == "undefined") {
            return false;
        }
        var record = JSON.parse(localStorage.getItem(key));
        if (!record) {
            return false;
        } else {
            if (new Date().getTime() < record.timestamp && JSON.parse(record.value)) {
                return JSON.parse(localStorage.getItem(key));
            } else {
                localStorage.removeItem(key);
                return false;
            }
        }

    }
}

function acessControl() {
    if (localStorage.getItem('rank') == undefined) {
        location.href = "login.html"
    }
}

function acessControlAdmin() {
    if (localStorage.getItem('rank') == '1' || localStorage.getItem('rank') == undefined) {
        location.href = "DashBoard.php"
    }

}


function checkSession() {
    if (ls2.load('session_code') == false) {
        location.href = 'https://thmc.ddns.net/test/src/expired.html'
    }
}

function loginCheck() {
    if (ls2.load('session_code') != false) {

        if (localStorage.getItem('rank') == '0') {
            location.href = "DashBoard-A.php";

        } else {
            location.href = "DashBoard.php";
        }
    }
}

function Lock() {
    location.href = "lock.php";
}

function LockUpdate() {

    if (localStorage.getItem('fname') === null) {
        location.href = 'https://thmc.ddns.net/test/src/html/login.html'
    } else {
        localStorage.removeItem('session_code');
        localStorage.removeItem('id');
        localStorage.removeItem('rank');
        console.log(localStorage.getItem('fname') + " " + localStorage.getItem('lname'));
        var doc = document.getElementById('fullname');
        doc.innerHTML = localStorage.getItem('fname') + " " + localStorage.getItem('lname');
    }

}

function localtemp(objButton){
    var id = objButton.value;
    localStorage.setItem('temp', id);
}
function refreshiframe(){
    document.getElementById('metabase').src = document.getElementById('metabase').src
}

function Refresh(){
    window.location.reload();
}