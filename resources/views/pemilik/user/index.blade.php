@extends('layouts.backend.app')
@section('title', 'Data Users')
@section('content')

<div class="row" id="table-hover-row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Users</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table zero-configuration">
                            <thead>
                              <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>No. WhatsApp</th>
                                    <th>Credit</th>
                                    <th>Foto</th>
                                    <th>KTP</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <span class="badge badge-{{ $user->role == 'Admin' ? 'primary' : ($user->role == 'Pemilik' ? 'success' : 'info') }}">
                                            {{ $user->role }}
                                        </span>
                                    </td>
                                    <td>{{ $user->no_wa }}</td>
                                    <td>{{ number_format($user->credit, 0, ',', '.') }}</td>
                                    <td>
                                        @if($user->foto)
                                            <img src="{{ asset('storage/foto/' . $user->foto) }}" alt="Profile" width="50">
                                        @else
                                            <span class="badge badge-light-secondary">No Photo</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($user->foto_ktp)
                                            <img src="{{ asset('storage/ktp/' . $user->foto_ktp) }}" alt="KTP" width="50">
                                        @else
                                            <span class="badge badge-light-secondary">No KTP</span>
                                        @endif
                                    </td>

                                <td>
    <a href="#" class="btn btn-danger btn-sm delete-user" data-id="{{ $user->id }}">Delete</a>
</td>

                                    
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">No users found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).on('click', '.delete-user', function(e) {
    e.preventDefault();
    console.log('halo');
    var id = $(this).data('id');
    
    if(confirm('Are you sure you want to delete this user?')) {
        $.ajax({
            url: '/pemilik/delete-user',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: id
            },
            success: function(response) {
                location.reload();
            },
            error: function(error) {
                alert('Error deleting user');
            }
        });
    }
});


</script>
@endsection

@push('styles')
<style>
    .table th, .table td {
        vertical-align: middle;
    }
    .badge {
        padding: 0.5em 1em;
    }
</style>
@endpush