using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CS_5_CaracteresETextos
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Excutando Projeto 5 - Caracteres e Texto");

            char primeiraLetra = 'a';
            Console.WriteLine(primeiraLetra);

            primeiraLetra = (char)65;
            Console.WriteLine(primeiraLetra);

            primeiraLetra += (char)1;
            Console.WriteLine(primeiraLetra);

            string titulo = "Alura Cursos de Tecnologia" + 2020;
            Console.WriteLine(titulo);
            string cursosProgramacao = @"
                - .NET
                - Java
                - JS
            ";
            Console.WriteLine(cursosProgramacao);
            int count = 0;
            int countAux = 0;
            
            //while (true && count <= char.MaxValue)
            //{
            //    try
            //    {
            //        Console.Write(((char)count).ToString() + (countAux == 7 ? "\n" : ""));
            //        count++;
            //        countAux++;
            //    }
            //    catch 
            //    {
            //        break;
            //    }
            //}
            //Console.WriteLine();
            //Console.WriteLine("Max Count Char " + count);
            Console.WriteLine("Press ENTER or RETURN to exit...");


            Console.ReadLine();
        }
    }
}
