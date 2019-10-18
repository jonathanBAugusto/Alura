const http = require('http');

const servidor = http.createServer(function(req,res){
    let html = '';
    if(req.url == '/'){
    html = `
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Node Server</title>
</head>
<body>
    <h1>Home</h1>
</body>
</html>
    `;
    }else if(req.url == '/teste'){
        html = `
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Node Server</title>
    </head>
    <body>
        <h1>Teste</h1>
    </body>
    </html>
        `;
    }
    res.end(html);
});
servidor.listen(3000);