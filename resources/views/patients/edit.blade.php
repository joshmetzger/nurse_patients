<h1>Edit Patient</h1>



<form method="post" action="{{route('patient.update', $patient->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Name" value="{{$patient->name}}">
    </div>

    <div>
        <label for="blood_pressure_systolic">Systolic Blood Pressure: </label>
        <input type="text" name="blood_pressure_systolic" id="blood_pressure_systolic" placeholder="Enter Systolic Blood Pressure" value="{{$patient->blood_pressure_systolic}}">
    </div>

    <div>
        <label for="blood_pressure_diastolic">Diastolic Blood Pressure: </label>
        <input type="text" name="blood_pressure_diastolic" id="blood_pressure_diastolic" placeholder="Enter Diastolic Blood Pressure" value="{{$patient->blood_pressure_diastolic}}">
    </div>

    <button type="submit">Update Patient</button>


</form>