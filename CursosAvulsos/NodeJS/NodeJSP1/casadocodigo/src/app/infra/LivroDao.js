class LivroDao {
    constructor(db) {
        this._db = db;
    }

    get() {
        return new Promise((resolve, reject) => {

            this._db.all(
                'SELECT * FROM livros', (error, results) => {
                    if (error) {
                        console.log('Não foi possivel listar os livros!' + error);
                        return reject('Não foi possivel listar os livros!');
                    }

                    return resolve(results);
                }
            );
        });
    }
    getById(id) {
        return new Promise((resolve, reject) => {

            this._db.get(
                'SELECT * FROM livros WHERE livros.id = ?', [id], (error, result) => {
                    if (error) {
                        console.log('Não foi possivel requisitar o livro!' + error);
                        return reject('Não foi possivel requisitar o livro!');
                    }
                    return resolve(result);
                }
            );
        });
    }
    post(livro) {
        return new Promise((resolve, reject) => {
            this._db.run(
                `INSERT INTO livros(
                    titulo,
                    preco,
                    descricao
                ) VALUES (?,?,?)
                `,
                [
                    livro.titulo,
                    livro.preco,
                    livro.descricao],
                (error) => {
                    if (error) {
                        console.log('Não foi possivel listar os livros!' + error);
                        return reject('Não foi possivel listar os livros!');
                    }

                    resolve();
                }
            );
        });
    }
    put(livro) {
        return new Promise((resolve, reject) => {
            this._db.run(
                `UPDATE livros
                 set titulo = ?, preco = ?, descricao = ? WHERE id = ?
                `,
                [
                    livro.titulo,
                    livro.preco,
                    livro.descricao,
                    livro.id
                ],
                (error) => {
                    if (error) {
                        console.log(error);
                        return reject('Não foi possivel atualizar os livros!');
                    }

                    resolve();
                }
            );
        });
    }
    delete(id) {
        return new Promise((resolve, reject) => {
            this._db.run(
                `DELETE FROM livros WHERE id = ?
                `,
                [id], (error) => {
                    if (error) {
                        console.log(error);
                        return reject('Não foi possivel remover o livro!');
                    }

                    resolve();
                }
            );
        });
    }
}
module.exports = LivroDao;