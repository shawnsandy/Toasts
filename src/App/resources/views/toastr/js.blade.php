<script>
            @if(Session::has('toast.message'))
    var type = "{{ Session::get('toast.type', 'info') }}";
    var message = "{{ Session::get('toast.message', 'Error!') }}";
    var title = "{{ Session::get('toast.title') }}";

    toastr.options = {
        timeOut: {{ $options['timeOut'] or 0 }},
        extendedTimeOut: {{ $options['extendedTimeOut'] or 0 }},
        showDuration: {{ $options['showDuration'] or 400 }},
        progressBar: {{ $options['progressBar'] or 'false' }},
        closeButton: true,
        @if(isset($options['closeHtml']))
        closeHtml: "{{ $options['closeHtml'] }}",
        @endif
        closeDuration: {{ $options['closeDuration'] or 120 }},
        closeEasing: "{{ $options['closeEasing'] or 'swing' }}",
        showMethod: "{{ $options['showMethod'] or 'fadeIn' }}",
        hideMethod: "{{ $options['hideMethod'] or 'fadeOut' }}",
        positionClass: "{{ $options['hideMethod'] or 'toast-bottom-right' }}",
        closeMethod: "{{ $options['closeMethod'] or 'slideUp' }}"
    };

    toastr[type](message, title);

    @endif

</script>
