var result=false,result1=false,result5=false,result3=false,result4=false,passw=0,result6=false,result2=false;
function func(){
	console.log("called function");
    var phone=document.getElementById("phone").value;
    var phreg=/^(?:(?:\+|0{0,2})91([\-]*)?|[0]?)?[6789]\d{9}$/;
     result=phone.match(phreg);
    if (!result)
        { result=true;
          document.getElementById("phoneerr").innerHTML="<h3>Phone number not valid</h3>" }
    else{
        document.getElementById("phoneerr").innerHTML=""
    }
}
function func1(){
	console.log("called function");
    var ml=document.getElementById("mail").value;
    var mlreg=/^\w+@([a-zA-Z\.]{3})?((iitr.ac.in)\b)/;
     result1=ml.match(mlreg);
    if (!result1)
        {
          result1=true;
          document.getElementById("mailerr").innerHTML="<h3>Enter a valid mail id</h3>" }
        else{
            document.getElementById("mailerr").innerHTML=""
        } 
}
function func6(){
    console.log("called function");
    var ag=document.getElementById("ag").value;
    var agrex=/[0-9]/;
     result6=(ag>0)
    if (!result6)
        {document.getElementById("agerr").innerHTML="<h3>Enter a age</h3>" }
        else{
            document.getElementById("agerr").innerHTML=""
        }
}
function func2(){
	console.log("called function");
     passw=document.getElementById("passw").value;
    console.log(passw);
    var passreg=/^(?=.*[A-Za-z])(?=.*[!@#$&*])(?=.*[0-9]).{3,16}$/;
     result2=passw.match(passreg);
    if (!result2)
        {
          result2=true;
          document.getElementById("passerr").innerHTML="<h3>Enter a valid password</h3>" }
        else{
            document.getElementById("passerr").innerHTML=""
        }
}
function func3(){
	console.log("called function");
    var cnf=document.getElementById("confirm").value;
     result3=(cnf==passw);
    console.log(cnf+" "+passw+" "+result3);
    if (!(cnf==passw))
        {
          result3=true;
          document.getElementById("confirmerr").innerHTML="<h3>Password not matched</h3>" }
        else{
            document.getElementById("confirmerr").innerHTML=""
        }   
}
function func4(){
	console.log("called function");
    var phone=document.getElementById("nam").value;
    var phreg=/^[a-z A-Z\.\'']+$/;
     result4=phone.match(phreg);
    if (!result4)
        {
          result4=true;
          document.getElementById("namerr").innerHTML="<h3>Name should contain only letters and spaces</h3>" }
        else{
            document.getElementById("namerr").innerHTML=""
        }   
}

function just() {
               if(result && result1 && result2 && result3 && result4)
               {
                 return true;
                 }
               else return false;
}

