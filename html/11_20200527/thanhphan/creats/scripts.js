function hienra() {
    var tableBodyElement = document.getElementById('table-body');
    for (var i = 0; i<3; i++) {
     var   tableRow=document.createElement('tr');
     tableBodyElement.appendChild(tableRow);
     var tableData1=document.createElement('td');
     tableData1.innerHTML=i;
     var tableData2=document.createElement('td');
     tableData2.innerHTML= 1;
     var tableData3=document.createElement('td');
     tableData3.innerHTML=2;
     tableRow.appendChild(tableData1);
     tableData1.innerHTML=Thanh;
        tableRow.appendChild(tableData2);
        tableData2.innerHTML=Hung;
        tableRow.appendChild(tableData3);
        tableData3.innerHTML=Long
    

    }
}

 
