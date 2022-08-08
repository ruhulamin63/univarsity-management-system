
    function SearchGradeReport() {

        var name = document.getElementById('name').value;

        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../views/students/getGradeSearch.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('name='+name);

        xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
    }