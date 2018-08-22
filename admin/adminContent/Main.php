<div id="Main">
        <div class="title">Main</div>
        <form class="adminform"action="">
                <input id="Mtitle" placeholder="title" type="text">
                <input id="Mimg" placeholder="image" type="text">
                <textarea id="Mcontent" name="" cols="30" rows="10"></textarea>
                <button id="Msubmit">Submit</button>
                <button id="Mremove">Clear Old Page</button>
        </form>
        <div class="title">Table</div>
        <form class="adminform"action="">
                <input id="Mevent" placeholder="Event" type="text">
                <input id="M9" placeholder="Freshmen" type="text">
                <input id="M10" placeholder="Sophomores" type="text">
                <input id="M11" placeholder="Juniors" type="text">
                <input id="M12" placeholder="Seniors" type="text">
                
                <button id="Tsubmit">Submit</button>
        </form>
    </div>

<script>
    var MDatabase= firebase.database().ref("main");
    var TDatabase= firebase.database().ref("table");
    var MSubmit=document.getElementById("Msubmit");
    var Mtitle=document.getElementById("Mtitle");
    var Mimg=document.getElementById("Mimg");
    var MRemove=document.getElementById("Mremove");
    var Mcontent=document.getElementById("Mcontent");
    var TSubmit=document.getElementById("Tsubmit");
    var Mevent=document.getElementById("Mevent");
    var M9=document.getElementById("M9");
    var M10=document.getElementById("M10");
    var M11=document.getElementById("M11");
    var M12=document.getElementById("M12");
    MSubmit.addEventListener('click',SubmitMain);

    function SubmitMain(event){
        event.preventDefault();
        const main={
            title:Mtitle.value,
            imgUrl:Mimg.value, 
            content:Mcontent.value
        }
        Mtitle.value="";
        Mimg.value="";
        Mcontent.value="";
        MDatabase.push(main);
        
    }
    MRemove.addEventListener('click',removemAll);
    function removemAll(){
        event.preventDefault();
        MDatabase.remove().then(function() {
    console.log("Remove succeeded.")
  })
  .catch(function(error) {
    console.log("Remove failed: " + error.message)
    });
}
TSubmit.addEventListener('click',SubmitTable);
function SubmitTable(event){
    event.preventDefault();
    const table={
        event:Mevent.value,
        freshmen:M9.value,
        sophomores:M10.value,  
        juniors:M11.value,
        senoirs:M12.value
    }
    Mevent.value="";
    M9.value="";
    M10.value="";
    M11.value="";
    M12.value="";
    TDatabase.push(table);
    
}
</script>