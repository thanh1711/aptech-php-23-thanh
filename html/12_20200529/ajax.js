function loadDoc() {
    var xhttp=new XMLHttpRequest() ;
        xhttp.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200){
                document.getElementById("demo").innerHTML=this.responseText;
                
            }
        };
    xhttp.open("GET", "thanh.txt",true);
    xhttp.send();
    
    }
    loadDoc();