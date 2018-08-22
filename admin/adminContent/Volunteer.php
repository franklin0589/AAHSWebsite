<div id="Volunteer">
        <div class="title">Volunteer</div>
        <form class="adminform"action="">
                <input id="Vtitle" placeholder="title" type="text">
                
                <input id="Vimg" placeholder="image" type="text">
                <input id="Vurl" placeholder="link" type="text">
                <textarea id="Vcontent" name="" cols="30" rows="10"></textarea>
                <button id="Vsubmit">Submit</button>
                <button id="Vremove">Remove All</button>
        </form>
    </div>

<script>
    var VDatabase= firebase.database().ref("volunteer");
    var VSubmit=document.getElementById("Vsubmit");
    var Vtitle=document.getElementById("Vtitle");
    var Vimg=document.getElementById("Vimg");
    var Vurl=document.getElementById("Vurl");
    var VRemove=document.getElementById("Vremove");
    var Vcontent=document.getElementById("Vcontent");
    VSubmit.addEventListener('click',SubmitVolunteer);

    function SubmitVolunteer(event){
        event.preventDefault();
        const volunteer={
            title:Vtitle.value,
            imgUrl:Vimg.value,
            articleLink:Vurl.value,  
            content:Vcontent.value
        }
        Vtitle.value="";
        Vimg.value="";
        Vcontent.value="";
        Vurl.value="";
        VDatabase.push(volunteer);
        
    }
    VRemove.addEventListener('click',removevAll);
    function removevAll(){
        event.preventDefault();
        VDatabase.remove().then(function() {
    console.log("Remove succeeded.")
  })
  .catch(function(error) {
    console.log("Remove failed: " + error.message)
    });
}
</script>