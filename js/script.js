let login = document.querySelector(".login-form");

document.querySelector("#login-btn").onclick = () =>{
    login.classList.toggle('active');
}

document.querySelector("#bt-logout").onclick = () =>{
    window.location.href="logout.php";
}