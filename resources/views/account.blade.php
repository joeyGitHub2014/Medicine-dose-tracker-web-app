<x-layout>
        <div class="container">
            <h1>Medication Account</h1>
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
            <form action="/store"  method="POST">
                @csrf
                <label for="mname">Medication name:</label>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Medication name"  id="mname" name="mname" required maxlength="80">
                </div>

                <label for="dosage">Dosage amount:</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control"  placeholder="dosage"  id="dosage" name="dosage" required maxlength="4" size="4" >
                </div>
                <label for="freq">Frequency :</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control"  placeholder="Frequency"  id="freq" name="freq" required maxlength="4" size="4" > 
                </div>
                <input type="submit"  class="btn btn-primary" value="Submit">
            </form>
            <hr/>
            <h5> Current Medications </h5>
            <div class="container">
                @foreach ($medications as $medication )
                    <div class="row">
                        <div class="col-md">
                            Medication:<b style="color:rgb(216, 139, 30)"> {{ $medication->name }} </b> 
                        </div>             
                        <div class="col-md">
                            Dosage:<b style="color:green"> {{ $medication->dosage }} </b>                   
                        </div>
                        <div class="col-md">
                            Frequency: <b style="color:rgb(129, 11, 179)">{{ $medication->frequency }} </b>                    
                        </div>
                        <div class="col-md">
                            <a href='/edit/{{  $medication->id }}' ><img src="./images/pencil.png" style="margin-left:1rem"  width="10" height="10"  /> </a>
                            <a href='/delete/{{  $medication->id }}'><img src="./images/trash.png"  width="10" height="10" style="margin-left:1rem"  /> </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</x-layout>
