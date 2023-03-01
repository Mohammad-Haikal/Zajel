@if (session()->has('message'))
    <div style="display: none" class="bg-dark fixed-bottom p-2 text-center text-white" id="flash-message" role="alert">
        <small class="text-light m-0">
            {{ session('message') }}
        </small>
    </div>
@endif

<script>
    $(function() {
        $('#flash-message').fadeIn(500).delay(2000).fadeOut(500);
    });
</script>
