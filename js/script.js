document.getElementById("regbutton").addEventListener('click', function(){
    document.getElementById("forgot").style.display = 'block';
    document.getElementById("login").style.display = 'none';
});

document.getElementById("logbutton").addEventListener('click', function(){
    document.getElementById("forgot").style.display = 'none';
    document.getElementById("login").style.display = 'block';
});

document.getElementById("logbutton").addEventListener('click', function(){
    document.getElementById("forgot").style.display = 'none';
    document.getElementById("login").style.display = 'block';
});

function login(){
    var xhr = new XMLHttpRequest();
    var data = new FormData(document.querySelector("form"));
    xhr.open("POST", "login.php");
    xhr.addEventListener("readystatechange", function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            alert(xhr.responseText);
        }
    });
    xhr.send(data);
}