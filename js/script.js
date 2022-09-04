function SearchInput() {
    var input, filter, table, tr, td, i, txtValue,found;
    input = document.getElementById("c-table-input");
    filter = input.value.toUpperCase();
    table = document.getElementById("c-table-style");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          found = true;
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
    if(!found) {
      tr[1].style.display = "";
    }
}