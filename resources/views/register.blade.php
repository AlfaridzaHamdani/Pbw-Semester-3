<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg p-4">
                    <h3 class="text-center mb-4 text-primary">Train Ticket Registration</h3>

                    <form action="/registration" method="post">
                        @csrf

                        <!-- Your Name -->
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <select name="user_id" class="form-select" id="user_id">
                                <option value="">Select Name</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                        {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Your Position -->
                        <div class="form-group mb-3">
                            <label for="asal" class="form-label">Your Position</label>
                            <input value="{{ old('asal') }}" type="text" class="form-control" id="asal"
                                name="asal" placeholder="Enter Position" required>
                            @error('asal')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Your Destination -->
                        <div class="form-group mb-3">
                            <label for="tujuan" class="form-label">Your Destination</label>
                            <input value="{{ old('tujuan') }}" type="text" class="form-control" id="tujuan"
                                name="tujuan" placeholder="Enter Destination" required>
                            @error('tujuan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Your Seat -->
                        <div class="form-group mb-3">
                            <label for="no_kursi" class="form-label">Your Seat</label>
                            <input value="{{ old('no_kursi') }}" type="text" class="form-control" id="no_kursi"
                                name="no_kursi" placeholder="Enter Seat" required>
                            @error('no_kursi')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Date -->
                        <div class="form-group mb-3">
                            <label for="tgl_berangkat" class="form-label">Date</label>
                            <input value="{{ old('tgl_berangkat') }}" type="date" class="form-control"
                                id="tgl_berangkat" name="tgl_berangkat" required>
                            @error('tgl_berangkat')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Register Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
