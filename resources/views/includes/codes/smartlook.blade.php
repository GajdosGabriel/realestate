<script type="text/javascript">
    window.smartlook||(function(d) {
        var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
        var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
        c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '6788d47605779485587ed7c5c77a0dd329785c4d');

    @if(Auth::check())
    smartlook('consentAPI', 'User consented with API identification.');

    smartlook('identify', "{{ Auth::user()->id }}", {
        "name": "{{ Auth::user()->name }} {{ Auth::user()->surname }}",
        "email": "{{ Auth::user()->email }}",
        "phone": "+{{ Auth::user()->phone_code }}{{ Auth::user()->phone }}"
    });
    @endif
</script>