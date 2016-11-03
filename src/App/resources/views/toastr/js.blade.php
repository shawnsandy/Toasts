<script>
@if(Session::has('toast.message'))
    var type = "{{ Session::get('toast.type', 'info') }}";

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

toastr["{{ Session::get('toast.type', 'error') }}"]
("{{ Session::get('toast.message', 'Error!') }}", "{{ Session::get('toast.title') }}");

    {{--switch (type) {--}}
        {{--case 'info':--}}
            {{--toastr.info("{{ Session::get('toast.message') }} ");--}}
            {{--break;--}}
        {{--case 'warning':--}}
            {{--toastr.warning("{{ Session::get('toast.message') }}");--}}
            {{--break;--}}
        {{--case 'success':--}}
            {{--toastr.success("{{ Session::get('toast.message') }}");--}}
            {{--break;--}}
        {{--case 'error':--}}
            {{--toastr.error("{{ Session::get('toast.message') }}");--}}
            {{--break;--}}
    {{--}--}}

    @endif

</script>
