const LivroDao = require('../infra/LivroDao');
const db = require('../../config/database');

module.exports = (app) => {
    app.get('/', function (req, resp) {
        resp.marko(require('../views/home/home.marko'));
    });

    app.get('/livros', function (req, resp) {
        const livroDao = new LivroDao(db);
        livroDao.get().then(livros => resp.marko(
            require('../views/livros/lista/lista.marko'),
            {
                livros
            }
        )).catch(error => console.log(error));
    });

    app.get('/livros/form', function (req, resp) {
        resp.marko(
            require('../views/livros/form/form.marko', { livro: {} })
        );
    });
    app.get('/livros/form/:id', function (req, resp) {
        const id = req.params.id;
        const livroDao = new LivroDao(db);

        livroDao.getById(id)
            .then(livro =>
                resp.marko(
                    require('../views/livros/form/form.marko'),
                    { livro: livro }
                )
            ).catch(error => console.log(error));
    });

    app.post('/livros', function (req, resp) {
        const livroDao = new LivroDao(db);
        livroDao.post(req.body).then(resp.redirect('/livros')).catch(error => console.log(error));

    });

    app.put('/livros', (req, resp) => {
        const livroDao = new LivroDao(db);
        livroDao.put(req.body).then(resp.redirect('/livros')).catch(error => console.log(error));
    });

    app.delete('/livros/:id', function (req, resp) {
        const id = req.params.id;
        const livroDao = new LivroDao(db);
        livroDao.delete(id).then(() => {
            resp.status(200).end();
        }).catch(error => console.log(error));
    });
};



// app.post();
// app.put();
// app.delete();
// app.options();
// app.patch();