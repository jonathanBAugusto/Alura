using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace P3_ByteBank.Funcionarios
{
    class Diretor : Funcionario
    {
        public Diretor(string cpf, double salario) : base(cpf: cpf, salario: salario)
        {
            Console.WriteLine("Funcionario Instanciado");
        }

        public override void AumentarSalario()
        {
            Salario *= 1.15;
        }

        public override double GetBonificacao()
        {
            return Salario + base.GetBonificacao();
        }

        ~Diretor() { Console.WriteLine("Destruido " + Nome); }
    }
}
