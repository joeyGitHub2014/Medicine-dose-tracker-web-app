<x-layout>
        <div class="container">
            <h1>EDIT MEDICATION</h1>
            @if ($errors->any())
                <div class="text-center alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="/update/{{ $medication->id }}"  method="POST">
                @csrf
                <label for="mname">Medication name:</label>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Medication name"  id="mname" name="mname" required maxlength="80"
                    value= {{ $medication->name }}  >
                </div>

                <label for="dosage">Dosage amount:</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control"  placeholder="dosage"  id="dosage" name="dosage" required maxlength="4" size="4"  value= {{ $medication->dosage }}>
                </div>
                <label for="freq">Frequency :</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control"  placeholder="Frequency"  id="freq" name="freq" required maxlength="4" size="4" value= {{ $medication->frequency }}> 
                </div>
                <input type="submit"  class="btn btn-primary" value="Update">
            </form>
            <a href='/account' class="btn btn-primary mt-3"> Cancel </a>

        </div>
</x-layout>
