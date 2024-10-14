<x-layout>
    <div class="container mt-5">
        <h2 class="text-center text-primary mb-4">Data Registrasi Penumpang</h2>

        <!-- Success Alert -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Passenger Registration Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tanggal Berangkat</th>
                        <th scope="col">Tujuan</th>
                        <th scope="col">Asal</th>
                        <th scope="col">Nama Penumpang</th>
                        <th scope="col">No Kursi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $index => $ticket)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $ticket->tgl_berangkat }}</td>
                            <td>{{ $ticket->tujuan }}</td>
                            <td>{{ $ticket->asal }}</td>
                            <td>{{ $ticket->user->name }}</td>
                            <td>{{ $ticket->no_kursi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
