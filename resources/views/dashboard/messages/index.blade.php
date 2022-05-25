@extends('layouts.app')
@section('title', 'Messages')

@section('title-header', 'Messages')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Messages</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h2 class="card-title h3">Messages</h2>
                    <div class="table-responsive">
                        <table class="table table-flush table-hover" id="table-data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>last update</th>
                                    <th>Status</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    var urlAjax = "{{ route('datatable.messages') }}";
    var tablePengguna = $('#table-data').DataTable({
        processing: true,
        serverSide: true,
        responsive: false,
        ajax: urlAjax,
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {
                data: 'name'
            },
            {
                data: 'email'
            },
            {
                data: 'message'
            },
            {
                data: 'updated_at'
            },
            {
                data: 'status'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ],
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Cari Data",
            lengthMenu: "Menampilkan _MENU_ data",
            zeroRecords: "Data tidak ditemukan",
            infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
            infoFiltered: "(disaring dari _MAX_ data)",
            paginate: {
                previous: '<i class="fa fa-angle-left"></i>',
                next: "<i class='fa fa-angle-right'></i>",
            }
        },
        dom: 'Blfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'Data Messages',
                text: '<i class="fas fa-file-excel"></i> Excel',
                className: 'btn btn-sm btn-success',
                exportOptions: {
                    stripHtml: false,
                    columns: [0, 1, 2, 3],
                    sheetName: 'Data Messages',
                    sheetHeader: true,
                    sheetFooter: false,
                    exportData: {
                        decodeEntities: true,
                    },
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Data Messages',
                text: '<i class="fas fa-file-pdf"></i> PDF',
                className: 'btn btn-sm btn-danger',
                exportOptions: {
                    columns: [0, 1, 2, 3]
                },
            },
            {
                title: 'Reload',
                text: '<i class="fas fa-sync-alt"></i> Reload',
                className: 'btn btn-sm btn-info',
                action: function (e, dt, node, config) {
                    dt.ajax.url(urlAjax).load();
                }
            },
            @if(Auth::user()->role == 'admin')
            {
                title: "Tambah Data",
                text: '<i class="fas fa-plus"></i> Tambah Data',
                className: 'btn btn-default btn-sm',
                action: function (e, dt, node, config) {
                    window.location.href = "{{ route('messages.create') }}";
                }
            }
            @endif
        ],
    });

    function updateData(id) {
        window.location.href = "{{ route('messages.edit', ':id') }}".replace(':id', id);
    }

    
    function deleteData(id) {
        event.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            var url = "{{ route('messages.destroy', ':id') }}";
            url = url.replace(':id', id);
            if (result.value) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    dataType: 'json',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        if (res.success) {
                            Swal.fire(
                                'Terhapus!',
                                res.message,
                                'success'
                            ).then(function() {
                                tablePengguna.ajax.reload();
                            });
                        } else {
                            Swal.fire(
                                'Gagal!',
                                'Data gagal dihapus.',
                                'error'
                            );
                        }
                    }
                });
            }
        });
    }
</script>
@endsection