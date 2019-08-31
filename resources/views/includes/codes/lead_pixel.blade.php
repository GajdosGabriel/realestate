<!-- LEAD PIXEL START -->
<script type="text/javascript" defer="defer" src="//script.leadboxer.com/?dataset=4dc2667dd2408f374bef8bf5f4e2f48f"></script>

<script type="text/javascript" defer>
    function sendTextForm() {

        // create a new LeadBoxer events object called “map"
        var map = new OTMap();

        // with getElementById you can get the data from all the form events
        var emailTextbox = document.getElementById("email").value;

        // add the form field to the map
        map.put("email", emailTextbox);

        // send the data, give the event a memorable title
        OTLogService.sendEvent("Member area log in", map);
    }

    $("#loginForm").submit(function (e) {
        var form = this;
        e.preventDefault();
        sendTextForm();
        setTimeout(function () {
            form.submit();
        }, 200);
    });
</script>
<!-- LEAD PIXEL END -->