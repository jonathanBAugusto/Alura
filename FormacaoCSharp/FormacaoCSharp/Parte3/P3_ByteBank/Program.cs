using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using P3_ByteBank.Funcionarios;
using P3_ByteBank.Sistemas;

namespace P3_ByteBank
{
    class Program
    {
        static void Main(string[] args)
        {
            CalcularBonificacao();
            UsarSistema();

            Console.ReadKey();
        }

        public static void UsarSistema()
        {
            SistemaInterno sistemaInterno = new SistemaInterno();

            Diretor roberta = new Diretor("656.745.858-52");
            roberta.Nome = "Roberta";
            roberta.Senha = "123456";


            GerenteDeConta camila = new GerenteDeConta("321.515.858-96");
            camila.Nome = "Camila";
            camila.Senha = "123";


            ParceiroComercial parceiro = new ParceiroComercial();
            parceiro.Senha = "1233";

            sistemaInterno.Logar(roberta, "123456");
            sistemaInterno.Logar(camila, "123456");
            sistemaInterno.Logar(camila, "123");
            sistemaInterno.Logar(parceiro, "1233");
        }

        public static void CalcularBonificacao()
        {
            GerenciadorBonificacao gerenciadorBonificacao = new GerenciadorBonificacao();

            Designer pedro = new Designer("321.515.858-96");
            pedro.Nome = "Pedro";

            Diretor roberta = new Diretor("656.745.858-52");
            roberta.Nome = "Roberta";

            Auxiliar igor = new Auxiliar("785.125.532-76");
            igor.Nome = "Igor";

            GerenteDeConta camila = new GerenteDeConta("321.515.858-96");
            camila.Nome = "Camila";

            gerenciadorBonificacao.Registrar(pedro);
            gerenciadorBonificacao.Registrar(roberta);
            gerenciadorBonificacao.Registrar(igor);
            gerenciadorBonificacao.Registrar(camila);

            Console.WriteLine("Total de bonificações do mês " + gerenciadorBonificacao.GetTotalBonificacao());
        }
    }
}
