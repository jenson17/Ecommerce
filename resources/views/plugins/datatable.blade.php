@push('css')
<link href="{{asset('plugins/datatables/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/datatables/css/responsive.dataTables.min.css')}}" rel="stylesheet">
        @endpush

@push('js')
        <script src="{{asset('plugins/datatables/js/jquery.dataTables.js')}}">
        </script>
        <script src="{{asset('plugins/datatables/js/dataTables.bootstrap4.js')}}">
        </script>
        <script src="{{asset('plugins/datatables/js/dataTables.responsive.min.js')}}">
        </script>
        @endpush
    </link>
</link>