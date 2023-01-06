document.getElementById("search").addEventListener("keyup", (element) => {
    let inputValue = element.target.value;
    let table = document.getElementById("Search_table");
    let tr = table.getElementsByTagName("tr");

    for (i=0;i<tr.length;i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            textValue = td.innerText;
            if (textValue.indexOf(inputValue) > -1) {
                tr[i].style.display = "";
            }else{
                tr[i].style.display = "none";
            }
        }
    }
});