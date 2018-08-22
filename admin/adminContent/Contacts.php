<div class="title">Advice</div>
<button id="Cremove">Remove All</button>
<div id="ContactForm">

</div>
<script>
    var CoDatabase=firebase.database().ref("Contact");
    var CRemove=document.getElementById("Cremove");
    var container=document.getElementById("ContactForm")
    CoDatabase.on("child_added",readContactinfo);

    function readContactinfo(response){
        const object= response.val();
        const CElement=document.createElement("div");
        CElement.className="CElement";
        CElement.style.textAlign="center";
        const CName=document.createElement("div");
        CName.className="CTitle";
        CName.innerHTML="Name: "+object.name;
        const Cgrade=document.createElement("div");
        Cgrade.className="Cgrade";
        Cgrade.innerHTML="Grade: "+object.grade;
        const CContent=document.createElement("div");
        CContent.innerHTML="Message: "+object.content;
        CContent.className="CContent";
        const CSubject=document.createElement("div");
        CSubject.innerHTML="Email: "+object.subject;
        CSubject.className="CSubject";
        CElement.appendChild(CName);
        CElement.appendChild(Cgrade);
        CElement.appendChild(CSubject);
        CElement.appendChild(CContent);
        container.appendChild(CElement);
    }
    CRemove.addEventListener('click',removecAll);
    function removecAll(){
        event.preventDefault();
        CoDatabase.remove().then(function() {
        console.log("Remove succeeded.");
         })
        .catch(function(error) {
            console.log("Remove failed: " + error.message);
    });
    }
</script>