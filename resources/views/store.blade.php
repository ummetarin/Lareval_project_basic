<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
    @layer utilities {
          .cont{
             @apply px-10 mx-auto py-10 ;
        }
      
    }
  </style>
</head>
<body>
  <div class="cont flex flex-row justify-between ">
  <h2 class="text-green-700">Store</h2>
  <button class="btn btn-active btn-secondary"><a href="create">Add New Post</a></button>
  </div>
</body>
</html>
