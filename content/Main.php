<div id="index_container">

</div>
<table id="event_table"style="width:100%">
  <tr>
    <th>Event</th>
    <th>Freshmen</th> 
    <th>Sophmores</th> 
    <th>Juniors</th> 
    <th>Seniors</th> 
  </tr>
 
</table>
 

<script>
   var MDatabase= firebase.database().ref("main");
    var MContainer=document.getElementById("index_container");
    MDatabase.on("child_added", function(response){
    const object= response.val();
    const MTitle=document.createElement("h2");
    MTitle.className="MTitle";
    MTitle.innerHTML=object.title;
    const Mimg=document.createElement("img");
    Mimg.className="Mimg";
    Mimg.src=object.imgUrl;
    const MContent=document.createElement("div");
    MContent.innerHTML=object.content;
    MContent.className="MContent";
    MContainer.appendChild(Mimg);
    MContainer.appendChild(MTitle);
    MContainer.appendChild(MContent);

});

    var TDatabase= firebase.database().ref("table");
    var table=document.getElementById("event_table");
TDatabase.on("child_added", function(response){
    const object= response.val();
    const Trow=document.createElement("tr");
    const TEvent=document.createElement("td");
    TEvent.innerHTML=object.event;
    const T9=document.createElement("td");
    T9.innerHTML=object.freshmen;
    const T10=document.createElement("td");
    T10.innerHTML=object.sophomores;
    const T11=document.createElement("td");
    T11.innerHTML=object.juniors;
    const T12=document.createElement("td");
    T12.innerHTML=object.senoirs;
    Trow.appendChild(TEvent);
    Trow.appendChild(T9);
    Trow.appendChild(T10);
    Trow.appendChild(T11);
    Trow.appendChild(T12);
    table.appendChild(Trow);
});


</script>