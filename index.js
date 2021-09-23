//tabs handler
let tasks = document.getElementById("tasks");
let done = document.getElementById("done");
let create = document.getElementById("create");
let login = document.getElementById("login");
let logout = document.getElementById("logout");
let themename = document.getElementById("light");
let theme = document.getElementById("theme");
let thememode = 0;
//Theme switcher
light.addEventListener('click',function(){
  if(thememode==1){
    theme.href='';
    thememode=0;
    document.getElementById("light").style.backgroundImage='url("./lightmode.svg")';
  }
  else{
    theme.href='light.css';
    thememode=1;
    document.getElementById("light").style.backgroundImage = "url('darkmode.svg')";
  }
});
tasks.addEventListener('click',shownotes);
create.addEventListener('click',createTasks);
done.addEventListener('click',showdoneTasks);
login.addEventListener('click',userlogin);
function userlogin(){
  console.log('login pressed');
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("notes").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "login.php", true);
    xmlhttp.send();
}

function signup(){
  console.log("hist");
      var xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("notes").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "signup.php", true);
  xmlhttp.send();

}

function shownotes(){
    console.log("hist");
        var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("notes").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "tasks.php", true);
    xmlhttp.send();

}


function createTasks(){
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("notes").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "create.php", true);
    xmlhttp.send();
}

function showdoneTasks(){
  console.log("done task clicked!");
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("notes").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "done.php", true);
    xmlhttp.send();
}


function deleteTask($id){
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("notes").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "deleteTask.php?id="+$id, true);
    xmlhttp.send();
}

function doneTask($id){
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("notes").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "doneTask.php?id="+$id, true);
    xmlhttp.send();
}


function pendingTask($id){
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("notes").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "pending.php?id="+$id, true);
    xmlhttp.send();
}


function test(){
  console.log("Hey");
}

