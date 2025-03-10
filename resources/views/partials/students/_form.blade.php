{{-- Parent div is here just to keep text boxes aligned --}}
<div>
    <div class="mb-2">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            value="{{ old('name', $student->name) }}" aria-describedby="name">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-2">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
            value="{{ old('email', $student->email) }}" aria-describedby="email">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-2">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
            value="{{ old('phone', $student->phone) }}" aria-describedby="phone">
        @error('phone')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-2">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob"
            value="{{ old('dob', $student->dob) }}" aria-describedby="dob">
        @error('dob')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-2">
        <label for="college_id" class="form-label">College</label>
        <select class="form-select @error('college_id') is-invalid @enderror" name="college_id" id="college_id">
            {{-- Default option --}}
            <option value="">Select a College</option>
            {{-- Populates each College as an option with value being id and the name being shown --}}
            @foreach ($colleges as $college)
                <option value="{{ $college->id }}"
                    {{ old('college_id', $student->college_id) == $college->id ? 'selected' : '' }}>
                    {{ $college->name }}
                </option>
            @endforeach
        </select>
        @error('college_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

</div>


<button type="submit" class="btn btn-success">Submit</button>
