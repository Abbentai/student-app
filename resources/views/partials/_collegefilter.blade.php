<select class="form-select" name="college_id" id="filter_college_id">
    {{-- Default option --}}
    <option value="">All Colleges</option>
    {{-- Populates each College as an option with value being id and the name being shown --}}
    @foreach ($colleges as $college)
        <option {{ $college->id == request('college_id') ? 'selected' : '' }} value="{{ $college->id }}">
            {{ $college->name }}
        </option>
    @endforeach
</select>
