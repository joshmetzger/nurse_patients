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
        <livewire:patients-table>

    </div>

    @livewireScripts
</body>
