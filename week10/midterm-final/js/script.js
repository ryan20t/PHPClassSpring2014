
// XML HTTP Request
var xhr = new XMLHttpRequest();
var xhr2 = new XMLHttpRequest();

xhr.onreadystatechange = function() { 
    if ( xhr.readyState === 4 && xhr.status === 200 ) {  
        callback();  
   } 
};  

xhr2.onreadystatechange = function() { 
    if ( xhr2.readyState === 4 && xhr2.status === 200 ) {  
        callback2();  
   } 
};

var websiteField = document.querySelector('.website');
var websiteInfo = document.querySelector('.sitenametaken');
var emailField = document.querySelector('.email');
var emailInfo = document.querySelector('.emailInUse');

websiteField.addEventListener('blur',makeAJAXCall);
emailField.addEventListener('blur',makeAJAXCallTwo);


function makeAJAXCall(){
       
    xhr.open('POST', 'websitetaken.php', true);
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhr.send('website='+websiteField.value);

}

function makeAJAXCallTwo(){
       
    xhr2.open('POST', 'emailtaken.php', true);
    xhr2.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhr2.send('email='+emailField.value);

}


function callback() {
        var response = JSON.parse(xhr.responseText);  

        websiteInfo.innerHTML = response.taken;
       
}

function callback2() {
        var response = JSON.parse(xhr2.responseText);  

        emailInfo.innerHTML = response.taken;
       
}
