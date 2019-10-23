const { check, validationResult } = require('express-validator');

module.exports = (app) => {
    app.get('/pagamentos', (req, resp) => {
        resp.send('OK.');
    });
    app.post('/pagamentos/pagamento', [
        check('forma_de_pagamento', 'Forma de pagamento e obrigatorio')
            .not().isEmpty(),
        check('valor', 'Valor e obrigatorio e deve ser decimal')
            .not().isEmpty()
            .isFloat()
    ], (req, resp) => {

        let errors = validationResult(req);

        if (!errors.isEmpty()) {
            console.log('Erros de Validacao: ' + errors);
            resp.status(400).json({ errors: errors.array() });
        }

        let pagamento = req.body;
        pagamento.status = 'CRIADO';
        pagamento.data = new Date();

        let connection = app.persistencia.connectionFactory();
        let pagamentoDao = new app.persistencia.PagamentoDao(connection);
        try {

            pagamentoDao.salva(pagamento, function (error, result) {
                if (error) {
                    console.log('Erro ao inserir no Banco: ' + error)
                    resp.status(500).send(error);
                } else {
                    console.log('pagamento Criado');
                    resp.location('/pagamentos/pagamento/' + result.insertId);
                    resp.status(201).json(pagamento);
                }
            });
        } catch (error) {
            resp.send(error);
        }
    });
    app.put('/pagamentos/pagamento/:id',[],(req, resp)=>{
        let pagamento = {};
        let id = req.params.id;

        pagamento.id = id;
        pagamento.status = 'CONFIRMADO';

        let connection = app.persistencia.connectionFactory();
        let pagamentoDao = new app.persistencia.PagamentoDao(connection);

        pagamentoDao.atualiza(pagamento, (erro)=>{
            if(erro){
                response.status(500).send(erro);
                return;
            }
            resp.send(pagamento);
        });
    });
}