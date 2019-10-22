const app = require('./config/custom-express')();

app.listen(3000, ()=>{
    console.log('Server started in 3000\' port');
});

require('./controllers/pagamentos');
