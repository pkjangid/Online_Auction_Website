function validate()
        {
            var Username=document.getElementById("username").value;
            var password=document.getElementById("password").value;
            
            if (Username=="admin"&& password=="admin")
             {
                alert("Login-Succesfully");
                window.location.href="file:///home/babamohanram/homepage.html";
                return false;
            }
            else{
                alert("Login-failed..! please written right Username or password OR not filled")
                
            }
        }

function pk()
{
    window.location.href="https://www.google.com";
}