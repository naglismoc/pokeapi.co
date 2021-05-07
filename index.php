<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="container"></div>

    <script>
    //==================================
    // fetch("https://pokeapi.co/api/v2/item/1")
    // .then( data => data.json())
    // .then( data => console.log(data.attributes[0].url));
    

    //===================================
    // fetch("https://pokeapi.co/api/v2/item-attribute/1/")
    // .then( data => data.json())
    // .then( data => {
    //     console.log(data.descriptions[0].description);
    //     document.getElementById('container').innerHTML = data.descriptions[0].description;
    //     });

    //=================================
    // fetch("https://pokeapi.co/api/v2/pokemon?offset=0&limit=2000")
    // .then( data => data.json())
    // .then( data =>{
    //     console.log(data) 
    //     } );


    let HTML = '';

for (let i = 1; i < 50; i++) {
  fetch("https://pokeapi.co/api/v2/pokemon/"+i)
    .then( data => data.json())
    .then( data =>{
        console.log(data.sprites.front_default) 
        let item = `<img src="${data.sprites.front_default}" download="${data.name}.png">`;
        document.getElementById('container').innerHTML += item;
        } );
}
    </script>
    
</body>
</html>