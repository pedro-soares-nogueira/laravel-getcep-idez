<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busca CEP | Pedro - Idez</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-neutral-900 text-white" style="font-family: Poppins">
    <section class="container m-auto py-20 flex items-center justify-center flex-col px-4">
        <h1  class="text-2xl font-semibold">Busca CEP - Idez</h1>

        <form method="GET" action="/cidades" class="flex gap-6 flex-col items-end mt-10 bg-neutral-700 border border-neutral-600 p-6 rounded-md">
            <div class="flex flex-col gap-3">
                <label for="uf">Informe a UF:</label>
                <input type="text" id="uf" name="uf" placeholder="UF" class="h-10 rounded-md p-4 bg-neutral-500">
            </div>
            <div class="flex flex-wrap gap-6 justify-between w-full">
                <a href="/" class="border border-neutral-200 bg-transparent text-neutral-200 transition-all py-4 px-8 rounded-md">Limpar</a>
                <button type="submit" class="bg-neutral-950 hover:opacity-80 transition-all py-4 px-8 rounded-md">Buscar</button>
            </div>
        </form>

        <div class="border-b border-neutral-400 w-full my-11"></div>
    
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @if ($cidades) 
                @foreach($cidades as $cidade)
                <div class="bg-neutral-700 border border-neutral-600 p-6 rounded-md">
                    <p class="font-semibold text-2xl">{{ $cidade['nome'] }}</p>
                    <p>IBGE: {{ $cidade['codigo_ibge'] }}</p>
                </div>
                @endforeach
            @else
                <p class="text-2xl font-semibold md:col-span-3 lg:col-span-4">Não há cidades para mostrar</p>            
            @endif
        </div>

    </section>
</body>
</html>