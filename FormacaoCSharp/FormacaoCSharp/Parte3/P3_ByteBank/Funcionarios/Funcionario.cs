using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace P3_ByteBank.Funcionarios
{

    public abstract class Funcionario
    {
        public static int TotalDeFuncionarios { get; private set; }
        public string Nome { get; set; }
        public string Cpf { get; private set; }
        public double Salario { get; protected set; }

        public Funcionario(string cpf, double salario)
        {
            Console.WriteLine((this.GetType().ToString() != null && this.GetType().ToString() != "" && this.GetType().ToString().Contains(".")) ? this.GetType().ToString().Split('.').LastOrDefault() + " Instanciado" : "Sem tipo definido");
            Cpf = cpf;
            Salario = salario;
            TotalDeFuncionarios++;
        }

        public abstract void AumentarSalario();

        public abstract double GetBonificacao();

        ~Funcionario() { Console.WriteLine("Destruido " + Nome); }
    }
}