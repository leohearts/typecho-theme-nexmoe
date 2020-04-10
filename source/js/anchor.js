<script>
    leo = document.getElementsByClassName("nexmoe-primary")[0].querySelectorAll("h2");
    for (var i = 0;i<leo.length;i++){
        leo[i].id = leo[i].firstChild.textContent;
    }
    leo = document.getElementsByClassName("nexmoe-primary")[0].querySelectorAll("h3");
    for (var i = 0;i<leo.length;i++){
        leo[i].id = leo[i].firstChild.textContent;
    }
    leo = document.getElementsByClassName("nexmoe-primary")[0].querySelectorAll("h1");
    for (var i = 0;i<leo.length;i++){
        leo[i].id = leo[i].firstChild.textContent;
    }
</script>
