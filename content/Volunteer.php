<div id="volunteerContainer">
</div>

<script>
    var VDatabase= firebase.database().ref("volunteer");
    var container=document.getElementById("volunteerContainer");
VDatabase.on("child_added", function(response){
    const object= response.val();
    const VElement=document.createElement("div");
    VElement.className="VElement";
    VElement.style.textAlign="center";
    const VTitle=document.createElement("div");
    VTitle.className="VTitle";
    VTitle.innerHTML=object.title;
    const Vimg=document.createElement("img");
    Vimg.className="Vimg";
    Vimg.src=object.imgUrl;
    const VContent=document.createElement("div");
    VContent.innerHTML=object.content;
    VContent.className="VContent";
    const VLink=document.createElement("a");
    VLink.href=object.articleLink;
    VLink.innerHTML="Click here to learn More";
    VLink.className="VLink";
    VElement.appendChild(Vimg);
    VElement.appendChild(VTitle);
    VElement.appendChild(VContent);
    VElement.appendChild(VLink);
    container.appendChild(VElement);
});


</script>