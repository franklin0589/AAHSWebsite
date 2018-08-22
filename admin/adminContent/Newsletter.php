<div id="Anewsletter">
    <div class="title">Newsletter</div>
    <form class="adminform"action="">
        <input id="Ntitle" placeholder="title" type="text">
        <input id="Nimg" placeholder="image" type="text">
        <input id="Nurl" placeholder="link" type="text">
        <textarea id="Ncontent" name="" cols="30" rows="10"></textarea>
        <button id="Nsubmit">Submit</button>
        <button id="Nremove">Remove All</button>
    </form>

</div>
<script>
    var NDatabase= firebase.database().ref("newsletter");
    var NSubmit=document.getElementById("Nsubmit");
    var NRemove=document.getElementById("Nremove");
    var Ntitle=document.getElementById("Ntitle");
    var Nimg=document.getElementById("Nimg");
    var Nurl=document.getElementById("Nurl");
    var Ncontent=document.getElementById("Ncontent");
    NSubmit.addEventListener('click',SubmitNewletter);

    function SubmitNewletter(event){
        event.preventDefault();
        const newsletter={
            title:Ntitle.value,
            imgUrl:Nimg.value,
            articlLink:Nurl.value, 
            content:Ncontent.value
        }
        Ntitle.value="";
        Nimg.value="";
        Ncontent.value="";
        Nurl.value="";
        NDatabase.push(newsletter);

    }
    NRemove.addEventListener('click',removeAll)
    function removeAll(){
        event.preventDefault();
        NDatabase.remove().then(function() {
    console.log("Remove succeeded.")
  })
  .catch(function(error) {
    console.log("Remove failed: " + error.message)
  });

    }
</script>