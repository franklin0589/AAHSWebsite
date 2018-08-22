
<form>
    <input id="email" placeholder="email">
    <input id="password" placeholder="password" type="password">
    <input type="submit" id="login">
</form>

<script>
    $("document").ready(function(){
    var Udatabase=firebase.database().ref("Login")
    var safe=false;
    const email= document.getElementById("email");
    const password= document.getElementById("password");
    const loginSubmitButton= document.getElementById("login");
    const loginArray=[];
    const passwordLoginArray=[];
    Udatabase.on('child_added',storeUsernamesAndPassword);
        function storeUsernamesAndPassword(response){
            loginArray.push(response.val().Username);
            passwordLoginArray.push(response.val().Password);
         }
        loginSubmitButton.addEventListener('click',checkValues);
        function checkValues(){
            event.preventDefault();
            const templogin= email.value;
            const tempPassword=password.value;
             if(loginArray[0]===templogin&&passwordLoginArray[0]===tempPassword){
                let safe =true;
                $("body").load("admin/Create.php");
            }
            else{
                alert("THE USERNAME OR PASSWORD YOU ENTERED WAS INCORRECT");
                email.value="";
                password.value="";
            }
        }
});

</script>
