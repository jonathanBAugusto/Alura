using P3_ByteBank.Funcionarios;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace P3_ByteBank.Sistemas
{
    public interface IAutenticavel
    {
        string Senha { get; set; }
        bool Autenticar(string senha);
    }
}
