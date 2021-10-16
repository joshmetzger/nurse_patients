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
                <label for="blood_pressure">Blood Pressure</label>
                <input type="blood_pressure" name="blood_pressure" id="blood_pressure" placeholder="Enter blood pressure" class="">
            </div>

            <button type="submit" class="">Submit</button>
        
        </form>

        <livewire:patients-table>

    </div>

    @livewireScripts
</body>
