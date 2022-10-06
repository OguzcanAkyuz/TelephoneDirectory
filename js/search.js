function search_person() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('nameler');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style = "";                 
        }
    }
}

// $(document).ready(function(){
//     $("#search").keyup(function(){
    
//         var search = $("#search").val();
//         $.post("search.php", {search: search}, function(result){
//           console.log(result)
//         });
//     });
//   });

