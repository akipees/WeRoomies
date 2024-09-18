<script>
    function login()
    {
        var button = document.getElementById("login");
        var user = document.getElementById("email");
        var pass = document.getElementById("password");
        if((user == "seepikawallabh@gmail.com") && pass == "abc")
        {
          button.element.onclick = window.location.href="/pages/dashboard_view";
          
        }
        else
        {
          button.element.onclick = window.location.href="/pages/home";
        }
    }
</script>