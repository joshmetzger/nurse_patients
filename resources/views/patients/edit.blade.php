<head>
    <!-- TailwindCSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
                font-family: 'Nunito';
            }
    </style>
    @livewireStyles
</head>


<h1>Edit Patient</h1>



<form method="post" action="{{route('patient.update', $patient->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div>
        <label for="name" class="">Name: </label>
        <input type="text" name="name" id="name" placeholder="Enter Name" value="{{$patient->name}}"
            class="appearance-none w-1/2 text-gray-700 border border-gray-2000 rounded py-3 px-4 leading-tight"
        >
    </div>

    <div>
        <label for="blood_pressure_systolic">Systolic Blood Pressure: </label>
        <input type="text" name="blood_pressure_systolic" id="blood_pressure_systolic" placeholder="Enter Systolic Blood Pressure" value="{{$patient->blood_pressure_systolic}}"
            class="appearance-none w-1/2 text-gray-700 border border-gray-2000 rounded py-3 px-4 leading-tight"
        >
    </div>

    <div>
        <label for="blood_pressure_diastolic">Diastolic Blood Pressure: </label>
        <input type="text" name="blood_pressure_diastolic" id="blood_pressure_diastolic" placeholder="Enter Diastolic Blood Pressure" value="{{$patient->blood_pressure_diastolic}}"
            class="appearance-none w-1/2 text-gray-700 border border-gray-2000 rounded py-3 px-4 leading-tight"
        >
    </div>

    <button type="submit" 
        class="appearance-none border border-gray-2000 rounded py-3 px-4 bg-gray-200"
    >Update Patient</button>


</form>