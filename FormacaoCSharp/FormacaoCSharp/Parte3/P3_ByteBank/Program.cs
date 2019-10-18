using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using P3_ByteBank.Funcionarios;

namespace P3_ByteBank
{
    class Program
    {
        static void Main(string[] args)
        {
            GerenciadorBonificacao gerenciador = new GerenciadorBonificacao();


            Funcionario carlos = new Funcionario(cpf: "192.168.112-36", salario: 2000);
            carlos.Nome = "Carlos";
            carlos.AumentarSalario();
            gerenciador.Registrar(carlos);

            Diretor roberta = new Diretor(cpf: "898.168.112-36", salario: 5000);
            roberta.Nome = "Roberta";

            gerenciador.Registrar(roberta);

            Console.WriteLine(carlos.Nome);
            Console.WriteLine(carlos.GetBonificacao());
            Console.WriteLine(roberta.Nome);
            Console.WriteLine(roberta.GetBonificacao());
            Console.WriteLine(gerenciador.GetTotalBonificacao());

            Console.WriteLine("Total de Funcionarios: " + Funcionario.TotalDeFuncionarios);
            
            Console.ReadKey();
        }
    }
}
