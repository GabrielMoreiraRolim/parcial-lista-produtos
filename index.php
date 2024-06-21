<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Lista de Produtos</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Produto 1 -->
           <?php
            include_once 'conexao.php';
            $rs =$con->query ("SELECT * FROM produtos");
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                echo '
                   <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src='.$row->imagem.' alt="Produto 1" class="w-full h-64 object-cover mb-2" />
  <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">'.$row->nome.'</h2>
                    <p class="text-gray-700 mb-4">'.$row->valor.'</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Comprar</button>
                    </div>
            </div> ';
            }
                    ?>
        </div>
    </div>
</body>
</html>