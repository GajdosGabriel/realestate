@if(!isset($_COOKIE['cee_chat']))
    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script type="text/javascript" defer>
        window.__lc = window.__lc || {};
        window.__lc.license = 9136340;
        window.__lc.ga_version = "gtm";
        (function () {
            var lc = document.createElement('script');
            lc.type = 'text/javascript';
            lc.async = true;
            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(lc, s);
        })();
    </script>
@endif