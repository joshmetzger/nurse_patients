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

<body>

    <div class="container mx-auto">
        <h1 class="text-3xl text-center my-10">Patients</h1>

        <form method="post" action="{{route('patient.store')}}" enctype="multipart/form-data">
        @csrf
        
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter name" class="">
            </div>

            <div>
                <label for="blood_pressure_systolic">Systolic Blood Pressure</label>
                <input type="text" name="blood_pressure_systolic" id="blood_pressure_systolic" placeholder="Enter systolic blood pressure" class="">
            </div>
            
            <div>
                <label for="blood_pressure_diastolic">Diastolic Blood Pressure</label>
                <input type="text" name="blood_pressure_diastolic" id="blood_pressure_diastolic" placeholder="Enter diastolic blood pressure" class="">
            </div>

            <button type="submit" class="">Submit</button>
        
        </form>

        <livewire:patients-table>

        <form action="{{route('patients.export-excel')}}">
            @csrf

            <button type="submit" class="">Download Patients List in Excel</button>

        </form>

        <form action="{{route('patients.export-csv')}}">
            @csrf

            <button type="submit" class="">Download Patients List in CSV</button>
            
        </form>

    </div>

    @livewireScripts
</body>
