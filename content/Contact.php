<h4 style="text-align:center;color:white;">Do you have questions about our school or just highschool in general? Do you have a problem that you can't figure out, no matter how hard you try? Ask us and we'll see if we can't help you out!</h4>
<form>
<input id="name" placeholder="Name" require>
<select id="grade">
    <option value="9">Freshmen</option>
    <option value="10">Sophmore</option>
    <option value="11">Junior</option>
    <option value="12">Senior</option>
  </select>
<input id="subject" placeholder="Email" require>
<textarea id="Message" placeholder="Insert Your Message here" id="" cols="30" rows="10"></textarea>
<button id="S">Submit</button>
<form>
<script>
    var CoDatabase= firebase.database().ref("Contact");
var CSubmit=document.getElementById("S");
var Cname=document.getElementById("name");
var Cgrade=document.getElementById("grade");
var Csubject=document.getElementById("subject");
var Ccontent=document.getElementById("Message");
CSubmit.addEventListener("click" ,SubmitMessage);

function SubmitMessage(event){
event.preventDefault();
const message={
    name:Cname.value,
    grade:Cgrade.value,
    subject:Csubject.value, 
    content:Ccontent.value
}
Cname.value="";
Csubject.value="";
Cgrade.value="";
Ccontent.value="";
CoDatabase.push(message);

}
</script>
