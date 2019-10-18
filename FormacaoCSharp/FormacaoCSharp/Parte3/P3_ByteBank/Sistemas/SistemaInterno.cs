using P3_ByteBank.Funcionarios;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace P3_ByteBank.Sistemas
{
    public class SistemaInterno
    {
        public bool Logar(IAutenticavel auth, string senha)
        {
            bool usuarioAutenticado = auth.Autenticar(senha);

            if (usuarioAutenticado)
                Console.WriteLine("Bem-vindo ao ByteBank");
            else
                Console.WriteLine("Falha na autenticação");

            return usuarioAutenticado;
        }
    }
}
