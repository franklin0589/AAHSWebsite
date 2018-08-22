<div id="newsletterContainer">
</div>

<script>
    var NDatabase= firebase.database().ref("newsletter");
    var container=document.getElementById("newsletterContainer");
NDatabase.on("child_added", function(response){
    const object= response.val();
    const NElement=document.createElement("div");
    NElement.className="NElement";
    NElement.style.textAlign="center";
    const NTitle=document.createElement("div");
    NTitle.className="NTitle";
    NTitle.innerHTML=object.title;
    const Nimg=document.createElement("img");
    Nimg.className="Nimg";
    Nimg.src=object.imgUrl;
    const NContent=document.createElement("div");
    NContent.innerHTML=object.content;
    NContent.className="NContent";
    const NLink=document.createElement("a");
    NLink.href=object.articlLink;
    NLink.innerHTML="Click here to learn More";
    NLink.className="NLink";
    NElement.appendChild(Nimg);
    NElement.appendChild(NTitle);
    NElement.appendChild(NContent);
    NElement.appendChild(NLink);
    container.appendChild(NElement);
});


</script>