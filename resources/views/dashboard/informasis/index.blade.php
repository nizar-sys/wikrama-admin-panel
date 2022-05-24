@extends('layouts.app')
@section('title', 'Informasi Lainnya')

@section('title-header', 'Informasi Lainnya')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Informasi Lainnya</li>
@endsection
@section('content')
    @include('_partials.modals.image-detail')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h2 class="card-title h3">Informasi Lainnya</h2>
                    <div class="table-responsive">
                        <table class="table table-flush table-hover" id="table-data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Media</th>
                                    <th>Created</th>
                                    <th>Last Update</th>
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
    var urlAjax = "{{ route('datatable.informasi') }}";
    var tablePengguna = $('#table-data').DataTable({
        processing: true,
        serverSide: true,
        responsive: false,
        ajax: urlAjax,
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {
                data: 'title'
            },
            {
                data: 'media',
                orderable: false,
                searchable: false
            },
            {
                data: 'created_at'
            },
            {
                data: "updated_at"
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
                title: 'Data Informasi Lainnya',
                text: '<i class="fas fa-file-excel"></i> Excel',
                className: 'btn btn-sm btn-success',
                exportOptions: {
                    stripHtml: false,
                    columns: [0, 1, 2, 3, 4, 5],
                    sheetName: 'Data User',
                    sheetHeader: true,
                    sheetFooter: false,
                    exportData: {
                        decodeEntities: true,
                    },
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Data Informasi Lainnya',
                text: '<i class="fas fa-file-pdf"></i> PDF',
                className: 'btn btn-sm btn-danger',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5]
                },
                // set alignment option
                customize: function (doc) {
                    // import img from data base64
                    var img = $('.img-thumb').map(function() {
                        return this.src;
                    }).get();

                    for (var i = 0, c = 1; i < img.length; i++, c++) {
                            doc.content[1].table.body[c][2] = {
                                image: img[i],
                                width: 120,
                                height: 70
                            }
                        }
                }
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
                    window.location.href = "{{ route('informasis.create') }}";
                }
            }
            @endif
        ],
    });

    function updateData(id) {
        window.location.href = "{{ route('informasis.edit', ':id') }}".replace(':id', id);
    }


    function showImageDetail(path) {
        var modalImg = $('#imageDetail');
        modalImg.modal('show');
        modalImg.find('#img-view').html('<img src="'+path+'" class="img-fluid">');
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
            var url = "{{ route('informasis.destroy', ':id') }}";
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